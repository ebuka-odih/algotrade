<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\InvestStock;
use App\Rules\MatchOldPassword;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        $deposit_month = Deposit::whereUserId(auth()->id())->where('status', 1)->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))
            ->get(['amount','created_at'])->sum('amount');

        $withdraw_month = Withdrawal::where('status', 1)->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))
            ->get(['amount','created_at'])->sum('amount');
        $total_deposit = Deposit::whereUserId(auth()->id())->where('status', 1)->sum('amount');
        $total_withdraw = Withdrawal::whereUserId(auth()->id())->where('status', 1)->sum('amount');
        $total_invest = InvestStock::whereUserId(auth()->id())->where('status', 1)->sum('amount');
        return view('dashboard.index', compact('deposit_month', 'withdraw_month', 'total_deposit', 'total_withdraw', 'total_invest'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.user.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = User::findOrFail(auth()->id());
        $data = $this->getData($request);
        $user->update($data);
        return redirect()->back()->with('success', 'Profile Updated Successful');
    }


    protected function getData(Request $request){
        $rules = [
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'email' => 'nullable|email',
            'telegram' => 'nullable',
            'country' => 'nullable',
            'state' => 'nullable',
            'city' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'postal_code' => 'nullable',
//            'date_of_birth' => 'nullable',
        ];
        return $request->validate($rules);
    }

    public function all_referrals()
    {
        return view('dashboard.user.referrals');
    }

    public function security()
    {
        return view('dashboard.user.security');
    }

    public function storePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect()->back()->with('success', "Password Changed Successfully");
    }





}
