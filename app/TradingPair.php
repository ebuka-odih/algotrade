<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TradingPair extends Model
{
    public function trading_room()
    {
        return $this->belongsTo(TradingRoom::class, 'trading_pair_id');
    }
}
