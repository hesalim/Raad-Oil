<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function(){
return view('contact');
});
Route::get('/olive-products',function(){
return view('olive-products');
});

Route::get('/oil-products',function(){
    return view('oil-products');
});


Route::get('/pickle-products',function(){
    return view('pickle-products');
});
Route::get('/products',function(){
    return view('products');
});
Route::get('/allproducts',function(){
    return view('allproducts');
});

use App\Http\Controllers\ContactController;

Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.store');

