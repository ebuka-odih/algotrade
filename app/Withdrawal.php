<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function withdraw_method()
    {
        return $this->belongsTo(WithdrawMethod::class, 'withdraw_method_id');
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge badge-danger text text-uppercase'>Pending</span>";
        }elseif ($this->status == 1){
            return "<span class='badge badge-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge badge-warning text text-uppercase'>Canceled</span>";
        }
    }
    public function adminStatus()
    {
        if ($this->status == 0){
            return "<span class='badge bg-danger text text-uppercase'>Pending</span>";
        }elseif ($this->status == 1){
            return "<span class='badge bg-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge bg-warning text text-uppercase'>Canceled</span>";
        }
    }

}
