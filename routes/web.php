<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome to laravel';
});

Route::get('/greeting', function () {
    return view('greeting');
});

Route::get('/users', function () {
    $users = User::all();
    return view('users', compact('users'));
});

