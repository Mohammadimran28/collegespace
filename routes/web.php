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
Route::get('/index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/teachers', function () {
    return view('teachers');
});

Route::get('/events', function () {
    return view('events');
});


Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/course-single', function () {
    return view('course-single');
});

//Login 

// Roe::view('auth/login', 'auth.login');


// Route::get('/', function () {
//     return view('demo');
// });