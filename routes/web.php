<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('landing.index');
});

Route::get('add_comment/{id}' , [HomeController::class , 'addComment'])->name("addcomment");
Route::get('posts_of_categorie/{categorie}' , [HomeController::class , 'posts_of_categorie'])->name("posts_of_categorie");
Route::get('posts_of_tag/{tag}' , [HomeController::class , 'posts_of_tag'])->name("posts_of_tag");
Route::get('posts' , [HomeController::class , 'posts_list'])->name("posts_list");

Route::resource("post",PostController::class)->only("show");
Route::middleware("auth")->name("admin.")->prefix("admin")->group(function() {
    Route::get('/', function () {
        return view('admin.index');
    })->name("home");
    Route::get('/tags', function () {
        return view('admin.tags');
    })->name("tags");
    Route::resource("posts",PostController::class)->except("show");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
