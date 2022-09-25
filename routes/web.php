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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

// Route::get('/teachers', function () {
//     return view('teachers');
// });

// Route::get('/memories', function () {
//     return view('memories');
// });

// Route::get('/achievements', function () {
//     return view('achievement');
// });

// Route::get('/informations', function () {
//     return view('informations');
// });
