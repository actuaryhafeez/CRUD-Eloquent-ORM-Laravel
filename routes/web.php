<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::post('/', [ProductController::class, 'create'])->name('create');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [ProductController::class, 'update'])->name('update');


Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('destroy');


