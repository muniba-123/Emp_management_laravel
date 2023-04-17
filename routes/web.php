<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [ProductController::class,"index"])->name("product.index");

//Route to get home controller
//index is method name and home.index is route name
Route::get('/home/{name?}', [HomeController::class,"index"])->name("home.index");

//getting a view from a route
Route::get('/user', function ($id=null) {
    return view("user");
});

//getting a view from controller
Route::get('/userviewfromcontroller', [UserController::class,"index"])->name("user.index");

// Route::get('/home', function () {
//     return view("home");
// });

Route::get('/login', [LoginController::class,"index"])->name("login.index");
// ->middleware("checkuser"); //MW applied on this route only
Route::post('/login', [LoginController::class,"submit"])->name("login.submit");

Route::get('/posts', [PostController::class,"getAllPosts"])->name("posts.getAllPosts");
Route::get('/postsUsingModel', [PostController::class,"getAllPostsUsingModel"])->name("posts.getAllPostsUsingModel");


