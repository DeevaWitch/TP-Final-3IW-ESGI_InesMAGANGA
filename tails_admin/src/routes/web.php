<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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

Route::controller(CategoryController::class)->group(function(){
    Route::get('/categories', 'index');
    Route::get('/categories/create', 'create');
    Route::get('/categories/{id}', 'show');
    Route::get('/categories/{id}/edit', 'edit');

    Route::post('/categories', 'store');
    Route::patch('/categories/{id}', 'update');
    Route::delete('/categories/{id}', 'destroy');
});

Route::controller(TypeController::class)->group(function(){
    Route::get('/types', 'index');
    Route::get('/types/create', 'create');
    Route::get('/types/{id}', 'show');
    Route::get('/types/{id}/edit', 'edit');

    Route::post('/types', 'store');
    Route::patch('/types/{id}', 'update');
    Route::delete('/types/{id}', 'destroy');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/products', 'index');
    Route::get('/products/create', 'create');
    Route::get('/products/{id}', 'show');
    Route::get('/products/{id}/edit', 'edit');

    Route::post('/products', 'store');
    Route::patch('/products/{id}', 'update');
    Route::delete('/products/{id}', 'destroy');

    Route::get('/remoteProducts', 'sendRemoteProducts');
});


Route::get('/', function () {
    return view('home');
});
