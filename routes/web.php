<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('backend.page.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

 Route::get('/',[FrontController::class, 'index'])->name('/');
 Route::get('/fashion',[FrontController::class, 'fashion']);
 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index']);
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/product',[ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create',[ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store',[ProductController::class, 'store'])->name('product.store');
    Route::put('/product/update/{id}',[ProductController::class, 'update'])->name('product.update');
    Route::get('product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');


   
});

require __DIR__.'/auth.php';
