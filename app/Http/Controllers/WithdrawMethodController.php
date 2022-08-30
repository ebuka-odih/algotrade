<?php

namespace App\Http\Controllers;

use App\WithdrawMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawMethodController extends Controller
{

    public function account()
    {
        $accounts = WithdrawMethod::whereUserId(auth()->id())->get();
        return view('dashboard.user.account', compact('accounts'));
    }
    public function accountUpdate(Request $request)
    {
        $data = $this->getAcctData($request);
        $data['user_id'] = Auth::id();
        $data['payment_type'] = 1;
        WithdrawMethod::create($data);
        return redirect()->back();
    }

    protected function getAcctData(Request $request)
    {
        $rules = [
            'acct_type' => 'required',
            'acct_name' => 'required',
            'acct_number' => 'required',
            'bank_country' => 'required',
            'bank_address' => 'required',
            'base_currency' => 'required',
            'bank_name' => 'required',
            'bank_branch' => 'required',
            'sort_code' => 'required',
            'routing_number' => 'required',
            'swift_code' => 'required',
            'iban_code' => 'required',
            'acct_label' => 'nullable',
        ];
        return $request->validate($rules);
    }

    public function storeBTC(Request $request)
    {
        $data = $this->getBTCData($request);
        $data['user_id'] = Auth::id();
        $data['payment_type'] = 0;
        WithdrawMethod::create($data);
        return redirect()->back();
    }

    protected function getBTCData(Request $request)
    {
        $rules = [
            'wallet_address' => 'required',
            'acct_label' => 'nullable',
        ];
        return $request->validate($rules);
    }

    public function acctDetails($id)
    {
        $account = WithdrawMethod::findOrFail($id);
        return view('dashboard.user.acct-details', compact('account'));
    }

}
