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
})->name('index');
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');
Route::get('/terms', function () {
    return view('terms');
})->name('terms');
Route::get('/lab', function () {
    return view('lab');
})->name('lab');
Route::get('/pharmacy', function () {
    return view('pharmacy');
})->name('pharmacy');
Route::get('/search_doc', function () {
    return view('search_doc');
})->name('search_doc');
Route::get('/doctor/login', function () {
    return view('auth.login_doc');
})->name('doctor_login');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
