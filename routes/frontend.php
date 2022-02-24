<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use Spatie\Permission\Models\Role;
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

Route::get('/', 'Frontend\PagesController@index')->name('/');
Route::get('/about', 'Frontend\PagesController@about')->name('about');
Route::get('/developer', 'Frontend\PagesController@developer')->name('developer');
Route::get('/services', 'Frontend\PagesController@services')->name('services');
Route::get('/trainer', 'Frontend\PagesController@trainer')->name('trainer');

//Contact Controller
Route::get('/enquiry','Frontend\PagesController@enquiry')->name('enquiry');
Route::post('/contact/store2','Frontend\PagesController@store2')->name('contact.store2');
Route::get('/enquiry','Frontend\PagesController@enquiry')->name('enquiry');

//Blogs
Route::get('/blogs', 'Frontend\BlogController@allPost')->name('blogs');
Route::get('/category/{category:slug}', 'Frontend\BlogController@categoryWisePosts')->name('category-post');
Route::get('/blogs/{post:slug}', 'Frontend\BlogController@singlePost')->name('single-post');

//Program
Route::get('/program/{program:slug}', "Frontend\PagesController@singleProgram")->name('single-program');

//Trainer
Route::get('/trainer/{trainer:slug}', "Frontend\PagesController@singleTrainer")->name('single-trainer');

//Videos
Route::get('/videos', 'Frontend\PagesController@video')->name('videos');
