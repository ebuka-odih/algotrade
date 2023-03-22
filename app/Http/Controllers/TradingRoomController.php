<?php

namespace App\Http\Controllers;

use App\TradingPair;
use Illuminate\Http\Request;

class TradingRoomController extends Controller
{
    public function crypto()
    {
        $pairs = TradingPair::where('type', 1)->get();
        return view('dashboard.trade-room.crypto', compact('pairs'));
    }
}
