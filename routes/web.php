<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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

Route::get('/Product', [ProductController::class, 'index']);
Route::get('/Product/create', [ProductController::class, 'create']);
Route::post('/Product', [ProductController::class, 'store']);
Route::delete('/Product/{product}', [ProductController::class, 'destroy']); //Fungsi Delete
Route::get('/Product/{product}/edit', [ProductController::class, 'edit']);
route::get('/Product/{product}/detail', [ProductController::class, 'show']);
route::patch('/Product/{product}', [ProductController::class, 'update']);

