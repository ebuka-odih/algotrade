@extends('dashboard.layout.app')
@section('content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">


        <div class="nk-content-body">
            <div class="page-dw wide-xs m-auto" id="pm-step-container"><div class="nk-pps-apps">
                    <div class="nk-pps-steps">
                        <span class="step"></span>
                        <span class="step active"></span>
                        <span class="step"></span>
                    </div>
                    <div class="nk-pps-title text-center">
                        <h3 class="title">Deposit Funds</h3>
                        <p class="caption-text">via <strong>Crypto Payment</strong></p>
                        <p class="sub-text-sm">Send your payment direct to our wallet.</p>
                    </div>
                    <form class="nk-pps-form" action="{{ route('user.proBTCAmount') }}" method="POST">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            @if(session()->has('declined'))
                                <div class="alert alert-danger">
                                    {{ session()->get('declined') }}
                                </div>
                            @endif

                        <div class="nk-pps-field form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="deposit-amount">Amount to Deposit</label>
                            </div>
                            <div class="form-control-group">
                                <div class="form-text-hint form-text-hint-lg">
                                    <span class="currency">USD</span>
                                </div>
                                <input type="text" required class="form-control form-control-lg form-control-number" id="deposit-amount" name="amount" placeholder="0.00">
                                <input type="hidden" id="deposit-currency" name="deposit_currency" value="BTC">
                            </div>

                            <div class="form-note-group">
                                <span class="nk-pps-min form-note-alt">Minimum <span id="deposit-min">100.00 USD</span></span>
                                <span id="deposit-rate" class="nk-pps-rate form-note-alt hide">
                                        1 USD = <span class="fxrate">1.00 USD</span>
                                    </span>
                            </div>
                        </div>
                        <div class="form-label-group">
                            <label class="form-label">Payment Method</label>
                        </div>
                        @foreach($payment_m as $item)
                        <div style="margin-bottom: 8px" class="nk-pps-field form-group">
                            <ul class="nk-pm-list" id="payment-option-list">
                                <li class="nk-pm-item">
                                    <input class="nk-pm-control" type="radio" name="payment_method_id" required="" value="{{ $item->id }}" id="{{ $item->id }}">
                                    <label class="nk-pm-label" for="{{ $item->id }}">
                                        <span class="pm-name text-capitalize">{{ $item->name }}</span>
                                        <span class="pm-icon"><em class="icon ni ni-coin"></em></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        @endforeach


                        <div class="nk-pps-field form-action text-center">
                            <div class="nk-pps-action">
                                <button type="submit" class="btn btn-lg btn-block btn-primary" >
                                    <span>Continue to Deposit</span>
                                    <span class="spinner-border spinner-border-sm hide" role="status" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="nk-pps-action pt-3">
                                <a href="{{ route('user.deposit') }}" class="btn btn-outline-secondary btn-trans">Back to previous</a>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript">
                        var fxCur = { base: "USD", alter: "EUR", data: {"BTC":{"rate":3.1e-5,"min":0.1,"max":96,"code":"BTC","dp":6}} };
                    </script>
                </div></div>
        </div>

    </div>
</div>


@endsection
