<?php

namespace App\Http\Controllers;

use App\TradingPair;
use App\TradingRoom;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TradingRoomController extends Controller
{
    public function crypto()
    {
        $trades = TradingRoom::whereUserId(\auth()->id())->where('type', 1)->get();
        $pairs = TradingPair::where('type', 1)->get();
        return view('dashboard.trade-room.crypto-trade', compact('pairs', 'trades'));
    }

    public function placeTrade(Request $request)
    {
        if ($request->amount < auth()->user()->balance){
            $data = $this->getData($request);
            if($request->get('type') == 'buy'){
                $data['trade_type'] = 1;
                $data['type'] = 1; // crypto
                $data['status'] = 0;
            }else{
                $data['trade_type'] = 0;
                $data['type'] = 1;
                $data['status'] = 0;
            }
            $data['user_id'] = Auth::id();
            $trade = TradingRoom::create($data);
            $user = User::findOrFail($trade->user_id);
            $user->balance -= $trade->amount;
            $user->save();
            return redirect()->back()->with('success', "Your Order Has Been Created");
        }
        return redirect()->back()->with('declined', "Insufficient Balance");

    }

    protected function getData(Request $request)
    {
        $rules = [
            'trading_pair_id' => 'required',
            'size' => 'required',
            'price' => 'required',
            'sl' => 'nullable',
            'tp' => 'nullable',
            'leverage' => 'required',
            'execution_time' => 'required',
        ];
        return $request->validate($rules);
    }
}
