<?php

use App\Http\Controllers\RoleController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Route
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/', function () {
    return view('auth.loginApp');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('admin', 'Admin\UserController');
    Route::resource('role', 'Admin\RoleController');
    Route::get('adminview', 'admin\UserController@view')->name('adminview');
    Route::resource('produk', 'Admin\ProdukController');
    Route::resource('pelanggan', 'Admin\PelangganController');
});
