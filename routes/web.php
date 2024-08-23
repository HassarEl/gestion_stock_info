<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\InventoryController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/produit', [ProductController::class, 'index'])->name('produit');
Route::get('/produit/create', [ProductController::class, 'create'])->name('produit.create');
Route::post('/produit/create', [ProductController::class, 'store'])->name('produit.store');
Route::get('/produit/show/{id}', [ProductController::class, 'show'])->name('produit.show');
Route::get('/produit/edit/{id}', [ProductController::class, 'edit'])->name('produit.edit');

Route::delete('produit/{id}',[ProductController::class, 'destroy'])->name('produit.destroy');
Route::get('produit/search',[ProductController::class, 'search'])->name('search.product');



Route::get('/demmande', [RequestsController::class, 'index'])->name('demmande');
Route::post('/demmande/create', [RequestsController::class, 'store'])->name('demmande.store');
Route::get('/demmande/show/{id}', [RequestsController::class, 'show'])->name('demmande.show');
Route::get('/demmande/accepte', [RequestsController::class, 'acc_dmd'])->name('demmande.accepte');
Route::get('/demmande/accepte/{id}', [RequestsController::class, 'accepte'])->name('demmande.accepte.item');
Route::get('/demmande/refu', [RequestsController::class, 'refu_dmd'])->name('demmande.refu');
Route::get('/demmande/refu/{id}', [RequestsController::class, 'refu'])->name('demmande.refu.item');

Route::get('demmande/search',[RequestsController::class, 'search'])->name('search.demmande');

Route::get('/stock/materiel', [StockController::class, 'materiel'])->name('stock.materiel');
Route::get('/stock/fourniture', [StockController::class, 'fourniture'])->name('stock.fourniture');

Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');
Route::get('/inventory/create', [InventoryController::class, 'create'])->name('inventory.create');
Route::post('/inventory/create', [InventoryController::class, 'store'])->name('inventory.store');
Route::get('/inventory/show/{id}', [InventoryController::class, 'show'])->name('inventory.show');
Route::get('/inventory/edit/{id}', [InventoryController::class, 'edit'])->name('inventory.edit');
Route::post('/inventory/edit/{id}', [InventoryController::class, 'update'])->name('inventory.update');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';