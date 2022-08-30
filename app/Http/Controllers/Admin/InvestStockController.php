<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\InvestStock;
use Illuminate\Http\Request;

class InvestStockController extends Controller
{
    public function stocks()
    {
        $stocks = InvestStock::all();
        return view('admin.transactions.stocks', compact('stocks'));
    }

    public function delete_stock($id)
    {
        $stock = InvestStock::findOrFail($id);
        $stock->delete();
        return redirect()->back();
    }
}
