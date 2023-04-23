<?php

namespace App\Http\Controllers\Admin;

use App\Deposit;
use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use App\Stock;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::where('admin', 0)->count();
        $deposits = Deposit::where('status', 1)->select('amount')->sum('amount');
        $with = Withdrawal::where('status', 1)->select('amount')->sum('amount');
        $stocks = Stock::count();
        return view('admin.dashboard', compact('users', 'deposits', 'with', 'stocks'));
    }

    public function security()
    {
        return view('admin.user.security');
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
