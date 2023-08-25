<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// We can also write routes like this if no function is needed;
Route::view('/post', 'post')->name('post');

Route::get('/post/{id}', function ($id) {
    return "<h1>This is post with id no: $id</h1>" ;
});


// Route Constraints, To define the type of parameters that were passed to the URL. Any Parameters that doesn't satisfy Route Constraints will return 404 page.

// Different type of Route constraints;
// http://host/post/10 === whereNumber('id');
// http://host/post/baba === whereAlpha('name');
// http://host/post/news10 === whereAlphaNumeric('name');
// http://host/post/song === whereIn('category', ['movie', 'song']);
// http://host/post/@10 === where('id', '[@0-9]+');

Route::get('comment/{title}', function ($title) {
    return "<h1>This is Comment with Title $title. Hehe</h1>";
})->whereAlpha('title');
