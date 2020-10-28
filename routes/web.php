<?php

use App\Http\Controllers\RoleController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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


Auth::routes();

Route::get('/', function () {
    return view('auth.loginApp');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('role/api', 'RoleController@apirole')->name('api.role');
    Route::resource('role', 'RoleController');

    Route::resource('produk', 'Admin\ProdukController');
    Route::resource('pelanggan', 'Admin\PelangganController');
});
