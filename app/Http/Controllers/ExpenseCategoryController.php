<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExpenseCategoryController extends Controller


{

    public function expense()
    {
        return view('expense');
    }

    // GET(READ)
    public function index()
    {
        $expense_account = \DB::select('
            SELECT * 
            FROM expense_account
            ORDER BY created_at DESC');

        return $expense_account;
    }

    // POST(CREATE)
    public function store(Request $request)
    {
        $expense_account = \DB::insert('
            INSERT into expense_account (id, account, category, amount) 
            VALUES (?, ?, ?, ?)',  
            [$request->id, $request->account, $request->category, $request->amount]);

        //return response()->json('Succesfuly added');
        return redirect('/');
    }

    // GET 1 id(READ)
    public function show($id)
    {
        $expense_account = \DB::select('
            SELECT * 
            FROM expense_account
            WHERE id = :id', ['id' => $id]);

        return $expense_account;
    }

     // PUT(UPDATE)
    public function update(Request $request, $id) 
    {
        $account = $request->account;
        $category = $request->category;
        $amount = $request->amount;

        $expense_account = \DB::update('
            UPDATE expense_account 
            set account = :account, category = :category, amount = :amount 
            WHERE id = :id', ['id'=>$id,'account'=> $account, 'category' => $category, 'amount' => $amount]);

        return $expense_account;
    }

    //  DELETE
    public function destroy($id)
    {
        \DB::delete('
        DELETE FROM expense_account
        WHERE id = :id', ['id'=>$id]);

        return response()->json('Succesfully deleted');
    }
}
