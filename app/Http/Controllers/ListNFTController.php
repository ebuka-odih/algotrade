<?php

namespace App\Http\Controllers;

use App\ListNFT;
use Illuminate\Http\Request;

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
}
