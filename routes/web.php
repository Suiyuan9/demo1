<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employee', EmployeeController::class);
Auth::routes();

Route::controller(HomeController::class)->group(function(){
    Route::get('/index2','index2')->name('index2');
    Route::get('/index3','index3')->name('index3');
    Route::get('/home','index')->name('home');

});
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
