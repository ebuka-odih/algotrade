<?php

namespace App\Http\Controllers;

use App\Crypto;
use App\InvestCrypto;
use App\InvestStock;
use App\Stock;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestCryptoController extends Controller
{
    public function investment()
    {
        $invested_stock = InvestCrypto::whereUserId(auth()->id())->where('status', 1)->sum('amount');
        return view('dashboard.crypto.investment', compact('invested_stock'));
    }

    public function transactions()
    {
        $trans = InvestCrypto::whereUserId(\auth()->id())->get();
        return view('dashboard.crypto.transactions', compact('trans'));
    }
    public function profit()
    {
        $trans = InvestCrypto::whereUserId(\auth()->id())->get();
        return view('dashboard.crypto.profit', compact('trans'));
    }
    public function transferred()
    {
        $trans = InvestCrypto::whereUserId(\auth()->id())->get();
        return view('dashboard.crypto.transferred', compact('trans'));
    }

    public function crypto()
    {
        $stocks = Crypto::all();
        return view('dashboard.crypto.plans', compact('stocks'));
    }

    public function invest($id)
    {
        $stocks = Crypto::findOrFail($id);
        return view('dashboard.crypto.invest', compact('stocks'));
    }

    public function investCrypto(Request $request)
    {
        $invest = new InvestCrypto();
        if ($request->amount < auth()->user()->balance){
            $invest->amount = $request->amount;
            $invest->user_id = Auth::id();
            $invest->crypto_id = $request->stock_id;
            $invest->status = 1;
            $invest->save();
            $user = User::findOrFail($invest->user_id);
            $user->balance -= $invest->amount;
            $user->save();
            return redirect()->route('user.investment.crypto');
        }
        return redirect()->back()->with('declined', "Sorry you do not have such amount in your account, make a deposit to topup your account");

    }
}
