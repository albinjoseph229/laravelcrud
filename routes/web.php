<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/categories',[CategoryController::class, 'index'])->name('categories');

Route::get('/create',[CategoryController::class, 'create'])->name('create');
Route::get('/categories/{id}/edit',[CategoryController::class, 'edit'])->name('categories.edit');

Route::post('/create',[CategoryController::class, 'store']);
Route::get('/categories/destroy',[CategoryController::class, 'destroy'])->name('categories.destroy');
