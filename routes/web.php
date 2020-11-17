<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\MAS\StudentController as MASStudent;
use App\Http\Controllers\MAS\ClassController as MASClass;
use App\Http\Controllers\Product\ProductController as CP;

Route::get('/', function () {
    return view('welcome');
});


// Agus Route
Route::prefix('mas/')->group(function(){
    Route::prefix('students')->group(function(){
        Route::get('/', [MASStudent::class, 'index'])->name('students.index');
        Route::Post('/store', [MASStudent::class, 'store'])->name('mas.students.store');
        Route::get('/create',[MASStudent::class, 'create'])->name('mas.students.create');
        Route::delete('/{nis}/destroy',[MASStudent::class, 'destroy'])->name('students.destroy');
        Route::get('/{nis}/show',[MASStudent::class, 'show'])->name('students.show');
        Route::get('/{nis}/edit',[MASStudent::class, 'edit'])->name('students.edit');
        Route::put('/{nis}/update',[MASStudent::class, 'update'])->name('students.update');

});

Route::prefix('class')->group(function(){
        Route::get('/', [MASClass::class, 'index'])->name('class.index');
            Route::Post('/store', [MASClass::class, 'store'])->name('mas.class.store');
            Route::get('/create',[MASClass::class, 'create'])->name('mas.class.create');
            Route::delete('/{id}/destroy',[MASClass::class, 'destroy'])->name('class.destroy');
            Route::get('/{id}/show',[MASClass::class, 'show'])->name('masclass.show');
            Route::get('/{id}/edit',[MASClass::class, 'edit'])->name('masclass.edit');
            Route::put('/{id}/update',[MASClass::class, 'update'])->name('masclass.update');
    });
});


Route::prefix('product/')->group(function(){
        Route::get('/', [CP::class, 'index'])->name('product.index');
        Route::Post('/store', [CP::class, 'store'])->name('product.store');
        Route::get('/create',[CP::class, 'create'])->name('product.create');
        Route::delete('/{kd_barang}/destroy',[CP::class, 'destroy'])->name('product.destroy');
        Route::get('/{kd_barang}/show',[CP::class, 'show'])->name('product.show');
        Route::get('/{kd_barang}/edit',[CP::class, 'edit'])->name('product.edit');
        Route::put('/{kd_barang}/update',[CP::class, 'update'])->name('product.update');

});