<?php

namespace App\Http\Controllers;

use App\BuyNFT;
use App\ListNFT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListNFTController extends Controller
{
    public function index()
    {
        $nfts = ListNFT::all();
        return view('dashboard.nft.list', compact('nfts'));
    }

    public function show($id)
    {
        $nft = ListNFT::findOrFail($id);
        return view('dashboard.nft.details', compact('nft'));
    }

    public function buyNft(Request $request)
    {
        $nft = new BuyNFT();
        $nft->list_n_f_t_id = $request->nft_id;
        $nft->user_id = Auth::id();
        $nft->trans_hash = $request->trans_hash;
        $nft->save();
        return redirect()->route('user.collections');
    }

    public function collections()
    {
        $nfts = BuyNFT::all();
        return view('dashboard.nft.collections', compact('nfts'));
    }
}
