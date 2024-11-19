<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Halaman utama
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard'); // Halaman Dashboard
})->name('dashboard');

Route::get('/categories', function () {
    return view('categories'); // Halaman Categories
})->name('categories');

Route::get('/products', function () {
    return view('products'); // Halaman Product
})->name('products');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


use App\Http\Controllers\ProductController;

// Route utama menggunakan ProductController
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Route untuk fitur CRUD produk
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/', function () {
    return view('home'); // Pastikan nama file view sesuai
});
