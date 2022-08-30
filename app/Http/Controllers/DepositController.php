<?php

namespace App\Http\Controllers;

use AmrShawky\LaravelCurrency\Facade\Currency;
use App\CryptoWallet;
use App\Deposit;
use App\Mail\CryptoDeposit;
use App\Mail\EmptyCryptoDeposit;
use App\Mail\EmptyNewDeposit;
use App\Mail\NewDeposit;
use App\Notifications\AdminDepositConfirm;
use App\PaymentMethod;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{

    public function deposit()
    {
        return view('dashboard.deposit.deposit');
    }

    public function depositType(Request $request)
    {

        $deposit_method = $request->deposit_method;
        if ($deposit_method == 'bank-transfer'){
            return redirect()->route('user.bankTransferAmt');
        }else{
            return redirect()->route('user.cryptoTransferAmt');
        }
    }

    public function bankTransferAmt()
    {
        return view('dashboard.deposit.bf-amount');
    }
    public function proAmount(Request $request)
    {
        $deposit = new Deposit();
        $deposit->amount = $request->amount;
        $deposit->user_id = Auth::id();
        $deposit->payment_method_id = 1;
        $deposit->save();
        return redirect()->route('user.showRate', $deposit->id);
    }
    public function showRate($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('dashboard.deposit.rate', compact('deposit'));
    }


    public function showBankInfo($id)
    {
        $deposit = Deposit::findOrFail($id);

        $payment_method = PaymentMethod::whereUserId($deposit->user_id)->first();
        if ($payment_method){
            $data = ['deposit' => $deposit, 'payment_method' => $payment_method];
            Mail::to($deposit->user->email)->send(new NewDeposit($data));
            return view('dashboard.deposit.bank-info', compact('deposit', 'payment_method'));
        }
        $data = ['deposit' => $deposit, 'payment_method' => $payment_method];
        Mail::to($deposit->user->email)->send(new EmptyNewDeposit($data));
        return view('dashboard.deposit.bank-info', compact('deposit', 'payment_method'));
    }

    public function cryptoTransferAmt()
    {
        $payment_m = CryptoWallet::all();
        return view('dashboard.deposit.cy-amount', compact('payment_m'));
    }
    public function proBTCAmount(Request $request)
    {
        if ($request->amount  > 100){
            $deposit = new Deposit();
            $deposit->amount = $request->amount;
            $deposit->user_id = Auth::id();
            $deposit->payment_method_id = $request->payment_method_id;
            $deposit->save();

            $user = User::findOrFail($deposit->user_id);
            $crypto_wallet = CryptoWallet::findOrFail($deposit->payment_method_id);
            $data = ['deposit' => $deposit, 'crypto_wallet' => $crypto_wallet];
            Mail::to($deposit->user->email)->send(new CryptoDeposit($data));
            return redirect()->route('user.payment', $deposit->id);
        }
        return redirect()->back()->with('declined', "You are not allowed to deposit below $100");
    }

    public function payment($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('dashboard.deposit.payment', compact('deposit'));
    }

    public function showBTCRate($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('dashboard.deposit.btc-rate', compact('deposit'));
    }

    public function confirmBTC($id)
    {
        $deposit = Deposit::findOrFail($id);
        $payment_method = PaymentMethod::findOrFail($deposit->user_id);
        if ($payment_method){
            $data = ['deposit' => $deposit, 'payment_method' => $payment_method];
            Mail::to($deposit->user->email)->send(new CryptoDeposit($data));
            return redirect()->route('user.showBTCInfo', $deposit->id);
        }
        $data = ['deposit' => $deposit, 'payment_method' => $payment_method];
        Mail::to($deposit->user->email)->send(new EmptyCryptoDeposit($data));
        return redirect()->route('user.showBTCInfo', $deposit->id);
    }

    public function showBTCInfo($id)
    {
        $deposit = Deposit::findOrFail($id);
//        $payment_method = PaymentMethod::findOrFail($deposit->user_id);
        return view('dashboard.deposit.crypto-info', compact('deposit'));
    }

    public function paymentReference(Request $request)
    {
        $id = $request->deposit_id;
        $deposit = Deposit::findOrFail($id);
        $deposit->update(['trans_code' => $request->trans_code]);
        $admin = User::where('admin', 1)->first();
        $admin->notify(new AdminDepositConfirm($deposit));
        return redirect()->back()->with('success', "Transaction Sent, awaiting approval");
    }

    public function cancelDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->status = -1;
        $deposit->save();
        return view('dashboard.deposit.cancel', compact('deposit'));
    }

//    public function deleteDeposit($id)
//    {
//        $deposit = Deposit::findOrFail($id);
//        $deposit->delete();
//        return redirect()->route('user.cancelDeposit');
//    }
}
