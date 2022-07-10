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

// test
Route::get('/db_mahasiswa',[MahasiswaController::class,'index']);
//end of test

Route::get('/default', function (Request $request) {
    // check session nama_admin
    if ($request->session()->has('admin')) {
        return view('Contents.default');
    } else {
        Session::flash('error', 'Anda harus login terlebih dahulu');
        return redirect('/');
    }
});
Route::get('dataTable', [DashboardController::class, 'index']);
Route::get('dataCourse', [DashboardController::class, 'dataCourse']);
Route::get('dataAdmin', [DashboardController::class, 'dataAdmin']);
// Get data chart
Route::get('dataChartPie', [DashboardController::class, 'dataChartPie']);
Route::get('dataChartBar', [DashboardController::class, 'dataChartBar']);
// Get data Course
Route::get('getCourse', [DashboardController::class, 'getCourse']);
Route::get('getDomisili', [DashboardController::class, 'getDomisili']);
// Forms
Route::get('editForm/{id}', [DashboardController::class, 'editForm']);
Route::post('updateForm', [DashboardController::class, 'updateForm']);
Route::get('delForm/{id}', [DashboardController::class, 'delForm']);
Route::get('createForm', [DashboardController::class, 'createForm']);
Route::post('insertForm', [DashboardController::class, 'insertForm']);

// Login
// Route::get('admin', function () {
//     return view('Guest.auth.login');
// });
Route::get('/', function () {
    return view('Auth.Login');
});
Route::get('/mahasiswa', function () {
    return view('Auth.Login');
});
Route::post('authLogin', [DashboardController::class, 'authLogin']);
Route::get('authLogout', [DashboardController::class, 'authLogout']);

// Mahasiswa
Route::get('mhs', [MahasiswaController::class, 'index']);
Route::get('mhs/calc', function () {
    return view('Guest.calculator');
});
Route::get('mhs/table', function () {
    return view('Guest.table-list');
});
Route::post('loginProcess', [AdminController::class, 'loginProcess']);
