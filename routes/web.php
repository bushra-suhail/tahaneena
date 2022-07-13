<?php

use App\Http\Controllers\Admin\CardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\MainController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('admin')->name('admin.')->middleware('auth','admin')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('index');
    //categories Route
    Route::get('categories/trash',[CategoryController::class,'trash'])->name('categories.trash');
    Route::get('categories/{id}/restore',[CategoryController::class,'restore'])->name('categories.restore');
    Route::resource('categories',CategoryController::class);

    //Cards Route

    Route::get('cards/trash',[CardController::class,'trash'])->name('cards.trash');
    Route::get('cards/{id}/restore',[CardController::class,'restore'])->name('cards.restore');
    Route::resource('cards',CardController::class);


});

Route::get('/',[MainController::class,'index'])->name('website.index');
Route::get('/card1/{id}',[MainController::class,'card1'])->name('card.details');
Route::get('/card2/{id}',[MainController::class,'card2'])->name('card2.details');







Route::get('/card3/{id}',[MainController::class,'card3'])->name('card3.details');
Route::get('/card4/{id}',[MainController::class,'card4'])->name('card4.details');
Route::get('/card5/{id}',[MainController::class,'card5'])->name('card5.details');
Route::get('/card6/{id}',[MainController::class,'card6'])->name('card6.details');
Route::get('/card7/{id}',[MainController::class,'card7'])->name('card7.details');
Route::get('/card8/{id}',[MainController::class,'card8'])->name('card8.details');
Route::get('/card9/{id}',[MainController::class,'card9'])->name('card9.details');
Route::get('/card10/{id}',[MainController::class,'card10'])->name('card10.details');
//Route::get('/buycard/{id}/thanks',[MainController::class,'buycard'])->name('buy card thanks');




