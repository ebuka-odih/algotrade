<?php

namespace App\Http\Controllers;

use App\Mail\AdminWithdrawAlert;
use App\Mail\RequestWithdraw;
use App\User;
use App\Withdrawal;
use App\WithdrawMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
{
    public function withdraw()
    {
        $w_method = WithdrawMethod::whereUserId(auth()->id())->get();

        if (count($w_method) > 0 && \auth()->user()->balance > 0){
            return view('dashboard.withdraw.withdraw', compact('w_method'));
        }elseif(count($w_method) < 1){
            return view('dashboard.withdraw.notice2');
        }
        return view('dashboard.withdraw.notice');

    }






    public function processWithdraw(Request $request)
    {
        $withdraw = new Withdrawal();
        $withdraw->amount = $request->amount;
        $withdraw->user_id = Auth::id();
        $withdraw->withdraw_method_id = $request->withdraw_method_id;
        $user = User::findOrFail($withdraw->user_id);
        $otpcode = mt_rand(111111,999999);
        $data = ['withdraw' => $withdraw, 'user' => $user, 'otpcode' => $otpcode];
        $withdraw->save();
        Mail::to($user->email)->send( new RequestWithdraw($data));
        Mail::to('admin@algo-trade.co')->send( new AdminWithdrawAlert($data));
        return redirect()->route('user.otpcode', $withdraw->id)->with('success_message', 'A withdrawal pin has been sent to your email, please enter your withdrawal pin to facilitate withdrawal/transfer of your fund');
    }

    public function otpcode($id)
    {
        $withdrawal = Withdrawal::findorFail($id);
        return view('dashboard.withdraw.otp', compact('withdrawal'));
    }

    public function process_otp(Request $request)
    {
        $with_id = $request->withdrawal_id;
        $withdrawal = Withdrawal::findOrFail($with_id);
        $withdrawal->update(['otp_code' => $request->otp_code]);
        return redirect()->back()->with('declined', "Error Transferring, Please Contact Account Support For Assistance");

    }


}
