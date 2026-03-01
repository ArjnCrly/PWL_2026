<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Gerbang';
});
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/world', function () {
    return 'world';
}); 
Route::get('/salam', function () {
    return 'Selamat Datang';
});
Route::get('/about', function () {
    return 'Nama : Arjuna Carly Dhymas Mahendra <br> NIM : 2341720156  Kelas : TI-2B';
});
Route::get('/user/{name?}', function ($name='John') {
 return 'Nama saya '.$name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
Route::get('articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});