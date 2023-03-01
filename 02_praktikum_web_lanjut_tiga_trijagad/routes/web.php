<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contact_Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 01
Route::get('/', function () {
    echo "Welcome! Ini adalah halaman awal website!";
});

//02
Route::prefix('/products')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return 'Ini Adalah Halaman marbel-edu-games';
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return 'Ini Adalah Halaman marbel-and-friends-kids-games';
    });
    Route::get('/riri-story-books', function () {
        return 'Ini Adalah Halaman riri-story-books';
    });
    Route::get('/kolak-kids-songs', function () {
        return 'Ini Adalah Halaman kolak-kids-songs';
    });
});

//03
Route::get('/news/{title?}', function ($title=null) {
    return $title;
});

//04
Route::prefix('/program')->group(function () {
    Route::get('/karir', function () {
        return 'Ini Adalah Halaman Karir';
    });
    Route::get('/magang', function () {
        return 'Ini Adalah Halaman Magang';
    });
    Route::get('/kunjungan-industri', function () {
        return 'Ini Adalah Halaman Kunjungan Industri';
    });
});

//05
Route::get('/about', function () {
    echo "Ini Halaman About Us";
});

//06
Route::resource('/contact-us', ContactController::class)->only('index');
