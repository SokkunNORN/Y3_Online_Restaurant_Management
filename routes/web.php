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
    return view('index');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('admin.login');
    });

    Route::get('/', function () {
        return view('admin.index');
    });

    Route::get('/dashboard', function () {
        return view('admin.index');
    });
    
    Route::get('/card', function () {
        return view('admin.cards');
    });

    Route::get('/chart', function () {
        return view('admin.charts');
    });

    Route::get('/buttons', function () {
        return view('admin.buttons');
    });

    Route::get('/table', function () {
        return view('admin.tables');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
