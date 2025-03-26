<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $saluto = "Hello World!";

    return view('home', compact("saluto"));
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contacts', function () {
    return view('contacts');
})->name("contacts");