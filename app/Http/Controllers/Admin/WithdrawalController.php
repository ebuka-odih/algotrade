<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApproveWithdraw;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
{
    public function withdrawal()
    {
        $withdrawal = Withdrawal::all();
        return view('admin.transactions.withdrawals', compact('withdrawal'));
    }

    public function approve_withdrawal($id)
    {
        $withdraw = Withdrawal::findOrFail($id);
        $user = User::findOrFail($withdraw->user_id);
        $user->balance -= $withdraw->amount;
        $user->save();
        $withdraw->status = 1;
        $withdraw->save();
        Mail::to($user->email)->send(new ApproveWithdraw($withdraw));
        return redirect()->back()->with('success', "Withdrawal Approved Successfully");
    }

    public function delete_withdrawal($id)
    {
        $withdraw = Withdrawal::findOrFail($id);
        $withdraw->delete();
        return redirect()->back();
    }

    public function details($id)
    {
        $withdraw = Withdrawal::findOrFail($id);
        return view('admin.transactions.withdraw-details', compact('withdraw'));
    }


}
