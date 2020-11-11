<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

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

Route::group(['namespace' => 'Auth'], function () {
    Route::get('/register', 'EmployeeRegisterController@showRegistrationForm');
    Route::post('/register', 'EmployeeRegisterController@register')->name('employees.register');
    Route::get('/login', 'LoginController@showLoginForm');
    Route::post('/login', 'LoginController@login')->name('employees.login');
    Route::post('/logout', 'LoginController@logout');
});
//Route::group(['middleware' => 'employee'], function () {
Route::group(['namespace' => 'Panel'], function () {
    Route::group(['prefix' => 'panel'], function () {
        Route::group(['namespace' => 'Dashboard'], function () {
            Route::group(['prefix' => 'dashboard'], function () {
                Route::get('/', 'DashboardController@dashboard');
            });
        });
    });
});
//});


Route::get('/', function () {
    return view('welcome');
});
