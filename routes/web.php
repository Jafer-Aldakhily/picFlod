<?php

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

Route::get('/', function () {
    return view('pages.home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/about' , function(){
    return view('pages.About');
});

Route::get('/Ads' , function(){
    return view('pages.Ads');
});

Route::get('/careeres' , function(){
    return view('pages.Careers');
});

Route::get('/Cookies' , function(){
    return view('pages.Cookies');
});



Route::get('/page12' , function(){
    return view('pages.page12');
});


Route::get('/security' , function(){
    return view('pages.Security');
});


Route::get('/help' , function(){
    return view('pages.Help');
});


Route::get('/terms' , function(){
    return view('pages.Terms');
});


Route::get('/partnerships' , function(){
    return view('pages.Partnerships');
});


Route::get('/policy' , function(){
    return view('pages.Policy');
});

