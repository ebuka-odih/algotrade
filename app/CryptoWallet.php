<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CryptoWallet extends Model
{
    protected $guarded = [];

    public function deposit()
    {
        return $this->hasMany(Deposit::class);
    }

}
