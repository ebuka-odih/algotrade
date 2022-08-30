@extends('dashboard.layout.app')
@section('content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">


        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-head-sub"><span>Welcome!</span></div>
                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">{{ auth()->user()->name }}</h2>
                        <div class="nk-block-des">
                            <p>Here&#039;s a summary of your account. Have fun!</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content d-none d-md-inline-flex">
                        <ul class="nk-block-tools gx-3">
                            <li><a href="{{ route('user.stocks') }}" class="btn btn-secondary"><span>Invest &amp; Earn</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
                            <li><a href="{{ route('user.deposit') }}" class="btn btn-primary"><span>Deposit</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-md-4">
                        <div class="card card-full card-bordered card-wg on-bottom is-primary">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h5 class="nk-wgacc-title">Available Balance</h5>
                                    </div>
                                    <div class="card-tools">
                                        <em class="icon ni ni-info fs-13px text-soft nk-tooltip" title="Main account balance without locked or under progress."></em>
                                    </div>
                                </div>
                                <div class="card-amount mt-2 mb-1">
                                    <span class="amount">@convert(auth()->user()->balance) <span class="currency"> USD</span></span>
                                </div>
                                <div class="card-stats">
                                    <div class="card-stats-group g-2">
                                        <div class="card-stats-data">
                                            <div class="title fw-bold">
                                                Investment Account
                                                <em class="icon ni ni-info-fill fs-12px text-soft nk-tooltip" title="Additional balance in your Investment account."></em>
                                            </div>
                                            <div class="amount fw-bold">
                                                @convert($total_invest) <span class="currency fw-normal">USD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-stats-ck sm">

                                    </div>
                                </div>
                                <div class="card-action d-md-none">
                                    <ul class="nk-block-tools gx-4">
                                        <li><a href="{{ route('user.deposit') }}" class="btn btn-primary"><span>Deposit</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                                        <li><a href="{{ route('user.stocks') }}" class="btn btn-secondary"><span>Invest &amp; Earn</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card card-full card-bordered card-wg on-bottom is-base">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h5 class="nk-wgacc-title">Total Deposit</h5>
                                    </div>
                                    <div class="card-tools">
                                        <em class="icon ni ni-info fs-13px text-soft nk-tooltip" title="The total deposit amount without under progress."></em>
                                    </div>
                                </div>
                                <div class="card-amount mt-2 mb-1">
                                    <span class="amount">@convert($total_deposit) <span class="currency">USD</span></span>
                                </div>
                                <div class="card-stats">
                                    <div class="card-stats-group g-2">
                                        <div class="card-stats-data">
                                            <div class="title fw-bold">
                                                This Month
                                            </div>
                                            <div class="amount fw-bold">
                                                @convert($deposit_month) <span class="currency fw-normal">USD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-stats-ck sm">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card card-full card-bordered card-wg on-bottom is-warning">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h5 class="nk-wgacc-title">Total Withdraw</h5>
                                    </div>
                                    <div class="card-tools">
                                        <em class="icon ni ni-info fs-13px text-soft nk-tooltip" title="The total withdraw amount without under progress."></em>
                                    </div>
                                </div>
                                <div class="card-amount mt-2 mb-1">
                                    <span class="amount">@convert($total_withdraw) <span class="currency">USD</span></span>
                                </div>
                                <div class="card-stats">
                                    <div class="card-stats-group g-2">
                                        <div class="card-stats-data">
                                            <div class="title fw-bold">
                                                This Month
                                            </div>
                                            <div class="amount fw-bold">
                                                {{ $withdraw_month }} <span class="currency fw-normal">USD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-stats-ck sm">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <br>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div id="tradingview_1954d"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget(
                        {
                            "width": 890,
                            "height": 610,
                            "symbol": "NASDAQ:AAPL ",
                            "interval": "240",
                            "timezone": "Etc/UTC",
                            "theme": "dark",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": true,
                            "withdateranges": true,
                            "hide_side_toolbar": false,
                            "allow_symbol_change": true,
                            "watchlist": [
                                "MOEX:GAZP",
                                "AMEX:SPY",
                                "NASDAQ:TSLA",
                                "NASDAQ:QQQ",
                                "NASDAQ:RIVN",
                                "NASDAQ:NVDA",
                                "NASDAQ:AMD",
                                "NASDAQ:AMZN",
                                "NASDAQ:MSFT",
                                "NASDAQ:FB",
                                "NASDAQ:LCID",
                                "NYSE:BABA",
                                "NYSE:AMC",
                                "NSE:RELIANCE",
                                "NYSE:GME",
                                "NASDAQ:PYPL",
                                "NASDAQ:MRNA",
                                "NYSE:NIO",
                                "NYSE:PLTR",
                                "NYSE:F",
                                "NASDAQ:NFLX",
                                "NSE:TATAMOTORS",
                                "NSE:TCS",
                                "NSE:HDFCBANK",
                                "NYSE:SQ",
                                "NSE:SBIN",
                                "NSE:ICICIBANK",
                                "NASDAQ:COIN",
                                "NYSE:RBLX",
                                "NASDAQ:INTC",
                                "NSE:INFY",
                                "NSE:AXISBANK",
                                "NASDAQ:TQQQ",
                                "NASDAQ:TLRY",
                                "NYSE:BA",
                                "MOEX:SBER",
                                "AMEX:IWM",
                                "NYSE:DIS",
                                "NSE:TATAPOWER",
                                "NYSE:PFE",
                                "NSE:TATASTEEL",
                                "NASDAQ:GOOGL",
                                "NYSE:BAC",
                                "NASDAQ:ROKU",
                                "NSE:WIPRO",
                                "NSE:KOTAKBANK",
                                "NSE:UPL",
                                "NYSE:TSM",
                                "NASDAQ:MU"
                            ],
                            "details": true,
                            "hotlist": true,
                            "calendar": true,
                            "studies": [
                                "studyADR@tv-basicstudies",
                                "ATR@tv-basicstudies",
                                "BollingerBandsWidth@tv-basicstudies",
                                "CCI@tv-basicstudies"
                            ],
                            "container_id": "tradingview_1954d"
                        }
                    );
                </script>
            </div>
            <!-- TradingView Widget END -->
            <br>

            <div class="nk-block"><div class="card card-bordered"><div class="card-inner">

                        <div class="nk-refwg-invite">
                            <div class="nk-refwg-head g-3">
                                <div class="nk-refwg-title">
                                    <h5 class="title">Refer Us &amp; Earn</h5>
                                    <div class="title-sub">Use the below link to invite your friends.</div>
                                </div>

                            </div>
                            <div class="nk-refwg-url">
                                <div class="form-control-wrap">
                                    <button class="btn form-clip clipboard-init" data-success="Copied" data-text="Copy Link" data-clipboard-target="#foo">
                                        <em class="clipboard-icon icon ni ni-copy"></em>
                                        <span class="clipboard-text">Copy Link</span>
                                    </button>
                                    <div class="form-icon">
                                        <em class="icon ni ni-link-alt"></em>
                                    </div>
                                    <input type="text" class="form-control copy-text" id="foo" value="{{ auth()->user()->referral_link }}">
                                </div>
                            </div>
                        </div>

                    </div></div></div>


        </div>

    </div>
</div>
<script>
    new ClipboardJS('.btn');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
@endsection
