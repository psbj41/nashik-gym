<?php

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
//expense
Route::resource('/expense', 'Admin\ExpenseController');

Route::group(['middleware'=>['auth'], 'prefix'=>'dashboard'],function(){

//User Controller
Route::resource('/user', 'Admin\UserController');

//Role Controller
Route::get('/role/{role}/assign-permission','Admin\RoleController@assignPermissionView')->name('assign.permission');
Route::post('/role/{role}/assign-permission','Admin\RoleController@assignPermission')->name('assign.permission.store');
Route::resource('/role', 'Admin\RoleController');

//Permission Controller
Route::resource('/permission', 'Admin\PermissionController');

//Contact
Route::resource('/contact','Frontend\ContactController');

//Category
Route::resource('/category', 'Admin\CategoryController');

//Post
Route::resource('/post', 'Admin\PostController');

//Site Settings
Route::get('/site-settings', 'Admin\SiteOptionController@index')->name('setting.index');
Route::post('/site-settings', 'Admin\SiteOptionController@store')->name('setting.store');

//Payment Option
Route::resource('/payment', 'Admin\PaymentController');

//Testimonial
Route::resource('/testimonial', 'Admin\TestimonialController');

//Schedule
Route::resource('/schedule', 'Admin\ScheduleController');

//Package
Route::resource('/package', 'Admin\PackageController');

//Programs
Route::resource('/program', 'Admin\ProgramController');

//Trainer
Route::resource('/trainer', 'Admin\TrainerController');

//Subscription
Route::resource('/subscription', 'Admin\SubscriptionController');

//Payment Message
Route::resource('/message', 'Admin\MessageController');
Route::post('/sendsms', 'Admin\MessageController@send_message')->name('send.sms');

//Invoice Generator
Route::get('/invoice/{subscription}', 'Admin\SubscriptionController@invoice')->name('invoice.index');

//Home Settings
Route::get('/home-settings', 'Admin\HomeOptionController@index')->name('homesetting.index');
Route::post('/home-settings', 'Admin\HomeOptionController@store')->name('homesetting.store');

//Birthday Message
Route::get('/birthday/message', 'Admin\MessageController@birthday')->name('birthday.index');
Route::post('/birthday/sendsms', 'Admin\MessageController@birthday_send_message')->name('birthday.send.sms');

//Money Table
Route::resource('/moneytable', 'Admin\MoneytableController');

//User Profile
Route::get('/profile/{user}', 'Admin\UserController@profile')->name('user.profile');

//Personal Training
Route::resource('/tsub', 'Admin\TsubController');
Route::get('/invoice/tsub/{tsub}', 'Admin\TsubController@invoice')->name('tsub.invoice.index');

//Personal Training Money
Route::get('/ptmoney', 'Admin\PtmoneyController@index')->name('ptmoney.index');
Route::delete('/ptmoney/{ptmoney}', 'Admin\PtmoneyController@destroy')->name('ptmoney.destroy');


//Video
Route::resource('/video', 'Admin\VideoController');



//Workout
Route::resource('workout', 'Admin\WorkoutController');
Route::get('assign', 'Admin\WorkoutController@assignView')->name('assign.workout.index');
Route::get('assign/create', 'Admin\WorkoutController@assign')->name('assign.workout');
Route::post('assign/create', 'Admin\WorkoutController@assignStore')->name('workout.assign.store');
Route::get('assign/{user:id}', 'Admin\WorkoutController@assignMyView')->name('my.assign.workout.index');
});
