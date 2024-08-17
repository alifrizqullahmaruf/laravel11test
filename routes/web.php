<?php
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home page']);
});

Route::get("/posts", function () {
    return view("posts", ['title' => 'Blog page', 'posts' => Post::all()]);
});

// Route for single post
Route::get('/posts/{id}', function ($id) {

    $post = Post::find($id);


    return view('post', ['title' => $post['title'], 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Alif Rizz', 'title' => 'About page']);
});

Route::get("/contact", function () {
    return view("contact", ['title' => 'Contact page']);
});
