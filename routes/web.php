<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\ReferalController;
use App\Http\Controllers\UserController;
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

// Route::get('login', function () {
//     return view('login');
// })->name('login');

// Route::get('signup', function () {
//     return view('signup');
// })->name('signup');

Route::get('forgotpassword', function () {
    return view('forgotpassword');
})->name('forgotpassword');

Route::get('main', function () {
    return view('main');
})->name('main');

Route::get('recharge', function () {
    return view('recharge');
})->name('recharge');

Route::get('withdraw', function () {
    return view('withdraw');
})->name('withdraw');

Route::get('referal', function () {
    return view('refer');
})->name('referal');

Route::get('package', function () {
    return view('package');
})->name('package');

Route::get('referal-link/{id}', [ReferalController::class,'create'])->name('referal.create');

Route::get('deposit', [RechargeController::class,'create'])->name('deposit');
Route::post('deposit', [RechargeController::class,'store'])->name('deposit.store');
Route::get('change_status/{id}', [RechargeController::class,'change_status'])->name('deposit.change_status');

Route::get('ads', function () {
    return view('ads');
})->name('ads');







Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('/admin', function () {
//     return view('admin/auth/login');
// })->name('admin/login');

// Route::get('admin/login', function () {
//     return view('admin.auth.login');
// })->name('admin/login');

Route::get('admin/home', function () {
    return view('admin.home');
})->name('admin.home');

Route::get('forget_password', function () {
    return view('admin.auth.forget_password');
})->name('admin/forget_password');

Route::get('home', function () {
    return view('admin/home');
})->name('admin/home');


// automatic routes------------------------
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/submitted', [UserController::class, 'submitted'])->name('users.submitted');
Route::get('/users/deposits/{id}', [UserController::class, 'deposits'])->name('users.deposits');
