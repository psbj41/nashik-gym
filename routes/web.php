<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/store', 'Auth\RegisterController@store2')->name('store2');

require 'admin.php';

Route::get('/schedule', function(){
    return view('backend.pages.trainer.schedule.index');
});


require 'frontend.php';
