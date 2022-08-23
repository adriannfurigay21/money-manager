<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExpenseCategoryController extends Controller


{
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
            INSERT into expense_account (id, account) 
            VALUES (?, ?)',  
            [$request->id, $request->account]);

        return $expense_account;
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
        $expense_account = \DB::update('
            UPDATE expense_account 
            set account = :account 
            WHERE id = :id', ['id'=>$id,'account'=> $account]);

        return $expense_account;
    }

    //  DELETE
    public function destroy($id)
    {
        \DB::delete('
        DELETE FROM expense_account
        WHERE id = :id', ['id'=>$id]);
    }
}
