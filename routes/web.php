<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ($id) {
    echo "Selamat Datang";
});

Route::get('/about', function ($id) {
    echo "1941720128_FrebyandikaDwimaPutra";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman artikel dengan ID" . $id;
});