<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\SummaryController;

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
    $income_account = DB::table('income_account')->sum('amount');
    $expense_account = DB::table('expense_account')->sum('amount');
    $total = $income_account - $expense_account;
    return view('index', compact('income_account','expense_account','total'));
});

Route::get('/weeklyViews', function () {
    $income_account = DB::table('income_account')->sum('amount');
    $expense_account = DB::table('expense_account')->sum('amount');
    $total = $income_account - $expense_account;
    return view('weeklyView', compact('income_account','expense_account','total'));
});

Route::get('/monthlyViews', function () {
    $income_account = DB::table('income_account')->sum('amount');
    $expense_account = DB::table('expense_account')->sum('amount');
    $total = $income_account - $expense_account;
    return view('monthlyView', compact('income_account','expense_account','total'));
});

// Route::get('/expense', function () {
//     return view('expense');
// });

Route::get('/income', [IncomeCategoryController::class, 'income']);
Route::get('/expense', [ExpenseCategoryController::class, 'expense']);
Route::post('/store', [ExpenseCategoryController::class, 'store']);
Route::post('/store', [IncomeCategoryController::class, 'store']);

Route::get('/weeklyView', [SummaryController::class, 'weeklyView']);



// Summary Controller
// Route::get('/weekly', [SummaryController::class, 'weekly']);

// // Expense Route
// Route::get('/user', [ExpenseCategoryController::class, 'index']);

// Route::get('/show', [ExpenseCategoryController::class, 'show']);
// Route::put('/update', [ExpenseCategoryController::class, 'update']);
// Route::delete('/delete', [ExpenseCategoryController::class, 'destroy($id)']);

// // Income Route
// Route::get('/user', [IncomeCategoryController::class, 'index']);

// Route::get('/show', [IncomeCategoryController::class, 'show']);
// Route::put('/update', [IncomeCategoryController::class, 'update']);
// Route::delete('/delete', [IncomeCategoryController::class, 'destroy($id)']);