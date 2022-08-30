<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trans_type()
    {
        if ($this->trans_type == 1)
        {
            return "Bank Transfer";
        }else{
            return "Bitcoin Transfer";
        }
    }

}
