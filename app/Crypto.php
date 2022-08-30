<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crypto extends Model
{
    protected $guarded = [];

    public function invest_crypto()
    {
        return $this->hasMany(InvestCrypto::class);
    }

    public function adminStatus()
    {
        if ($this->status == 0){
            return "<span class='badge bg-warning text text-uppercase'>Pending</span>";
        }elseif ($this->status == 1){
            return "<span class='badge bg-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge bg-danger text text-uppercase'>Canceled</span>";
        }
    }
}
