<?php

namespace App\Http\Controllers\Admin;

use App\Crypto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCryptoController extends Controller
{
    public function index()
    {
        $stocks = Crypto::latest()->get();
        return view('admin.crypto.list', compact('stocks'));
    }

    public function create()
    {
        return view('admin.crypto.create');
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);
        Crypto::create($data);
        return redirect()->route('admin.crypto.index');
    }

    public function edit($id)
    {
        $stock = Crypto::findOrFail($id);
        return view('admin.crypto.edit-crypto', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $stock = Crypto::findOrFail($id);
        $data = $this->getData($request);
        $stock->update($data);
        return redirect()->route('admin.crypto.index');
    }

    public function destroy($id)
    {
        $package = Crypto::findOrFail($id);
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
