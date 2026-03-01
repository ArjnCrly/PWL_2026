<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'index']);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::get('/hello', function () {
    return 'Hello World';
}); 

Route::get('/salam', function () {
    return 'Hello World';
});

Route::get('/user/{name?}', function ($name='John') {
 return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/greeting', [WelcomeController::class, 'greeting']);

