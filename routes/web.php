<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/olive-products', 'olive-products')->name('olive.products');
Route::view('/oil-products', 'oil-products')->name('oil.products');
Route::view('/pickle-products', 'pickle-products')->name('pickle.products');
Route::view('/products', 'products')->name('products');
Route::view('/allproducts', 'allproducts')->name('allproducts');

use App\Http\Controllers\ContactController;

Route::post('/contact/submit', [ContactController::class, 'store'])
    ->middleware(['throttle:6,1','web'])
    ->name('contact.store');

