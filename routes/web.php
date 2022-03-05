<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('/admin', [App\Http\Controllers\PageController::class, 'admin'])->name('admin');
Route::resource('/usuarios', App\Http\Controllers\UserController::class)->names('users')->middleware('auth');
Route::resource('/productos', App\Http\Controllers\ProductController::class)->names('products')->middleware('auth');
Route::post('/pedidos', [App\Http\Controllers\OrderController::class, 'store'])->name('orders.store');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/pedidos', [App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');
    Route::get('/pedidos/{pedido}', [App\Http\Controllers\OrderController::class, 'show'])->name('orders.show');
    Route::get('/pedidos/{pedido}/editar', [App\Http\Controllers\OrderController::class, 'edit'])->name('orders.edit');
    Route::put('/pedidos/{pedido}', [App\Http\Controllers\OrderController::class, 'update'])->name('orders.update');
    Route::delete('/pedidos/{pedido}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('orders.destroy');
});
