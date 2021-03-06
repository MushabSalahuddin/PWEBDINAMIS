<?php

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
    return view('home');
});

Route::get('biodata', function () {
    return view('biodata');
});

Route::get('/tambah-blog', function () {
    return view('Blog.TambahBlog');
});

Route::get('/datablog', function () {
    return view('Blog.DataBlog');
});

Route::get('/pengguna', function () {
    return view('Blog.Pengguna');
});

Route::get('/kategori', function () {
    return view('Blog.Kategori');
});

Route::get('/data-blog', 'BlogController@index');

Route::get('/tambah-blog', 'BlogController@tambahblog');