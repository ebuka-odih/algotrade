<?php

namespace App\Http\Controllers;

use App\Crypto;
use App\Invest;
use App\InvestCrypto;
use App\InvestStock;
use App\Stock;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestCryptoController extends Controller
{

    public function crypto()
    {
        $crypto = Crypto::all();
        return view('dashboard.crypto.list', compact('crypto'));
    }

    public function invest($id)
    {
        $crypto = Crypto::findOrFail($id);
        return view('dashboard.crypto.invest', compact('crypto'));
    }

    public function investCrypto(Request $request)
    {
        $invest = new Invest();
        if ($request->amount < auth()->user()->balance){
            $invest->amount = $request->amount;
            $invest->user_id = Auth::id();
            $invest->asset = $request->crypto_name;
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

        $transact = Invest::whereUserId(\auth()->id())->get();
        $invested_stock = Invest::whereUserId(auth()->id())->where('status', 1)->sum('amount');
        return view('dashboard.crypto.investment', compact('percent','invested_stock', 'transact'));
    }

}
