<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
Route::get('/', function (Request $request) {
    if ($request->session()->has('mahasiswa')) {
        return redirect('/mahasiswa/dasbor');
    }
    return view('Auth.Login_mhs');
});

// Dashboard Controller
Route::prefix('admin')->group(function ()
{
    Route::controller(DashboardController::class)->group(function(){
        Route::get('dataTable', 'index');
        Route::get('dataCourse',  'dataCourse');
        Route::get('dataAdmin',  'dataAdmin');
        // Get data chart
        Route::get('dataChartPie',  'dataChartPie');
        Route::get('dataChartBar',  'dataChartBar');
        // Get data Course
        Route::get('getCourse', 'getCourse');
        Route::get('getDomisili',  'getDomisili');
        // Forms
        Route::get('editForm/{id}',  'editForm')->name('editForm');
        Route::post('updateForm',  'updateForm');
        Route::get('delForm/{id}',  'delForm')->name('delForm');
        Route::get('createForm',  'createForm');
        Route::post('insertForm',  'insertForm');
        // admin
        Route::post('authLogin',  'authLogin');
        Route::get('authLogout',  'authLogout');
    });
    Route::get('/', function (Request $request) {
        if($request->session()->has('admin')){
            return redirect('/admin/default');
        }
        return view('Auth.Login');
    });
    Route::get('/default', function (Request $request) {
        // check session nama_admin
        if ($request->session()->has('admin')) {
            return view('Contents.default');
        } else {
            Session::flash('error', 'Anda harus login terlebih dahulu');
            return redirect('/admin');
        }
    });
});

Route::prefix('mahasiswa')->group(function ()
{
    Route::controller(MahasiswaController::class)->group(function ()
    {
        Route::post('authLoginMhs', 'authLoginMhs');
        Route::get('authLogout',  'authLogout');
        Route::get('dasbor','index');
    });
});
