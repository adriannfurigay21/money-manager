<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowIncomeController extends Controller
{
    public function show()
    {
        $income = \DB::select('
            SELECT SUM(amount)
            FROM income_account'); 
            
        return $income;
    }
}
