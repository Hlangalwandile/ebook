<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\DashboardController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(DashboardController::class)->group(function (){
    Route::get('/dashboard','showDashboard')->name('dashboard');
    Route::get('/dashboard/books','showBooks')->name('dashboard.books');
    Route::get('/dashboard/redeem','showRedeem')->name('dashboard.redeem');
});

Route::controller(EbookController::class)->group(function (){
    Route::get('/ebook/{id}','show')->name('ebook.show');

});
