<?php

namespace App\Http\Controllers;

use App\Crypto;
use App\Invest;
use App\Stock;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestController extends Controller
{
    public function stock()
    {
        $stocks = Stock::all();
        return view('dashboard.stocks.stocks', compact('stocks'));
    }

    public function invest($id)
    {
        $stock = Stock::findOrFail($id);
        return view('dashboard.stocks.invest', compact('stock'));
    }

    public function crypto()
    {
        $crypto = Crypto::all();
        return view('dashboard.crypto.list', compact('crypto'));
    }

    public function investCrypto($id)
    {
        $crypto = Crypto::findOrFail($id);
        return view('dashboard.crypto.invest', compact('crypto'));
    }

    public function investAsset(Request $request)
    {
        $invest = new Invest();
        if ($request->amount < auth()->user()->balance){
            $invest->amount = $request->amount;
            $invest->user_id = Auth::id();
            $invest->asset = $request->name;
            $invest->status = 1;
            $invest->save();
            $user = User::findOrFail($invest->user_id);
            $user->balance -= $invest->amount;
            $user->invest_bal += $invest->amount;
            $user->save();
            return redirect()->route('user.investment');
        }
        return redirect()->back()->with('declined', "Sorry you do not have such amount in your account, make a deposit to topup your account");

    }

    public function investment()
    {
        $user = Auth::user();
        $percent = round(($user->invest_bal / $user->profit) * 100, 2);

        $invested_stock = Invest::whereUserId(auth()->id())->where('status', 1)->sum('amount');
        $transact = Invest::whereUserId(\auth()->id())->get();
        return view('dashboard.stocks.investment', compact('invested_stock', 'transact', 'percent'));
    }
}
