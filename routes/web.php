<?php

use App\Http\Controllers\Portfolio\PortfolioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('posts', [PostController::class, 'index'])->name('posts.list');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/offline', function () {
    return view('vendor/laravelpwa/offline');
});
