<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EarningController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\ReferalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WithdrawController;
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

Route::get('about', function () {return view('about');})->name('about');
Route::get('privacy', function () {return view('privacy');})->name('privacy');
Route::get('terms', function () {return view('terms');})->name('terms');
Route::get('faq', function () {return view('faq');})->name('faq');
Route::get('forgotpassword', function () {return view('forgotpassword');})->name('forgotpassword');
Route::get('main', function () {return view('main');})->name('main');
Route::get('recharge', function () {return view('recharge');})->name('recharge');
Route::get('referal', function () {return view('refer');})->name('referal');
Route::get('package', function () {return view('package');})->name('package');
Route::get('/', function () {return view('index');})->name('index');
Route::get('forget_password', function () {return view('admin.auth.forget_password');})->name('admin/forget_password');

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function (){
    // Route::middleware('admin')->group(function (){
        Route::get('admin/home', [AdminController::class,'index'])->name('admin.home');
        Route::get('home', function () {return view('admin/home');})->name('admin/home');
        Route::get('change_status/{id}', [RechargeController::class,'change_status'])->name('deposit.change_status');
        Route::post('withdraws/update',[WithdrawController::class,'update'])->name('withdraws.update');
        Route::get('withdraws/pendings',[WithdrawController::class,'pending'])->name('withdraws.pending');

    // });
    Route::get('referal-link/{id}', [ReferalController::class,'create'])->name('referal.create');
    Route::get('deposit/{package_id}', [RechargeController::class,'create'])->name('deposit');
    Route::post('deposit', [RechargeController::class,'store'])->name('deposit.store');
    Route::get('recharge', [RechargeController::class,'view_recharge'])->name('recharge.create');
    Route::post('recharge', [RechargeController::class,'store_recharge'])->name('recharge.store');
    Route::get('ads',[AdController::class,'index'])->name('ads');
    Route::get('earnings',[EarningController::class,'index'])->name('earnings.index');
    Route::get('earnings/store/{ad_id}',[EarningController::class,'store'])->name('earnings.store');
    Route::post('withdraws/store',[WithdrawController::class,'store'])->name('withdraws.store');
    Route::get('withdraws',[WithdrawController::class,'index'])->name('withdraws.index');
    Route::get('withdraws/create',[WithdrawController::class,'create'])->name('withdraws.create');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/submitted', [UserController::class, 'submitted'])->name('users.submitted');
    Route::get('/users/deposits/{id}', [UserController::class, 'deposits'])->name('users.deposits');    
});
