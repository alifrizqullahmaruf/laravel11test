<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home page']);
});

Route::get("/posts", function () {
    $posts = Post::with(['author','category'])->latest()->get();
    $posts = Post::latest()->get();
    return view("posts", ['title' => 'Blog page', 'posts' => $posts,
]);
});

// Route for single post
Route::get('/posts/{post}', function (Post $post) {
    return view('post', ['title' => $post['title'], 'post' => $post]);
});
Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => ' Article in : ' . $category->name, 'posts' => $category->posts]);
});


Route::get('/about', function () {
    return view('about', ['name' => 'Alif Rizz', 'title' => 'About page']);
});

Route::get("/contact", function () {
    return view("contact", ['title' => 'Contact page']);
});
