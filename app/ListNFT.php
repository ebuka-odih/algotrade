<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListNFT extends Model
{
    protected $guarded = [];

    public function crypto_wallet()
    {
        return $this->belongsTo(CryptoWallet::class, "crypto_wallet_id");
    }
}
