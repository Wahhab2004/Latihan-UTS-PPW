<?php

use App\Http\Controllers\ManajemenBuku;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about', [
        'name'=> 'Wahhab Awaludin',
        'status' => 'Pelajar'
    ]);
}
);

Route::get('/profile', function() {
    return view('profile');
});

Route::get('/home', [ManajemenBuku::class, 'index']);