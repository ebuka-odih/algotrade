<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithdrawMethod extends Model
{
    protected $guarded = [];

    public function withdrawal()
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function transType()
    {
        if ($this->payment_type == 1)
        {
            return "Bank Account";
        }
        return "Crypto Wallet";
    }

    public function acctLabel()
    {
        if ($this->btc_label){
            return $this->btc_label;
        }elseif($this->acct_label){
            return $this->acct_label;
        }
    }

    public function acctCheck()
    {
        if ($this->acct_name == null or $this->wallet_address == null){
            return null;
        }else{
            return $this->acctCheck();
        }
    }



}
