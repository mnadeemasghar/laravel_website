<?php

use Illuminate\Support\Facades\Artisan;
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

//Clear Cache facade value:
Route::get('/clear', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
return '<h1>Cache facade value cleared</h1>';
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('terms', function () {
    return view('terms');
})->name('terms');

Route::get('faq', function () {
    return view('faq');
})->name('faq');

Route::get('user/login', function () {
    return view('login');
})->name('user.login');

Route::get('user/signup', function () {
    return view('signup');
})->name('user.signup');

Route::get('forgotpassword', function () {
    return view('forgotpassword');
})->name('forgotpassword');



Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/admin', function () {
    return view('admin/auth/login');
})->name('admin/login');

Route::get('admin/login', function () {
    return view('admin/auth/login');
})->name('admin/login');

Route::get('forget_password', function () {
    return view('admin/auth/forget_password');
})->name('admin/forget_password');

Route::get('home', function () {
    return view('admin/home');
})->name('admin/home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
