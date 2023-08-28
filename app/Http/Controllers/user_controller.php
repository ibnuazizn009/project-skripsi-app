<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;

class user_controller extends Controller
{
    public function user(Request $request){
        $acc_name = $request->user()->name;
        $acc_email = $request->user()->email;
        $role_name = $request->user()->getRoleNames();

        $users = DB::table('users')->get();
        $user_data = [];
        foreach($users as $key=>$val){
            $user_data[] = $val;
        }

        return view('user', compact('user_data', 'acc_name', 'acc_email', 'role_name'));
    }

    public function tambah(Request $request){
        $acc_name = $request->user()->name;
        $acc_email = $request->user()->email;
        $role_name = $request->user()->getRoleNames();

        return view('tambah_user', compact('acc_name', 'acc_email', 'role_name'));
    }

    public function tambah_user(Request $request){
        
        // $user = User::create($input);

        DB::beginTransaction();
        try {
            $users = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'remember_token' => Str::random(20),
            ]);

            // dd($users);
            $users->markEmailAsVerified();
            $users->assignRole($request->input('roles'));

            DB::commit();
            session()->flash('message', ' Successfully Added Data');
            return redirect('/user-data');
            
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
        }
    }

    public function edit_user($id, Request $request){
        $acc_name = $request->user()->name;
        $acc_email = $request->user()->email;
        $role_name = $request->user()->getRoleNames();
        
        $users = User::where('id', $id)->get();
        return view('edit_user', compact('users', 'acc_name', 'acc_email', 'role_name'));
    }

    public function update_user(int $id, Request $request){
       try {
        //code...
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $request->status
        ]);
        session()->flash('message', ' Successfully Updated');
        return redirect('/user-data');
       } catch (\Throwable $th) {
        //throw $th;
        session()->flash('message',' Unsuccessfull Updated');
        error_log($th);
        return redirect('/user-data');
       }
    }

    public function delete_user($id){
        try {
            DB::table('users')->where('id',$id)->delete();
            session()->flash('message_delete',' Successfully Deleted');
            return redirect('/user-data');
        } catch (\Throwable $th) {
            session()->flash('message_delete',' Unsuccessfull Deleted');
            return $th;
        }
    }

    public function update_status(int $id, Request $request){
        try {
            DB::table('users')->where('id', $request->id)->update([
                'status' => $request->status
            ]);
            session()->flash('message', ' Successfully Updated');
            return redirect('/user-data');
        } catch (\Throwable $th) {
            session()->flash('message_delete',' Unsuccessfull Deleted');
            return $th;
            //throw $th;
        }
    }
}
