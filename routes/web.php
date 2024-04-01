<?php

use App\Http\Controllers\BahanPustakaController;
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

Route::get('/', function () {
    return view('welcome');
});


//Admin

//Categories
Route::get('/categories', [App\Http\Controllers\admin\CategoryController::class, 'index'])->name('categories');
Route::post('/categoriesAdd', [App\Http\Controllers\admin\CategoryController::class, 'store'])->name('categoriesAdd');
Route::get('/categoriesEdit/{id}', [App\Http\Controllers\admin\CategoryController::class, 'edit'])->name('categoriesEdit');
Route::post('/categoriesUpdate/{id}', [App\Http\Controllers\admin\CategoryController::class, 'update'])->name('categoriesUpdate');

//Books
Route::get('/books', [App\Http\Controllers\admin\BukuController::class, 'index'])->name('books');

//Cd
Route::get('/cd', [App\Http\Controllers\admin\CdController::class, 'index'])->name('cd');

//Article
Route::get('/article', [App\Http\Controllers\admin\ArticleController::class, 'index'])->name('article');
