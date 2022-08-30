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
                            <span class="step"></span>
                        </div>
                        <div class="nk-pps-title text-center">
                            <h3 class="title">Deposit Funds</h3>
                            <p class="caption-text">via <strong>Bank Transfer</strong></p>
                            <p class="sub-text-sm">Make payment directly into our bank account.</p>
                        </div>
                        <form class="nk-pps-form" action="{{ route('user.proAmount') }}" method="POST" id="deposit-amount-form">
                            @csrf
                            <div class="nk-pps-field form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="deposit-amount">Amount to Deposit</label>
                                </div>
                                <div class="form-control-group">
                                    <div class="form-text-hint form-text-hint-lg">
                                        <span class="currency">USD</span>
                                    </div>
                                    <input type="text"  required class="form-control form-control-lg form-control-number" id="deposit-amount" name="amount" placeholder="0.00">
                                    <input type="hidden" id="deposit-currency" name="deposit_currency" value="USD">
                                </div>

                                <div class="form-note-group">
                                    <span class="nk-pps-min form-note-alt">Minimum <span id="deposit-min">100.00 USD</span></span>
                                    <span id="deposit-rate" class="nk-pps-rate form-note-alt hide">
                                        1 USD = <span class="fxrate">1.00 USD</span>
                                    </span>
                                  </div>
                            </div>
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
                            var fxCur = { base: "USD", alter: "EUR", data: {"USD":{"rate":1,"min":100,"max":99999999999,"code":"USD","dp":2}} };
                        </script>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
