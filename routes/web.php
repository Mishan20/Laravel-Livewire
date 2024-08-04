<?php

use App\Http\Livewire\Products\Index as ProductsIndex;
use App\Http\Livewire\Products\Create as ProductsCreate;
use App\Http\Livewire\Products\Edit as ProductsEdit;
use App\Http\Livewire\Products\Delete as ProductsDelete;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/products', ProductsIndex::class)->name('product');
Route::get('/products/create', ProductsCreate::class);
Route::get('/products/edit/{product}', ProductsEdit::class)->name('products.edit');
Route::get('/products/delete/{product}', ProductsDelete::class)->name('products.delete');