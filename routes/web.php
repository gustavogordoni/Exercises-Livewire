<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Background;
 
Route::get('/', function () {
    return view('menu');
});

Route::get('/counter', Counter::class);
Route::get('/background', Background::class);