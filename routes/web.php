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
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/article/your-health-deserves-some-love', function () {
    return view('your-health-deserves-some-love');
});

Route::get('/blog/article/before-you-make-the-big-career-move', function () {
    return view('before-you-make-the-big-career-move');
});

Route::get('/blog/article/increase-your-work-productivity-with-these-tips', function () {
    return view('increase-your-work-productivity-with-these-tips');
});

/blog/article/hanging-your-work-boot-in-2020



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
