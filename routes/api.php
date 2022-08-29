<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\ShowIncomeController;

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
Route::resource('ShowIncome', ShowIncomeController::class );
