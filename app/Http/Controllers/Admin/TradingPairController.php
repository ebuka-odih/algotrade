<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TradingPair;
use Illuminate\Http\Request;

class TradingPairController extends Controller
{

    public function index()
    {
       $pairs = TradingPair::where('type', 1)->get();
       return view('admin.pairs.list', compact('pairs'));
    }
    public function stockList()
    {
       $pairs = TradingPair::where('type', 2)->get();
       return view('admin.pairs.stock-pairs', compact('pairs'));
    }
    public function indexesList()
    {
       $pairs = TradingPair::where('type', 3)->get();
       return view('admin.pairs.indexes', compact('pairs'));
    }


    public function create()
    {
        return view('admin.pairs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'pair' => 'required'
        ]);
        $pair = new TradingPair();
        $pair->type = 1;
        $pair->pair = $request->pair;
        $pair->save();
        return redirect()->route('admin.pairs');
    }
    public function storeStock(Request $request)
    {
        $request->validate([
           'pair' => 'required'
        ]);
        $pair = new TradingPair();
        $pair->type = 2;
        $pair->pair = $request->pair;
        $pair->save();
        return redirect()->route('admin.stockList');
    }
    public function storeIndexes(Request $request)
    {
        $request->validate([
           'pair' => 'required'
        ]);
        $pair = new TradingPair();
        $pair->type = 3;
        $pair->pair = $request->pair;
        $pair->save();
        return redirect()->route('admin.indexesList');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
