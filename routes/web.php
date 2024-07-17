<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Background;
use App\Livewire\Name;
use App\Livewire\Calculator;
use App\Livewire\Items;

Route::get('/', function () {
    return view('menu');
});

Route::get('/counter', Counter::class)->name('counter');
Route::get('/background', Background::class)->name('background');
Route::get('/name', Name::class)->name('name');
Route::get('/calculator', Calculator::class)->name('calculator');
Route::get('/items', Items::class)->name('items');