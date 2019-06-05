<?php

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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/architecture', function () {
    return view('architecture');
})->name('architecture');
Route::get('/board-of-directiors', function () {
    return view('board-of-directiors');
})->name('board-of-directiors');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/software-engineering', function () {
    return view('software-engineering');
})->name('software-engineering');
Route::get('/graphic-design', function () {
    return view('graphic-design');
})->name('graphic-design');

Route::get('/visual-production', function () {
    return view('visual-production');
})->name('visual-production');

