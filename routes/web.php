<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[App\Http\Controllers\ShortLinkController::class,'register'])->name('register');
Route::post('/register_store',[App\Http\Controllers\ShortLinkController::class,'register_store'])->name('register_store');
Route::get('/login',[App\Http\Controllers\ShortLinkController::class,'login'])->name('login');
Route::post('/login_user',[App\Http\Controllers\ShortLinkController::class,'login_user'])->name('login_user');
Route::post('/logout',[App\Http\Controllers\ShortLinkController::class,'logout'])->name('logout');
Route::group(['middleware'=>'auth'],function(){
Route::get('/dashboard',[App\Http\Controllers\ShortLinkController::class,'dashboard'])->name('dashboard');
Route::get('urlshortner',[App\Http\Controllers\ShortLinkController::class,'urlshortner'])->name('urlshortner');
Route::get('{code}', 'ShortLinkController@shortenLink')->name('shorten.link');  
Route::post('/url_store',[App\Http\Controllers\ShortLinkController::class,'url_store'])->name('url_store');
});