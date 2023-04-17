<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// http://localhost:8000/api/users  access using this url 

Route::get('/users/{name?}', function ($name=null) {
    // ? make param optional
    return "Hi ".$name;
});
// ->where("name",'[a-zA-Z+]'); // to accepts only alphabets as param

// http://localhost:8000/api/product/1  access using this url 

Route::get('/product/{id?}', function ($id=null) {
    // ? make param optional
    return "P.ID ".$id;
});
//->where("id",'[0-9+]'); // to accepts only nums as param (can also be added in routeserviceprovider file)

Route::match(["get","post"], '/students', function (Request $req) {
    
    // return "Requested ".$req->method();
    // return "Requested ".$req->url();
    return "Requested ".$req->fullUrl(); // to include query strings in url
    


});

Route::get('/posts', [HomeController::class,"getAllPosts"])->name("posts.getAllPosts");
Route::get('/post/{id}', [HomeController::class,"getPostById"])->name("posts.getPostById");
Route::get('/addPost', [HomeController::class,"addPost"])->name("posts.addPost");
Route::get('/updatePost/{id}', [HomeController::class,"updatePost"])->name("posts.updatePost");

