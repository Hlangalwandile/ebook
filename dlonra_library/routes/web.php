<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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



Route::controller(HomeController::class)->group(function (){
    Route::get('/','index')->name('home');
    Route::get('/home','index')->name('home');
    Route::get('/library','library')->name('library');
    Route::get('/library/book/{id}','openBook')->name('library.book');

});

Auth::routes([
    'verify'=> true
]);

Route::controller(DashboardController::class)->group(function (){
    Route::get('/dashboard','showDashboard')->name('dashboard');
    Route::get('/books','showBooks')->name('dashboard.books');
    Route::get('/redeem','showRedeem')->name('dashboard.redeem');
    Route::post('/deleteBook/{id}','deleteBook')->name('deleteBook');
    Route::post('redeem/token','redeemToken')->name('redeemToken');
});

Route::controller(EbookController::class)->group(function (){
    Route::get('/book/{id}','show')->name('ebook.show');
    Route::get('/books/addBook','addBook')->name('ebook.addBook');
    Route::get('/books/editBook/{id}','editBook')->name('ebook.editBook');
    Route::POST('/books/saveEditBook/{id}','saveEditBook')->name('saveEditBook');
    Route::get('/books/{book}/{module}','showModule')->name('ebook.showModule');
    Route::post('/ebook/saveBook','saveBook')->name('ebook.saveBook');
});

Route::controller(UnitController::class)->group(function (){
    Route::get('/books/units/{book}/{module}','index')->name('units.index');
    Route::get('/units/pushUp/{book}/{module}/{id}','pushUp')->name('unit.pushUp');
    Route::get('/units/pushDown/{book}/{module}/{id}','pushDown')->name('unit.pushDown');
    Route::get('/units/add-unit/{book}/{module}','addUnit')->name('units.addUnit');
    Route::post('/units/save-unit/{book}/{module}','saveUnit')->name('units.saveUnit');
    Route::get('/units/delete-unit/{book}/{module}/{id}','deleteUnit')->name('unit.delete');
});

Route::controller(ModuleController::class)->group(function (){
    Route::POST('/module/add/{book}','addModule')->name('module.addModule');
});