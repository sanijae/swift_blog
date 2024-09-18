<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::latest()->get();
    return view('welcome',['posts' =>$posts]);
});

Route::get('/register-form', function(){ return View('register');});
Route::get('/login-form', function(){ return View('login');});
Route::get('/profile/{user}',[UserController::class, 'profile']);
Route::get('/update-user-info', function(){
    return view('/updateUser');
});
Route::get('/update-password', function(){
    return view('/updatePassword');
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::put('/updateUser', [UserController::class, 'updateUser']);
Route::put('/updatePassword', [UserController::class, 'updatePassword']);

// Posts
Route::get('/create-post-form', function(){return View('createPost');});
Route::get('/details/{post}',[PostsController::class, 'get_post']);
Route::get('/get-edit-post/{post}',[PostsController::class, 'get_edit_post']);
Route::get('/managePost/{user}', function(){
    $posts = Post::where('user_id', Auth::id())->get();
    return view('userPost',['posts'=> $posts]);
});

Route::post('/create-post',[PostsController::class, 'create']);
Route::put('/edit/edit-post/{post}',[PostsController::class, 'editPost']);
Route::delete('/delete/delete-post/{post}',[PostsController::class, 'deletePost']);
