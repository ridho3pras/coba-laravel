<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;



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


//menggunakan closure

//halaman home
Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        "image" => "amd.jpg",
        "image1" => "ryzen.jpg",
        "image2" => "kucing.jpg",
    ]);
});

//halaman about
Route::get('/about', function () {
    return view('about', [
        "name" => "Ridho Tri Prasetyo",
        "email" => "ridho1178@gmail.com",
        "image" => "3x4.jpg",
        "title" => "About",
    ]);
});


//menggunakan controller

//halaman post
Route::get('/posts', [PostController:: class, 'index']);
Route::get('posts/{post:slug}', [PostController:: class, 'show']);


//halaman categories
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Cataegories',
        'categories' => Category::all()
    ]);
});


//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//registrasi
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

//Dashboard post
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)
->middleware('auth');


//admin category
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])
->middleware('admin');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')
->middleware('admin');



// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Post by Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });

