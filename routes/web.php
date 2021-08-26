<?php

use App\Models\Post; 
use App\Models\User; 
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view ('home', [
        "name" => "Zaedan Alghifari",
        "active" => 'home',
        "email" => "zaedan108@gmail.com",
        "image" => "coba.png",
        "title" => "Home"

    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "name" => "zaedan", 
        "active" => 'about',
        "email" => "zaedan108@gmail.com",
        "image" => "coba.png",
        "title" => "About"
    ]);
});

Route::get('/blog', [PostController::class,'index']);
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories',[
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::paginate(7)
    ]);
    
});


Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post By Category : $category->name",
        "active" => 'categories',
        'posts' => $category->posts,
    ]);
    
    
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('category','user'),
        
    ]);
    
    
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

