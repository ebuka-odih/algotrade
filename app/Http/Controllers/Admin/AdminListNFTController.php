<?php

namespace App\Http\Controllers\Admin;

use App\CryptoWallet;
use App\Http\Controllers\Controller;
use App\ListNFT;
use App\PaymentMethod;
use Illuminate\Http\Request;

class AdminListNFTController extends Controller
{
    public function index()
    {
        $nfts = ListNFT::all();
        return view('admin.nftlisting.list', compact('nfts'));
    }


    public function create()
    {
        $wallets = CryptoWallet::all();
        return view('admin.nftlisting.create', compact('wallets'));
    }


    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'price' => 'required',
                'bid' => 'required',
                'description' => 'nullable',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        if ($request->hasFile('image')){

            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/nfts');
            $image->move($destinationPath, $input['imagename']);

            $nft = new ListNFT();
            $nft->name = $request->get('name');
            $nft->price = $request->get('price');
            $nft->bid = $request->get('bid');
            $nft->description = $request->get('description');
            $nft->crypto_wallet_id = $request->get('crypto_wallet_id');
            $nft->image = $input['imagename'];
            $nft->save();
            return redirect()->route('admin.nftlisting.index');
        }

        $nft = new ListNFT();
        $nft->name = $request->get('name');
        $nft->price = $request->get('price');
        $nft->bid = $request->get('bid');
        $nft->description = $request->get('description');
        $nft->crypto_wallet_id = $request->get('crypto_wallet_id');
        $nft->save();
        return redirect()->route('admin.nftlisting.index');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $nft = ListNFT::findOrFail($id);
        return view('admin.nftlisting.edit', compact('nft'));
    }


    public function update(Request $request, $id)
    {

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/nfts');
            $image->move($destinationPath, $input['imagename']);

            $nft = ListNFT::findOrFail($id);
            $data = $this->getData($request);
            $nft->update($data);
            $nft->update(['image' => $input['imagename']]);
            return redirect()->route('admin.nftlisting.index');

        }
        $nft = ListNFT::findOrFail($id);
        $data = $this->getData($request);
        $nft->update($data);
        return redirect()->route('admin.nftlisting.index');
    }


    public function destroy($id)
    {
        $nft = ListNFT::findOrFail($id);
        $nft->delete();
        return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'price' => 'required',
            'bid' => 'required',
            'description' => 'nullable',
            'crypto_wallet_id' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        return $request->validate($rules);
    }
}
