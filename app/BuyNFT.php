<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyNFT extends Model
{
    public function list_nft()
    {
        return $this->belongsTo(ListNFT::class, 'list_n_f_t_id');
    }
    public function status()
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
