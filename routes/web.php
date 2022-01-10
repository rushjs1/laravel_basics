<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

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

Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', function() {
    return view('layouts.about');
});
Route::get('/contact', function() {
    return view('layouts.contact');
});

Route::get('/example/{id}', function ($id) {
   // $user = User::find();
    $post = Post::find($id);
    ray($post->user);
});

Route::get('/example', function(){
   // $user = User::find(1);
    //dd($user->posts);
    $user = User::find(1);
    $user->posts()->create([
        'title' => 'Post whatever',
        'body' => 'This is some body with whatever in it.'
    ]); 
    //ray($user);
});





Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
