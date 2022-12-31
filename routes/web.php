<?php

use App\Models\Blog;
use App\Models\Trainer;
use App\Models\Membership;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MembershipController;

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

//! index



Route::get('/','App\Http\Controllers\IndexController@index')->name('index');

Route::get('trainer/{id}','App\Http\Controllers\IndexController@showTrainer')->name('trainerShow');

Route::get('blog/{id}','App\Http\Controllers\IndexController@showBlog')->name('blogShow');

Route::get('pricing','App\Http\Controllers\IndexController@pricing')->name('pricing');
Route::get('/blogs','App\Http\Controllers\IndexController@blogs')->name('blogs');
Route::get('/contact','App\Http\Controllers\IndexController@contact')->name('contact');
Route::get('/faq','App\Http\Controllers\IndexController@faq')->name('faq');


//! Admin

Route::get('admin', [AdminController::class, 'index']);

Route::resource('/admin/blog', 'App\Http\Controllers\BlogController');  


Route::resource('/admin/trainer', 'App\Http\Controllers\TrainerController');  

Route::resource('admin/membership', MembershipController::class);





