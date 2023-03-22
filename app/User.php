<?php

namespace App;

use AmrShawky\LaravelCurrency\Facade\Currency;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $guarded = [];
    protected $appends = ['referral_link'];
    protected $with = ['referredBy'];

    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    public function all_referrals()
    {
        $refs = User::whereReferredBy($this->id)->get();
        return $refs;
    }

    public function referredBy()
    {
        return $this->belongsTo(User::class, 'referred_by', 'id');
    }
    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->username, 'id'=> $this->id]);
    }


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function withdrawal()
    {
        return $this->hasMany(Withdrawal::class, 'user_id');
    }
    public function deposits()
    {
        return $this->hasMany(Deposit::class, 'user_id');
    }
    public function payment_method()
    {
        return $this->hasMany(PaymentMethod::class, 'user_id');
    }
    public function funding()
    {
        return $this->hasMany(Funding::class, 'user_id');
    }
    public function invest_stock()
    {
        return $this->hasMany(InvestStock::class, 'user_id');
    }
    public function invest_crypto()
    {
        return $this->hasMany(InvestCrypto::class, 'user_id');
    }

    public function status()
    {
        if ($this->status < 0){
            return "<span class='badge bg-danger text text-uppercase'>Inactive</span>";
        }elseif ($this->status >= 0){
            return "<span class='badge bg-success text text-uppercase'>Active</span>";
        }else{
            return "<span class='badge bg-warning text text-uppercase'>Blocked</span>";
        }
    }

    public function showRate()
    {
        $currency = Currency::convert()
            ->from('USD')
            ->to('BTC')
            ->get();
        return floor($currency * $this->balance);
    }


}
