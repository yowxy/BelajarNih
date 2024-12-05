<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomePage');
});

Route::get('/login', function(){
    return view('Auth.login');
});

Route::get('/register',function(){
    return view('Auth.register');
});

Route::get('/tentang-kami', function(){
    return view('tentangkami');
});

Route::get('/tips-belajar', function(){
    return view('tips-belajar');
});

Route::get('/kelas', function(){
    return view('kelas');
});

Route::get('/discussion', function(){
    return view('Discussions.index');
});

Route::get('/discussion-detail', function(){
    return  view('Discussions.detail');
});
