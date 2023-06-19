<?php

use App\Http\Controllers\CarrinhoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/carrinho', function () {
    return view('carrinho');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::post('/produto/create', [ProductsController::class, 'store'])->name('produto.store');
Route::get('/produtos', [ProductsController::class, 'store'])->name('produto.store');
Route::delete('/delete/{produto}', [ProductsController::class, 'delete'])->name('produto.destroy');

Route::post('/carrinho/create', [CarrinhoController::class, 'store'])->name('carrinho.store');
Route::get('/carrinhos', [CarrinhoController::class, 'index'])->name('carrinho.index');
Route::delete('/delete/{carrinho}', [CarrinhoController::class, 'delete'])->name('carrinho.destroy');
Route::post('/carrinho/adicionar-item', [CarrinhoController::class, ])->name('adicionarItem');

