@extends('dashboard.layout.app')
@section('content')


    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">


            <div class="nk-content-body">
                <div class="page-dw wide-xs m-auto" id="pm-step-container">
                    <div class="nk-pps-apps">
                        <div class="nk-pps-steps">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step active"></span>
                            <span class="step"></span>
                        </div>
                        <div class="nk-pps-title text-center">
                            <h3 class="title">Confirm Your Deposit</h3>
                            <p class="caption-text">You are about to deposit <strong class="text-dark">@convert($deposit->amount)
                                    USD</strong> in your account.</p>
                            <p class="sub-text-sm">Please review the information and confirm.</p>
                        </div>
                        <div class="nk-pps-data">
                            <ul class="nk-olist">
                                <li class="nk-olist-item">
                                    <div class="label lead-text">Payment method</div>
                                    <div class="data"><span class="method"><em
                                                class="icon ni ni-building-fill"></em> <span>Bank Transfer</span></span>
                                    </div>
                                </li>

                                <li class="nk-olist-item is-grouped">
                                    <div class="label lead-text">You will send</div>
                                    <div class="data"><span class="amount">@convert($deposit->amount) USD</span></div>
                                </li>
                                <li class="nk-olist-item small is-grouped">
                                    <div class="label">Exchange rate</div>
                                    <div class="data fw-normal text-soft">
                                        <span
                                            class="amount">1 USD = {{ $deposit->rate() }} EUR</span>
                                    </div>
                                </li>

                                <li class="nk-olist-item small">
                                    <div class="label">Equivalent to</div>
                                    <div class="data fw-normal text-soft">
                                        <span class="amount">@convert($deposit->showRate()) EUR</span>
                                    </div>
                                </li>

                            </ul>
                            <ul class="nk-olist">
                                <li class="nk-olist-item nk-olist-item-final">
                                    <div class="label lead-text">Amount to deposit</div>
                                    <div class="data"><span class="amount">@convert($deposit->amount) USD</span></div>
                                </li>
                            </ul>


                        </div>
                        <div class="nk-pps-field form-action text-center">
                            <div class="nk-pps-action">
                                <a href="{{ route('user.showBankInfo', $deposit->id) }}" class="btn btn-lg btn-block btn-primary">
                                    <span>Confirm &amp; Pay</span>
                                    <span class="spinner-border spinner-border-sm hide" role="status"
                                          aria-hidden="true"></span>
                                </a>
                            </div>
                            <div class="nk-pps-action pt-3">
                                <a href="{{ route('user.deposit') }}" class="btn btn-outline-danger btn-trans">Cancel
                                    Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
