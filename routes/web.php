<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('backend/layouts/app');
});

// Route Dashboard
Route::livewire('/dashboard', 'dashboard')->name('admin.dashboard')->layout('backend.layouts.app');

// Route Product
Route::livewire('/product', 'product.products')->name('admin.product')->layout('backend.layouts.app');
Route::livewire('/product/create', 'product.create')->name('admin.product.create')->layout('backend.layouts.app');
// Route::livewire('/product/edit/{id}', 'product.edit')->name('product.edit');

// Route Brand
Route::livewire('/brand', 'brand.brands')->name('admin.brand')->layout('backend.layouts.app');

// Route Category
Route::livewire('/category', 'category.categories')->name('admin.category')->layout('backend.layouts.app');



