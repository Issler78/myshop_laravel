<?php

use App\Http\Controllers\MyShopController;
use App\Livewire\Products;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MyShopController::class, 'render'])->name('myshop.index');
Route::get('/product/{name}/details', [MyShopController::class, 'renderDetails'])->name('products.details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/products', Products::class)->name('products.index');
    Route::get('/products/create', [Products::class, 'create'])->name('products.create');
    Route::post('/products', [Products::class, 'store'])->name('products.store');
    Route::get('/products/{id}', [Products::class, 'show'])->name('products.show');
    Route::put('/products/{id}', [Products::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [Products::class, 'destroy'])->name('products.destroy');
});
