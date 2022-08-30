<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::latest()->get();
        return view('admin.stocks.list', compact('stocks'));
    }

    public function create()
    {
        return view('admin.stocks.create');
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);
        Stock::create($data);
        return redirect()->route('admin.stocks.index');
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('admin.stocks.edit-stock', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $stock = Stock::findOrFail($id);
        $data = $this->getData($request);
        $stock->update($data);
        return redirect()->route('admin.stocks.index');
    }

    public function destroy($id)
    {
        $package = Stock::findOrFail($id);
        $package->delete();
        return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
          'name' => 'required',
          'description' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
