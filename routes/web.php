<?php

use App\Http\Controllers\BerkasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataDapatSantunanController;
use App\Http\Controllers\DataPengajuanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\InputProfileController;
use App\Http\Controllers\PengajuanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerwalikotaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\UploadBerkasController;
use App\Http\Controllers\UploadController;

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

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

route::get('syarat', [SyaratController::class, 'syarat'])->name('syarat');

route::get('dbuser', [DashboardController::class, 'dbuser'])->name('dbuser');

route::get('profil/{id}', [ProfilController::class, 'profil']);

route::get('upload', [UploadBerkasController::class, 'upload'])->name('upload');

route::post('/upload-file', [UploadController::class, 'upload']);
route::put('/simpan-data/{id}', [ProfilController::class, 'SimpanData']);

Route::get('dbadmin', [LoginController::class, 'index'])->name('index');


Route::get('pengajuan', [PengajuanController::class, 'pengajuan'])->name('pengajuan');

Route::get('berkasuser/{id}', [BerkasController::class, 'berkasuser'])->name('berkasuser');

Route::get('dbpengajuan', [DataPengajuanController::class, 'dbpengajuan'])->name('dbpengajuan');


Route::get('dbdapatsantunan', [DataDapatSantunanController::class, 'dbdapatsantunan'])->name('dbdapatsantunan');


