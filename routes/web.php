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

Route::prefix('doctor')->middleware('auth')->name('doctor.')->group(function(){
Route::get('/', [App\Http\Controllers\DoctorDashboardController::class, 'index'])->name('home');
Route::resource('schedules', App\Http\Controllers\ScheduleController::class);
Route::get('problem', [App\Http\Controllers\DoctorDashboardController::class, 'problem'])->name('problem');
Route::get('settings', [App\Http\Controllers\DoctorDashboardController::class, 'settings'])->name('settings');
Route::get('profile', [App\Http\Controllers\DoctorDashboardController::class, 'profile'])->name('profile');
Route::get('logout', [App\Http\Controllers\DoctorDashboardController::class, 'logOut'])->name('logout');
}
);

Route::get('/patient/home', [App\Http\Controllers\PatientDashboardController::class, 'index'])->name('patient.home');

//Pateint routes
Route::prefix('patient')->middleware('auth')->name('patient.')->group(function(){
    Route::get('/', [App\Http\Controllers\PatientDashboardController::class, 'index'])->name('home');
    Route::resource('schedules', App\Http\Controllers\ScheduleController::class);
    Route::get('problem', [App\Http\Controllers\PatientDashboardController::class, 'problem'])->name('problem');
    Route::get('updates', [App\Http\Controllers\PatientDashboardController::class, 'updates'])->name('updates');
    Route::get('profile', [App\Http\ControllersPatientrDashboardController::class, 'profile'])->name('profile');
    Route::get('logout', [App\Http\Controllers\PatientDashboardController::class, 'logOut'])->name('logout');
    }
    );
    