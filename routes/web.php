<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\MAS\StudentController as MASStudent;
use App\Http\Controllers\MAS\ClassController as MASClass;
use App\Http\Controllers\Product\ProductController as CP;
use App\Http\Controllers\BrandController as CB;
use App\Http\Controllers\DistributorController as CD;
use App\Http\Controllers\TransaksiController as CT;

Route::get('/', function () {
    return view('auth.login');
});

// Product Route
Route::middleware('role:admin')->prefix('product/')->group(function(){
        Route::get('/', [CP::class, 'index'])->name('product.index');
        Route::Post('/store', [CP::class, 'store'])->name('product.store');
        Route::get('/create',[CP::class, 'create'])->name('product.create');
        Route::delete('/{kd_barang}/destroy',[CP::class, 'destroy'])->name('product.destroy');
        Route::get('/{kd_barang}/show',[CP::class, 'show'])->name('product.show');
        Route::get('/{kd_barang}/edit',[CP::class, 'edit'])->name('product.edit');
        Route::put('/{kd_barang}/update',[CP::class, 'update'])->name('product.update');

});

// Brand Route
Route::middleware('role:admin')->prefix('brand/')->group(function(){
    Route::get('/', [CB::class, 'index'])->name('brand.index');
    Route::Post('/store', [CB::class, 'store'])->name('brand.store');
    Route::get('/create',[CB::class, 'create'])->name('brand.create');
    Route::delete('/{kd_merek}/destroy',[CB::class, 'destroy'])->name('brand.destroy');
    Route::get('/{kd_merek}/show',[CB::class, 'show'])->name('brand.show');
    Route::get('/{kd_merek}/edit',[CB::class, 'edit'])->name('brand.edit');
    Route::put('/{kd_merek}/update',[CB::class, 'update'])->name('brand.update');

});

// Distributor Route
Route::middleware('role:admin')->prefix('distributor/')->group(function(){
    Route::get('/', [CD::class, 'index'])->name('distributor.index');
    Route::Post('/store', [CD::class, 'store'])->name('distributor.store');
    Route::get('/create',[CD::class, 'create'])->name('distributor.create');
    Route::delete('/{kd_merek}/destroy',[CD::class, 'destroy'])->name('distributor.destroy');
    Route::get('/{kd_distributor}/show',[CD::class, 'show'])->name('distributor.show');
    Route::get('/{kd_distributor}/edit',[CD::class, 'edit'])->name('distributor.edit');
    Route::put('/{kd_distributor}/update',[CD::class, 'update'])->name('distributor.update');

});

// Transaksi Route
Route::middleware('role:kasir')->prefix('transaksi/')->group(function(){
    Route::get('/', [CT::class, 'index'])->name('transaksi.index');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
