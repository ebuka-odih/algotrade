<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Funding;
use App\Withdrawal;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transactions()
    {
        $trans = Funding::whereUserId(\auth()->id())->get();
        $dep_count = Deposit::whereUserId(auth()->id())->count();
        $wit_count = Withdrawal::whereUserId(auth()->id())->count();
        $fund_count = Funding::whereUserId(auth()->id())->count();
        return view('dashboard.transactions.transaction', compact('trans', 'dep_count', 'wit_count', 'fund_count'));
    }
    public function deposits()
    {
        $deposit = Deposit::whereUserId(auth()->id())->get();
        $dep_count = Deposit::whereUserId(auth()->id())->count();
        $wit_count = Withdrawal::whereUserId(auth()->id())->count();
        $fund_count = Funding::whereUserId(auth()->id())->count();
        return view('dashboard.transactions.deposits', compact('deposit', 'dep_count', 'wit_count', 'fund_count'));
    }
    public function withdrawal()
    {
        $withdrawal = Withdrawal::whereUserId(auth()->id())->get();
        $dep_count = Deposit::whereUserId(auth()->id())->count();
        $wit_count = Withdrawal::whereUserId(auth()->id())->count();
        $fund_count = Funding::whereUserId(auth()->id())->count();
        return view('dashboard.transactions.withdrawal', compact('withdrawal', 'dep_count', 'wit_count', 'fund_count'));
    }
}
