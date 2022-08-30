@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">


            <div class="nk-content-body">
                <div class="page-dw wide-xs m-auto" id="pm-step-container">
                    <div class="nk-pps-apps">
                        <div class="nk-pps-steps">
                            <span class="step active"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                        <div class="nk-pps-title text-center">
                            <h3 class="title">Deposit Funds</h3>
                            <p class="caption-text">Select from payment options below</p>
                            <p class="sub-text-sm">Secure and safely deposit money into your account.</p>
                        </div>
                        <form class="nk-pps-form form-validate is-alter" method="POST" action="{{ route('user.depositType') }}" id="dpst-pm-frm" data-required_msg="To deposit, please select a payment method." novalidate="novalidate">
                           @csrf
                            <div class="nk-pps-field form-group">
                                <ul class="nk-pm-list" id="payment-option-list">
                                    <li class="nk-pm-item">
                                        <input class="nk-pm-control" type="radio" name="deposit_method" required="" value="bank-transfer" id="bank-transfer">
                                        <label class="nk-pm-label" for="bank-transfer">
                                            <span class="pm-name">Bank Transfer</span>
                                            <span class="pm-icon"><em class="icon ni ni-building-fill"></em></span>
                                        </label>
                                    </li>
                                    <li class="nk-pm-item">
                                        <input class="nk-pm-control" type="radio" name="deposit_method" required="" value="crypto-wallet" id="crypto-wallet">
                                        <label class="nk-pm-label" for="crypto-wallet">
                                            <span class="pm-name">Crypto Payment</span>
                                            <span class="pm-icon"><em class="icon ni ni-wallet-fill"></em></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="nk-pps-field form-action text-center">
                                <div class="nk-pps-action">
                                    <button type="submit" class="btn btn-lg btn-block btn-primary" >
                                        <span>Deposit Now</span>
                                        <span class="spinner-border spinner-border-sm hide" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
