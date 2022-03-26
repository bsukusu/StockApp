<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function(){
  return view('stockapp');
});
Route::get('/stockapp',[IndexController::class,'index'])->name('stockapp');
Route::get('/categories',function(){ return view('categories');})->name('categories');
Route::get('/stores',function(){ return view('stores');})->name('stores');
Route::get('/products',function(){ return view('products');})->name('products');

Route::get('/contact',function(){return view('contact');})->name('contact');
Route::get("/contact/create",[ContactController::class,'create'])->name('create');
Route::post("/contact",[ContactController::class,'store'])->name('contact-create');

  Route::group(['prefix'=>'user'],function(){
  Route::get('/dashboard',[UserController::class,'index'])->name('dashboard');
  Route::get('/profile',function(){ return view('edit-profile');})->name('edit-profile');
  Route::post('profile/admin',[UserController::class,'createAdmin'])->name('admin');
});
