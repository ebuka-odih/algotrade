<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvestCrypto extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function crypto()
    {
        return $this->belongsTo(Crypto::class);
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
    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge badge-warning text text-uppercase'>Pending</span>";
        }elseif ($this->status == 1){
            return "<span class='badge badge-success text text-uppercase'>Invested</span>";
        }else{
            return "<span class='badge badge-danger text text-uppercase'>Canceled</span>";
        }
    }
}
