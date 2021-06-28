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
    return view('welcome');
});

Route::get('/contact/{nom}/{prenom}/{tel}', function ($nom,$prenom,$tel) {
    
    return view('pages.contact', compact('nom','prenom','tel'));
});

Route::get('/about/{fruit}', function ($fruit) {
    return view('pages.about', compact('fruit') );
});
