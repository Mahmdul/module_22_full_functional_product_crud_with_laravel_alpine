<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//start here after default
// Route::view('/alpine','alpine.demo',['title'=>'Alpine.js']);
// Route::view('/alpine','alpine.demo2',['title'=>'Alpine.js']);
// Route::view('/alpine','alpine.demo3',['title'=>'Alpine.js']);
Route::view('/alpine','alpine.demo4',['title'=>'Alpine.js']);
//For controller part:
Route::get('/', [ProductController::class, 'form']);
// Route::get('/products', [ProductController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);
Route::put('/products/{id}', [ProductController::class, 'update']);

