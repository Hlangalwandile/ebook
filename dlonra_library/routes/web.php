<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ModuleController;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(DashboardController::class)->group(function (){
    Route::get('/dashboard','showDashboard')->name('dashboard');
    Route::get('/dashboard/books','showBooks')->name('dashboard.books');
    Route::get('/dashboard/redeem','showRedeem')->name('dashboard.redeem');
});

Route::controller(EbookController::class)->group(function (){
    Route::get('/book/{id}','show')->name('ebook.show');
    Route::get('/books/addBook','addBook')->name('ebook.addBook');
    Route::get('/books/editBook/{id}','editBook')->name('ebook.editBook');
    Route::get('/books/{book}/{module}','showModule')->name('ebook.showModule');
    Route::post('/ebook/saveBook','saveBook')->name('ebook.saveBook');
});

Route::controller(UnitController::class)->group(function (){
    Route::get('/books/units/{book}/{module}','index')->name('units.index');
    Route::get('/books/units/add-unit/{book}/{module}','addUnit')->name('units.addUnit');
    Route::post('/books/units/save-unit/{book}/{module}','saveUnit')->name('units.saveUnit');
});

Route::controller(ModuleController::class)->group(function (){
    Route::POST('/module/add/{book}','addModule')->name('module.addModule');
});