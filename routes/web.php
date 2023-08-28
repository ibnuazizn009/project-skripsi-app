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
use App\Http\Controllers\user_controller;

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
Route::get('/', [home::class, 'home']);
Route::get('/welcome', [home::class, 'welcome']);
Route::get('/login', [AuthController::class, 'login_form']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// User Route
Route::get('/user-data', [user_controller::class, 'user'])->middleware('can:create role');
Route::get('/user-data/add', [user_controller::class, 'tambah'])->middleware('can:create role');;
Route::post('/user-data/add', [user_controller::class, 'tambah_user'])->middleware('can:create role');;
Route::get('/user-data/edit/{id}', [user_controller::class, 'edit_user'])->middleware('can:update role');;
Route::post('/user-data/update/{id}', [user_controller::class, 'update_user'])->middleware('can:update role');;
Route::get('/user-data/delete/{id}', [user_controller::class, 'delete_user'])->middleware('can:delete role');;
Route::post('/user-data/update/{id}', [user_controller::class, 'update_status'])->middleware('can:update role');;

// Alumni Route
Route::get('/status-alumni', [alumni_controller::class, 'status_alumni'])->middleware('can:read role');
Route::get('/status_alumni/add', [alumni_controller::class, 'tambah'])->middleware('can:create role');
Route::post('/status_alumni/add', [alumni_controller::class, 'tambah_alumni'])->middleware('can:create role');
Route::get('/status_alumni/edit/{idx}', [alumni_controller::class, 'edit_alumni'])->middleware('can:update role');
Route::post('/status_alumni/update/{idx}', [alumni_controller::class, 'update_alumni'])->middleware('can:update role');
Route::get('/status_alumni/delete/{idx}', [alumni_controller::class, 'delete_alumni'])->middleware('can:delete role');

// Pekerjaan Route
Route::get('/status-pekerjaan', [pekerjaan_controller::class, 'status_pekerjaan'])->middleware('can:read role');
Route::get('/status-pekerjaan/add', [pekerjaan_controller::class, 'tambah'])->middleware('can:create role');
Route::post('/status-pekerjaan/add', [pekerjaan_controller::class, 'tambah_pekerjaan'])->middleware('can:create role');
Route::get('/status-pekerjaan/edit/{idx}', [pekerjaan_controller::class, 'edit_pekerjaan'])->middleware('can:update role');
Route::post('/status-pekerjaan/update/{idx}', [pekerjaan_controller::class, 'update_pekerjaan'])->middleware('can:update role');
Route::get('/status-pekerjaan/delete/{idx}', [pekerjaan_controller::class, 'delete_pekerjaan'])->middleware('can:delete role');

// Periode Route
Route::get('/periode', [periode_controller::class, 'periode'])->middleware('can:read role');
Route::get('/periode/add', [periode_controller::class, 'tambah'])->middleware('can:create role');
Route::post('/periode/add', [periode_controller::class, 'tambah_periode'])->middleware('can:create role');
Route::get('/periode/edit/{idx}', [periode_controller::class, 'edit_periode'])->middleware('can:update role');
Route::post('/periode/update/{idx}', [periode_controller::class, 'update_periode'])->middleware('can:update role');
Route::get('/periode/delete/{idx}', [periode_controller::class, 'delete_periode'])->middleware('can:update role');

// Prodi Route
Route::get('/prodi', [prodi_controller::class, 'prodi'])->middleware('can:read role');
Route::get('/prodi/add', [prodi_controller::class, 'tambah'])->middleware('can:create role');
Route::post('/prodi/add', [prodi_controller::class, 'tambah_prodi'])->middleware('can:create role');
Route::get('/prodi/edit/{kode_dikti?}', [prodi_controller::class, 'edit_prodi'])->middleware('can:update role');
Route::post('/prodi/update/{kode_dikti?}', [prodi_controller::class, 'update_prodi'])->middleware('can:update role');
Route::get('/prodi/delete/{kode_dikti}', [prodi_controller::class, 'delete_prodi'])->middleware('can:delete role');

// Domisili Route
Route::get('/status-domisili', [domisili_controller::class, 'status_domisili'])->middleware('can:read role');
Route::get('/status-domisili/add', [domisili_controller::class, 'tambah'])->middleware('can:create role');
Route::post('/status-domisili/add', [domisili_controller::class, 'tambah_domisili'])->middleware('can:create role');
Route::get('/status-domisili/edit/{idx}', [domisili_controller::class, 'edit_domisili'])->middleware('can:update role');
Route::post('/status-domisili/update/{idx}', [domisili_controller::class, 'update_domisili'])->middleware('can:update role');
Route::get('/status-domisili/delete/{idx}', [domisili_controller::class, 'delete_domisili'])->middleware('can:delete role');

// Wisudawan Route
Route::get('/wisudawan', [wisudawan_controller::class, 'wisudawan'])->middleware('can:read role');

// OLAP Route
Route::get('/olap-online', [olap_online::class, 'olap_online'])->middleware('can:read role');

// JWT
Route::group(['middleware' => 'api', 'prefix' => 'auth'], function($router){
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

// Not Found
Route::get('/404-not-found', [home::class, 'not_found']);
