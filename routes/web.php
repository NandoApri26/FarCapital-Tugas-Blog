<?php

use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Models\Product;
use App\Models\Article;

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login_admin', [AuthController::class, 'login_admin'])->name('login_admin');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register_admin', [AuthController::class, 'register_admin']);
Route::get('/logout', [AuthController::class, 'logout']);


// Admin
Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::prefix('/')->group(function () {
        Route::get('/', [HomeController::class, 'index']);
        Route::get('/Home', [HomeController::class, 'index']);
        Route::get('/Home/article', [HomeController::class, 'article']);


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
        Route::get('/Article/create', [ArticleController::class, 'create']);
        Route::post('/Article', [ArticleController::class, 'store']);
        Route::delete('/Article/{article}', [ArticleController::class, 'destroy']);
        Route::get('/Article/{article}/edit', [ArticleController::class, 'edit']);
        Route::get('/Article/{article}/detail', [ArticleController::class, 'show']);
        Route::get('/Article/{article}', [ArticleController::class, 'update']);
    });
});
