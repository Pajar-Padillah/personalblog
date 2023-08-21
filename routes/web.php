<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardBlogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard/index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/user/{user:id}/edit', [UserController::class, 'edit']);
Route::put('/dashboard/user/{user:id}/edit', [UserController::class, 'update']);

// Route::resource('/dashboard/user', UserController::class)->middleware('auth');
Route::resource('/dashboard/blog', DashboardBlogController::class)->middleware('auth');
Route::resource('/dashboard/categories', CategoryController::class)->middleware('auth');
Route::resource('/dashboard/gallery', GalleryController::class)->middleware('auth');

Route::middleware(['auth'])->group(function () {
});
