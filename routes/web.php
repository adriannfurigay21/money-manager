<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\ExpenseCategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

// // Expense Route
// Route::get('/user', [ExpenseCategoryController::class, 'index']);
// Route::post('/store', [ExpenseCategoryController::class, 'store']);
// Route::get('/show', [ExpenseCategoryController::class, 'show']);
// Route::put('/update', [ExpenseCategoryController::class, 'update']);
// Route::delete('/delete', [ExpenseCategoryController::class, 'destroy($id)']);

// // Income Route
// Route::get('/user', [IncomeCategoryController::class, 'index']);
// Route::post('/store', [IncomeCategoryController::class, 'store']);
// Route::get('/show', [IncomeCategoryController::class, 'show']);
// Route::put('/update', [IncomeCategoryController::class, 'update']);
// Route::delete('/delete', [IncomeCategoryController::class, 'destroy($id)']);