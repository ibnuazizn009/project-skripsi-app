<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alumni_controller;
use App\Http\Controllers\domisili_controller;
use App\Http\Controllers\pekerjaan_controller;
use App\Http\Controllers\periode_controller;
use App\Http\Controllers\prodi_controller;
use App\Http\Controllers\wisudawan_controller;
use App\Http\Controllers\home;
use App\Http\Controllers\olap_online;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main Route

Route::get('/', [home::class, 'home'])->middleware('can:read role');
Route::get('/welcome', [home::class, 'welcome']);
Route::get('/login', [AuthController::class, 'login_form']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Alumni Route
Route::get('/status-alumni', [alumni_controller::class, 'status_alumni'])->middleware('can:read role');
Route::get('/status_alumni/add', [alumni_controller::class, 'tambah']);
Route::post('/status_alumni/add', [alumni_controller::class, 'tambah_alumni']);
Route::get('/status_alumni/edit/{idx}', [alumni_controller::class, 'edit_alumni']);
Route::post('/status_alumni/update/{idx}', [alumni_controller::class, 'update_alumni']);
Route::get('/status_alumni/delete/{idx}', [alumni_controller::class, 'delete_alumni']);

// Pekerjaan Route
Route::get('/status-pekerjaan', [pekerjaan_controller::class, 'status_pekerjaan'])->middleware('can:read role');
Route::get('/status-pekerjaan/add', [pekerjaan_controller::class, 'tambah']);
Route::post('/status-pekerjaan/add', [pekerjaan_controller::class, 'tambah_pekerjaan']);
Route::get('/status-pekerjaan/edit/{idx}', [pekerjaan_controller::class, 'edit_pekerjaan']);
Route::post('/status-pekerjaan/update/{idx}', [pekerjaan_controller::class, 'update_pekerjaan']);
Route::get('/status-pekerjaan/delete/{idx}', [pekerjaan_controller::class, 'delete_pekerjaan']);

// Periode Route
Route::get('/periode', [periode_controller::class, 'periode'])->middleware('can:read role');
Route::get('/periode/add', [periode_controller::class, 'tambah']);
Route::post('/periode/add', [periode_controller::class, 'tambah_periode']);
Route::get('/periode/edit/{idx}', [periode_controller::class, 'edit_periode']);
Route::post('/periode/update/{idx}', [periode_controller::class, 'update_periode']);
Route::get('/periode/delete/{idx}', [periode_controller::class, 'delete_periode']);

// Prodi Route
Route::get('/prodi', [prodi_controller::class, 'prodi'])->middleware('can:read role');
Route::get('/prodi/add', [prodi_controller::class, 'tambah']);
Route::post('/prodi/add', [prodi_controller::class, 'tambah_prodi']);
Route::get('/prodi/edit/{kode_dikti}', [prodi_controller::class, 'edit_prodi']);
Route::post('/prodi/update/{kode_dikti}', [prodi_controller::class, 'update_prodi']);
Route::get('/prodi/delete/{kode_dikti}', [prodi_controller::class, 'delete_prodi']);

// Domisili Route
Route::get('/status-domisili', [domisili_controller::class, 'status_domisili'])->middleware('can:read role');
Route::get('/status-domisili/add', [domisili_controller::class, 'tambah']);
Route::post('/status-domisili/add', [domisili_controller::class, 'tambah_domisili']);
Route::get('/status-domisili/edit/{idx}', [domisili_controller::class, 'edit_domisili']);
Route::post('/status-domisili/update/{idx}', [domisili_controller::class, 'update_domisili']);
Route::get('/status-domisili/delete/{idx}', [domisili_controller::class, 'delete_domisili']);

// Wisudawan Route
Route::get('/wisudawan', [wisudawan_controller::class, 'wisudawan'])->middleware('can:read role');

// OLAP Route
Route::get('/olap-online', [olap_online::class, 'olap_online'])->middleware('can:read role');

// JWT
Route::group(['middleware' => 'api', 'prefix' => 'auth'], function($router){
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});
