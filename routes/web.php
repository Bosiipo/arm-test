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

Route::get('/blog/article/hanging-your-work-boot-in-2020', function () {
    return view('hanging-your-work-boot-in-2020');
});

Route::get('/blog/article/6-ways-to-stay-fit-in-2020', function () {
    return view('6-ways-to-stay-fit-in-2020');
});

Route::get('/blog/article/10-ways-to-make-more-money-in-2020', function () {
    return view('10-ways-to-make-more-money-in-2020');
});

Route::get('/blog/article/photo-story-rftf-7-in-pictures', function () {
    return view('photo-story-rftf-7-in-pictures');
});

Route::get('/blog/article/the-good-the-fun-and-the-winnings', function () {
    return view('the-good-the-fun-and-the-winnings');
});

Route::get('/blog/article/two-crazy-runners', function () {
    return view('two-crazy-runners');
});

Route::get('/blog/article/making-an-informed-retirement-decision', function () {
    return view('making-an-informed-retirement-decision');
});

Route::get('/blog/article/can-you-fix-these', function () {
    return view('can-you-fix-these');
});

Route::get('/blog/article/reaching-financial-freedom', function () {
    return view('reaching-financial-freedom');
});

Route::get('/blog/article/what-is-it-like-living-on-20k-month-find-out-from-this-artisan', function () {
    return view('what-is-it-like-living-on-20k-month-find-out-from-this-artisan');
});

Route::get('/blog/article/pfas-encourage-contributors-to-participate-in-the-data-recapturing-exercise', function () {
    return view('pfas-encourage-contributors-to-participate-in-the-data-recapturing-exercise');
});

// Route::get('/blog/article/two-crazy-runners', function () {
//     return view('two-crazy-runners');
// });
// Route::get('/blog/article/two-crazy-runners', function () {
//     return view('two-crazy-runners');
// });
// Route::get('/blog/article/two-crazy-runners', function () {
//     return view('two-crazy-runners');
// });
// Route::get('/blog/article/two-crazy-runners', function () {
//     return view('two-crazy-runners');
// });





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
