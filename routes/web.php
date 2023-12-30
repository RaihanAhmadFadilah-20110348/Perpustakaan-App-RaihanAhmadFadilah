<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\API\PegawaiController;
use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Pengunjung\PengunjungController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Raihan Ahmad Fadilah",
        "email" => "raihanafadilah.18@gmail.com",
        "image" => "rai.png"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

// Halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

//
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => 'User Posts',
        'posts' => $author->posts,
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/user', UserController::class)->middleware('auth');

Route::resource('/books', BooksController::class)->middleware('auth');

Route::resource('/pegawai', PegawaiController::class)->middleware('auth');

Route::group(['prefix' => 'pengunjung'], function () {
    Route::get('/index', [PengunjungController::class, 'index']);
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/signin', [SigninController::class, 'index']);
});