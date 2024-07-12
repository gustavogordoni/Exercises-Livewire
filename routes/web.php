<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Background;
use App\Livewire\Name;
use App\Livewire\Calculator;

Route::get('/', function () {
    return view('menu');
});

Route::get('/counter', Counter::class);
Route::get('/background', Background::class);
Route::get('/name', Name::class);
Route::get('/calculator', Calculator::class);