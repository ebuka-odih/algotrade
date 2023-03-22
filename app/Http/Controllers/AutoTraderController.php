<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoTraderController extends Controller
{
    public function notice()
    {
        return view('dashboard.autotrader.notice');
    }

    public function autoTrade()
    {
        return view('dashboard.autotrader.trade');
    }
}
