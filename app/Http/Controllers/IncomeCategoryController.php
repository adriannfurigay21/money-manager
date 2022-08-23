<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeCategoryController extends Controller
{
    // GET(READ)
    public function index()
    {
        $income_account = \DB::select('
            SELECT * 
            FROM income_account
            ORDER BY created_at DESC');

        return $income_account;
    }

    // POST(CREATE)
    public function store(Request $request)
    {
        $expense_account = \DB::insert('
            INSERT into income_account (id, account) 
            VALUES (?, ?)',  
            [$request->id, $request->account]);

        return $income_account;
    }

    // GET 1 id(READ)
    public function show($id)
    {
        $income_account = \DB::select('
            SELECT * 
            FROM income_account
            WHERE id = :id', ['id' => $id]);

        return $income_account;
    }

     // PUT(UPDATE)
    public function update(Request $request, $id) 
    {
        $account = $request->account;
        $income_account = \DB::update('
            UPDATE income_account 
            set account = :account 
            WHERE id = :id', ['id'=>$id,'account'=> $account]);

        return $income_account;
    }

    //  DELETE
    public function destroy($id)
    {
        \DB::delete('
        DELETE FROM income_account
        WHERE id = :id', ['id'=>$id]);
    }
}
