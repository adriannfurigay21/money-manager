<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\SummaryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('expenseaccounts', ExpenseCategoryController::class );
Route::resource('incomeaccounts', IncomeCategoryController::class );



//------------------------------------------------------------------------------

Route::get('/income', [IncomeCategoryController::class, 'income']);
Route::get('/expense', [ExpenseCategoryController::class, 'expense']);
Route::post('/store', [ExpenseCategoryController::class, 'store']);






// Summary Controller
Route::get('/weeklyView', [SummaryController::class, 'weeklyView']);
Route::get('/weekly', [SummaryController::class, 'weekly']);
Route::get('/monthly', [SummaryController::class, 'monthly']);

// // Expense Route
Route::post('/store', [ExpenseCategoryController::class, 'store']);
// Route::get('/user', [ExpenseCategoryController::class, 'index']);
// Route::get('/show', [ExpenseCategoryController::class, 'show']);
// Route::put('/update', [ExpenseCategoryController::class, 'update']);
// Route::delete('/delete', [ExpenseCategoryController::class, 'destroy($id)']);

// // Income Route
Route::post('/store', [IncomeCategoryController::class, 'store']);
// Route::get('/user', [IncomeCategoryController::class, 'index']);
// Route::get('/show', [IncomeCategoryController::class, 'show']);
// Route::put('/update', [IncomeCategoryController::class, 'update']);
// Route::delete('/delete', [IncomeCategoryController::class, 'destroy($id)']);