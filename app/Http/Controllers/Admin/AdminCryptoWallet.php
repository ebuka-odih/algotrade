<?php

namespace App\Http\Controllers\Admin;

use App\CryptoWallet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCryptoWallet extends Controller
{
    public function index()
    {
        return view('admin.wallets');
    }


    public function create()
    {
        $wallets = CryptoWallet::all();
        return view('admin.add-wallet', compact('wallets'));
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        CryptoWallet::create($data);
        return redirect()->back()->with('success', "Wallet Created Successfully");
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $wallet = CryptoWallet::findOrFail($id);
        return view('admin.edit-wallet', compact('wallet'));
    }


    public function update(Request $request, $id)
    {
        $wallet = CryptoWallet::findOrFail($id);
        $data = $this->getData($request);
        $wallet->update($data);
        return redirect()->route('admin.wallet.create');

    }


    public function destroy($id)
    {
        $wallet = CryptoWallet::findOrFail($id);
        $wallet->delete();
        return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'value' => 'required',
        ];
        return $request->validate($rules);
    }


}
