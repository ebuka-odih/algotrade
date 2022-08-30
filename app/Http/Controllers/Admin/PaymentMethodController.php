<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\PaymentMethodMail;
use App\PaymentMethod;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $payment_method = PaymentMethod::latest()->paginate(10);
        return view('admin.payment-method.payment-methods', compact('payment_method'));
    }

    public function create()
    {
        $users = User::where('admin', 0)->get();
        return view('admin.payment-method.add-payment-method', compact('users'));
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);
        $data['user_id'] = $request->user_id;
        $data = PaymentMethod::create($data);
        Mail::to($data->user->email)->send(new PaymentMethodMail($data));
        return redirect()->route('admin.payment-method.index');
    }

    protected function getData(Request $request)
    {
        $rules = [
          'acct_type' => 'nullable',
          'acct_name' => 'nullable',
          'acct_number' => 'nullable',
          'bank_country' => 'nullable',
          'base_currency' => 'nullable',
          'bank_name' => 'nullable',
          'bank_branch' => 'nullable',
          'bank_address' => 'nullable',
          'sort_code' => 'nullable',
          'routing_number' => 'nullable',
          'swift_code' => 'nullable',
          'iban_code' => 'nullable',
          'acct_label' => 'nullable',
        ];
        return $request->validate($rules);
    }

}
