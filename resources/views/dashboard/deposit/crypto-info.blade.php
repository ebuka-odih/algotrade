@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">


        <div class="nk-content-body">
            <div class="page-dw wide-xs m-auto">
                <div class="nk-pps-apps">
                    <div class="nk-pps-title text-center">
                        <h3 class="title">Make Your Payment</h3>
                        <p class="caption-text">Your order <strong class="text-dark">{{ $deposit->transId() }}</strong> has been placed successfully. To complete, please send the exact amount of <strong class="text-dark">{{ $deposit->showBTCRate() }} BTC</strong> to the address below.</p>
                    </div>
                    <div class="nk-pps-card card card-bordered popup-inside">
                        <div class="card-inner-group">
                            <div class="card-inner card-inner-sm">
                                <div class="card-head mb-0">
                                    <h6 class="title mb-0">Pay Bitcoin</h6>
                                    <div class="card-opt"><span class="counter" data-countdown-second="1799" data-countdown-text="Expire in">Expire in <span id="time">29:00</span> </span></div>
                                </div>
                            </div>
                            <div class="card-inner">
                                <div class="qr-media mx-auto mb-3 w-max-100px">
{{--                                        {!! QrCode::size(400)->generate($payment_method->btc_address); !!}--}}

                                </div>
                                <div class="pay-info text-center">
{{--                                    <h5 class="title text-dark mb-0 clipboard-init" data-clipboard-text="0.1">--}}
{{--                                        {{ $deposit->showBTCRate() }} BTC <em class="click-to-copy icon ni ni-copy-fill nk-tooltip" title="" data-original-title="Click to Copy"></em>--}}
{{--                                    </h5>--}}
                                    <h4 class="text-soft">{{ $deposit->amount }} USD</h4>
                                    <p class="text-soft">{{ $deposit->showRate() }} EUR</p>
                                </div>
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <hr>

                                <div class="form-group">
{{--                                    <div class="form-label overline-title-alt lg text-center">Bitcoin Address</div>--}}
                                   <h5 class="mb-3 text-center">
                                       Pay to {{ $deposit->crypto_wallet->name }} Wallet
                                   </h5>

                                    <div class=" col-lg-12" id="">
                                        <div class="qr-media mx-auto mb-3 w-max-100px">
                                         {!! QrCode::size(400)->generate($deposit->crypto_wallet->value); !!}

                                        </div>
                                        <br>
                                        <div class="form-control-wrap">
                                            <div class="form-clip clipboard-init nk-tooltip" data-clipboard-target="#wallet-address" title="" data-original-title="Copy">
                                                <em class="click-to-copy icon ni ni-copy"></em>
                                            </div>
                                            <div class="form-icon"><em class="icon ni ni-coin-alt-fill"></em></div>
                                            <input readonly="" type="text" class="form-control form-control-lg" id="wallet-address" value="{{ $deposit->crypto_wallet->value }}">
                                        </div>
                                    </div>
                                </div>


                                <br>

                                <div class="nk-pps-action">
                                    <a href="#crypto-paid" class="btn btn-block btn-primary popup-open"><span>Paid</span></a>
                                </div>
                                <div class="nk-pps-action pt-2 text-center">
                                    <a href="{{ asset('user.transactions') }}" class="link link-btn link-primary">Pay Later</a>
                                </div>
                                <div id="crypto-paid" class="popup">
                                    <div class="popup-content">
                                        <h6 class="mb-2">Confirm your payment</h6>
                                        <p>If you already paid, please provide us your payment reference to speed up verification procces.</p>
                                        <form class="form" action="{{ route('user.paymentReference') }}" method="POST" id="crypto-pay-reference">
                                            @csrf
                                            <input type="hidden" name="deposit_id" value="{{ $deposit->id }}">
                                            <div class="form-group">
                                                <div class="form-label">Payment Reference <span class="text-danger">*</span></div>
                                                <div class="form-control-wrap">
                                                    <input name="trans_code" type="text" class="form-control " value="" placeholder="Enter your reference id / hash">
                                                </div>
                                            </div>
                                            <ul class="btn-group justify-between align-center gx-4">
                                                <li><button type="submit" class="btn btn-primary btn-block">Confirm Payment</button></li>
                                                <li><a href="#" class="link link-btn link-secondary popup-close">Close</a></li>
                                            </ul>

                                        </form>
                                        <div class="alert-note is-plain mt-4">
                                            <em class="icon ni ni-alert-circle"></em>
                                            <p>Account will credited once we confirm that payment has been received.</p>
                                        </div>
                                    </div>
                                    <div class="popup-overlay"></div>
                                </div>
                            </div>
                            <div class="card-inner bg-lighter">
                                <ul>
                                    <li class="alert-note is-plain text-danger">
                                        <em class="icon ni ni-alert-circle"></em>
                                        <p>Be aware of that this order will be cancelled, if you send any other BTC amount.</p>
                                    </li>
                                    <li class="alert-note is-plain">
                                        <em class="icon ni ni-info"></em>
                                        <p>Account will credited once we received your payment.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-pps-action mt-n2">
                        <ul class="btn-group justify-between align-center gy-3">
                            <li><a href="{{ route('user.cancelDeposit', $deposit->id) }}" class="link link-danger">Cancel Order</a></li>
                            <li><a href="{{ route('user.dashboard') }}" class="link link-primary"><span>Back to Dashboard</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

    <script>
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function () {
            var fiveMinutes = 60 * 29,
                display = document.querySelector('#time');
            startTimer(fiveMinutes, display);
        };
    </script>

@endsection
