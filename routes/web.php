<?php

use App\Http\Controllers\Admin\CardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\MainController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('admin')->name('admin.')->group(function(){
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
Route::get('/signin',[MainController::class,'login'])->name('website.login');



