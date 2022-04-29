<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function indexTransactions(){
        $transactions = DB::table('transactions')->get();

        return view('user.financial.financial',  compact('transactions'));
    }

    public function storeTransactions(Request $request){
        DB::table('users')->where('balance')->update(['balance' => $request->get('balance')]);

        $transaction = new Transaction([
            'amount' => $request->get('balance'),
            'type'=> 'Пополнение',
            'requisites'=>'Нет данных о реквизитах!'
        ]);

        $transaction->save();

        return redirect()->route('user-financial');

    }
}
