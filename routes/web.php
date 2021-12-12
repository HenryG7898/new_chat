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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['user','auth'])->group(function(){
    Route::get('/editUser/{id}',[\App\Http\Controllers\profile::class,'Edit']);
    Route::post('updateUser',[\App\Http\Controllers\profile::class,'updateUser']);
    Route::view('main','User.main');
    Route::view('Chat','User.messages');
    Route::view('Profile','User.profile');
});

Route::get('Sign',function (){
    return view('Sign');
})->name("login");
Route::post('Signing',[\App\Http\Controllers\SigninController::class,'onLogin']);

Route::post('Delete/{id}',[\App\Http\Controllers\profile::class,'delete']);



Route::middleware(['admin','auth'])->group(function(){
    Route::get('dashboard',[\App\Http\Controllers\MessagesController::class,'show']);
    Route::view('info','Admin.Profile');
});
