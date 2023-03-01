<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\PageControllers;
use App\Http\HomeControllers;
use App\Http\AboutControllers;
use App\Http\ArticlesControllers;



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

 Route::get('/', [PageController::class, 'index']);
 Route::get('/about', [PageController::class, 'about']);
 Route::get('/articles/{id}', [PageController::class, 'articles']);



// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticlesController::class, 'articles']);
