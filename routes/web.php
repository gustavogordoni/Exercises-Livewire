<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Menu;
use App\Livewire\Counter;
use App\Livewire\Background;
use App\Livewire\Name;
use App\Livewire\Calculator;
use App\Livewire\Items;
use App\Livewire\CascadingDropdown;

Route::get('/', Menu::class)->name('menu');
Route::get('/counter', Counter::class)->name('counter');
Route::get('/background', Background::class)->name('background');
Route::get('/name', Name::class)->name('name');
Route::get('/calculator', Calculator::class)->name('calculator');
Route::get('/items', Items::class)->name('items');
Route::get('/cascading-dropdown', CascadingDropdown::class)->name('cascading-dropdown');