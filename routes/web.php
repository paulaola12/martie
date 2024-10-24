<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;


// Route::prefix('product')->group(function(){

// })
// Route::get('/', function () {
//     return view('product.index');  
// });

// Route::get('/', [allproductsController::class, 'index']);

// Route::get('/', [ProductController::class, 'index']);
// // Route::get('/products', [ProductController::class, 'index']);
// Route::get('/', [ProductController::class, 'index'])
// rework

Route::get('/',[ProductController::class, 'index'])->name('index');

Route::get('/about', [ProductController::class, 'about'])->name('about');

Route::get('/contact', [ProductController::class, 'contact'])->name('contact');

Route::get('/products', [ProductController::class, 'products'])->name('products');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
