<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');

Route::resource('posts', PostController::class);
//Route::group(['prefix' => 'posts'], function (){
//    Route::get('/', [PostController::class, 'index'])->name('posts.index');
//    Route::post('/', [PostController::class, 'store'])->name('posts.store');
//    Route::get('/new', [PostController::class, 'create'])->name('posts.create');
//    Route::get('/{id}', [PostController::class, 'show'])->name('posts.show');
//    Route::patch('/{id}', [PostController::class, 'update'])->name('posts.update');
//    Route::delete('/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
//    Route::get('/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
//});
