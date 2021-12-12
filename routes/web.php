<?php

use App\Http\Livewire\Sell\Sell;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Product\Product\MyList;

use App\Http\Livewire\Product\Product\Products;
use App\Http\Livewire\Product\Category\CategoryList;
use App\Http\Livewire\Product\Product\ProductCreate;
use App\Http\Livewire\Product\Product\ProductUpdate;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard'], function (){
    Route::get('',DashboardController::class)->name('dashboard');
    Route::group(['prefix' => 'product'], function (){
        Route::group(['prefix' => 'product'], function (){
            Route::get('', Products::class)->name('dashboard.product.product');
            Route::get('create', ProductCreate::class)->name('dashboard.product.create');
            Route::get('{product}/edit', ProductUpdate::class)->name('dashboard.product.edit');
        });
        Route::group(['prefix' => 'category'], function (){
            Route::get('', CategoryList::class)->name('dashboard.product.category');
        });
    });
    Route::group(['prefix' => 'sell'], function (){
        Route::get('', Sell::class)->name('dashboard.sell');
    });
});


