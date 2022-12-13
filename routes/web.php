<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Models\Product;
use App\Models\Article;

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

Route::get('/Home', [HomeController::class, 'index']);


// Route Product
Route::get('/Product', [ProductController::class, 'index']);
Route::get('/Product/create', [ProductController::class, 'create']);
Route::post('/Product', [ProductController::class, 'store']);
Route::delete('/Product/{product}', [ProductController::class, 'destroy']); //Fungsi Delete
Route::get('/Product/{product}/edit', [ProductController::class, 'edit']);
Route::get('/Product/{product}/detail', [ProductController::class, 'show']);
Route::patch('/Product/{product}', [ProductController::class, 'update']);

// Route Article
Route::get('/Article', [ArticleController::class, 'index']);