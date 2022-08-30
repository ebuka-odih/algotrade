<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use AmrShawky\LaravelCurrency\Facade\Currency;

class Deposit extends Model
{

    protected $guarded = [];
    protected $table = 'deposit';


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class, "payment_method_id");
    }
    public function crypto_wallet()
    {
        return $this->belongsTo(CryptoWallet::class, "payment_method_id");
    }

    public function paymentMethod()
    {
        if ($this->payment_method_id == 1)
        {
            return "Bank Transfer";
        }else{
            return "Crypto Deposit";
        }
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge badge-warning text text-uppercase'>Pending</span>";
        }elseif ($this->status == 1){
            return "<span class='badge badge-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge badge-danger text text-uppercase'>Canceled</span>";
        }
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

    public function rate()
    {
        $currency = Currency::convert()
            ->from('USD')
            ->to('EUR')
            ->get();
        return substr($currency, 0, 4);
    }
    public function showRate()
    {
        $currency = Currency::convert()
            ->from('USD')
            ->to('EUR')
            ->get();
        return floor($currency * $this->amount);
    }
    public function BTCRate()
    {
       $btc =  Currency::convert()
            ->from('USD')
            ->to('BTC')
           ->round(7)
            ->source('crypto')
            ->get();
       return $btc;
    }
    public function showBTCRate()
    {
        $btc =  Currency::convert()
            ->from('USD')
            ->to('BTC')
            ->source('crypto')
            ->get();
        return $btc * $this->amount;
    }

    public function transId()
    {
        return "#TNX43265".$this->id;
    }

    public function transType()
    {
        if ($this->trans_type == 1)
        {
            return "Deposit via Bank Transfer";
        }
        return "Deposit via Crypto Payment (Bitcoin)";
    }

}
