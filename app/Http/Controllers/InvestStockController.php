<?php

namespace App\Http\Controllers;

use App\InvestStock;
use App\Stock;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestStockController extends Controller
{
    public function investment()
    {
        $invested_stock = InvestStock::whereUserId(auth()->id())->where('status', 1)->sum('amount');
        return view('dashboard.stock.investment', compact('invested_stock'));
    }

    public function transactions()
    {
        $trans = InvestStock::whereUserId(\auth()->id())->get();
        return view('dashboard.stock.transactions', compact('trans'));
    }
    public function profit()
    {
        $trans = InvestStock::whereUserId(\auth()->id())->get();
        return view('dashboard.stock.profit', compact('trans'));
    }
    public function transferred()
    {
        $trans = InvestStock::whereUserId(\auth()->id())->get();
        return view('dashboard.stock.transferred', compact('trans'));
    }

    public function stock()
    {
        $stocks = Stock::all();
        return view('dashboard.stock.plans', compact('stocks'));
    }

    public function invest($id)
    {
        $stocks = Stock::findOrFail($id);
        return view('dashboard.stock.invest', compact('stocks'));
    }

    public function investStock(Request $request)
    {
        $invest = new InvestStock();
        if ($request->amount < auth()->user()->balance){
            $invest->amount = $request->amount;
            $invest->user_id = Auth::id();
            $invest->stock_id = $request->stock_id;
            $invest->status = 1;
            $invest->save();
            $user = User::findOrFail($invest->user_id);
            $user->balance -= $invest->amount;
            $user->save();
            return redirect()->route('user.investment');
        }
        return redirect()->back()->with('declined', "Sorry you do not have such amount in your account, make a deposit to topup your account");

    }

}
