@extends('pages.layout.app')
@section('content')

    <main>
        <section class="ui-section--1 ui-section--start">
            <div class="container">
                <div class="section--container">
                    <div class="col-left">
                        <h1 class="l-mb-15">
                            Take control of your<br> finances with<br> {{ env('APP_NAME') }}
                        </h1>
                        <p class="l-mb-50 lm-mb-30">A secure, <a href="arbismart-license/index.html">EU authorized,</a><br>
                            interest-generating wallet and exchange</p>
                        <div class="l-mb-50 lm-mb-30">
                            <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large">
                                <span class="label">Open an account</span>
                            </a>
                        </div>

                    </div>
                    <div class="col-right scrollme">
                        <div class="ui-frame--1">
                            <div class="coins">
                                <div class="item animateme" data-when="enter" data-from="0" data-translatey="50" data-to="2.3" data-opacity="0">
                                    <div class="icon--coin-1"></div>
                                </div>
                                <div class="item animateme" data-when="enter" data-from="0" data-translatey="70" data-to="2.3" data-opacity="0">
                                    <div class="icon--coin-1"></div>
                                </div>
                                <div class="item animateme" data-when="enter" data-from="0" data-translatey="90" data-to="2.3" data-opacity="0">
                                    <div class="icon--coin-2"></div>
                                </div>
                                <div class="item animateme" data-when="enter" data-from="0" data-translatey="30" data-to="2.3" data-opacity="0">
                                    <div class="icon--coin-3"></div>
                                </div>
                                <div class="item animateme" data-when="enter" data-from="0" data-translatey="50" data-to="2.3" data-opacity="0">
                                    <div class="icon--coin-4"></div>
                                </div>
                            </div>
                            <lottie-player src="wp-content/themes/arbismart_4.0/assets/animations/Fourth.json" background="index.html" speed="1" loop="" autoplay=""></lottie-player>
                            <div class="frame"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container scrollme animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0">
            <section class="ui-section--2">
                <div class="ui-group-items ui-logos--container">
                    <a target="_blank" class="item"><img src="{{ asset('assets/images/fm.svg') }}"></a>
                    <a target="_blank" class="item"><img src="{{ asset('assets/images/ns.svg') }}"></a>
                    <a target="_blank" class="item"><img src="{{ asset('assets/images/be.svg') }}"></a>
                    <a target="_blank" class="item"><img src="{{ asset('assets/images/cd.svg') }}"></a>
                    <a target="_blank" class="item"><img src="{{ asset('assets/icons/binance.svg') }}"></a>
                    <a target="_blank" class="item"><img src="{{ asset('assets/icons/coinbase.svg') }}"></a>
                    <a target="_blank" class="item"><img src="{{ asset('assets/icons/cg.svg') }}"></a>
                    <a target="_blank" class="item"><img src="{{ asset('assets/images/yf.svg') }}"></a>
                </div>
            </section>
        </div>
        <section class="ui-section--3">
            <div class="container">
                <div class="section--container">
                    <div class="col-left">
                        <div class="ui-coin--list scrollme">
                            <div class="item animateme" data-when="enter" data-from="0.5" data-scale="0.7" data-to="0" data-opacity="0">
                                <div class="ui-coin--card">
                                    <div class="col">
                                        <div class="coin-name">
                                            <div class="col-icon">
                                                <span class="icon--bitcoin"></span>
                                            </div>
                                            <div class="col-title">
                                                <div>BTC</div>
                                                <span>Bitcoin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col price">
                                        <div id="bitcoin_price">–</div>
                                    </div>
                                    <div class="col change">
                                        <div id="bitcoin_change">–</div>
                                    </div>
                                    <div class="col chart">
                                        <div id="btc_chart"></div>
                                    </div>
                                    <div class="col promise">
                                        <div>2% - 49%</div>
                                    </div>
                                    <div class="col">
                                        <a class="ui-button ui-button--2 ui-button--small" href="{{ route('register') }}"><span class="label">Earn</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item animateme" data-when="enter" data-from="0.8" data-scale="0.7" data-to="0" data-opacity="0">
                                <div class="ui-coin--card">
                                    <div class="col">
                                        <div class="coin-name">
                                            <div class="col-icon">
                                                <span class="icon--rbis"></span>
                                            </div>
                                            <div class="col-title">
                                                <div>RBIS</div>
                                                <span>{{ env('APP_NAME') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col price">
                                        <div id="rbis_price">–</div>
                                    </div>
                                    <div class="col change">
                                        <div id="rbis_change">–</div>
                                    </div>
                                    <div class="col chart">
                                        <div id="rbis_chart"></div>
                                    </div>
                                    <div class="col promise">
                                        <div>7% - 49%</div>
                                    </div>
                                    <div class="col">
                                        <a class="ui-button ui-button--2 ui-button--small" href="{{ route('register') }}"><span class="label">Earn</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item animateme" data-when="enter" data-from="1" data-scale="0.7" data-to="0" data-opacity="0">
                                <div class="ui-coin--card">
                                    <div class="col">
                                        <div class="coin-name">
                                            <div class="col-icon">
                                                <span class="icon--eth"></span>
                                            </div>
                                            <div class="col-title">
                                                <div>ETH</div>
                                                <span>Ethereum</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col price">
                                        <div id="eth_price">–</div>
                                    </div>
                                    <div class="col change">
                                        <div id="eth_change">–</div>
                                    </div>
                                    <div class="col chart">
                                        <div id="eth_chart"></div>
                                    </div>
                                    <div class="col promise">
                                        <div>2% - 49%</div>
                                    </div>
                                    <div class="col">
                                        <a class="ui-button ui-button--2 ui-button--small" href="{{ route('register') }}"><span class="label">Earn</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item animateme" data-when="enter" data-from="1.2" data-scale="0.7" data-to="0" data-opacity="0">
                                <div class="ui-coin--card">
                                    <div class="col">
                                        <div class="coin-name">
                                            <div class="col-icon">
                                                <span class="icon--ltc"></span>
                                            </div>
                                            <div class="col-title">
                                                <div>LTC</div>
                                                <span>Litecoin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col price">
                                        <div id="ltc_price">–</div>
                                    </div>
                                    <div class="col change">
                                        <div id="ltc_change"></div>
                                    </div>
                                    <div class="col chart">
                                        <div id="ltc_chart"></div>
                                    </div>
                                    <div class="col promise">
                                        <div>2% - 49%</div>
                                    </div>
                                    <div class="col">
                                        <a class="ui-button ui-button--2 ui-button--small" href="{{ route('register') }}"><span class="label">Earn</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item animateme" data-when="enter" data-from="1.3" data-scale="0.5" data-to="0" data-opacity="0">
                                <div class="ui-coin--card">
                                    <div class="col">
                                        <div class="coin-name">
                                            <div class="col-icon">
                                                <span class="icon--xrp"></span>
                                            </div>
                                            <div class="col-title">
                                                <div>XRP</div>
                                                <span>Ripple</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col price">
                                        <div id="xrp_price">–</div>
                                    </div>
                                    <div class="col change">
                                        <div id="xrp_change">–</div>
                                    </div>
                                    <div class="col chart">
                                        <div id="xrp_chart"></div>
                                    </div>
                                    <div class="col promise">
                                        <div>2% - 49%</div>
                                    </div>
                                    <div class="col">
                                        <a class="ui-button ui-button--2 ui-button--small" href="{{ route('register') }}"><span class="label">Earn</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item animateme" data-when="enter" data-from="1.2" data-scale="0.2" data-to="0" data-opacity="0">
                                <div class="ui-coin--card">
                                    <div class="col">
                                        <div class="coin-name">
                                            <div class="col-icon">
                                                <span class="icon--usdt"></span>
                                            </div>
                                            <div class="col-title">
                                                <div>USDT</div>
                                                <span>Tether</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col price">
                                        <div id="usdt_price">–</div>
                                    </div>
                                    <div class="col change">
                                        <div id="usdt_change">–</div>
                                    </div>
                                    <div class="col chart">
                                        <div id="usdt_chart"></div>
                                    </div>
                                    <div class="col promise">
                                        <div>2% - 49%</div>
                                    </div>
                                    <div class="col">
                                        <a class="ui-button ui-button--2 ui-button--small" href="{{ route('register') }}"><span class="label">Earn</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-right">
                        <h2 class="l-mb-25">Earn up to 147% interest!</h2>
                        <p class="l-mb-40">Don't just let your fiat and crypto sit idle. Put it to work earning exceptional rates, with an {{ env('APP_NAME') }} interest-bearing wallet</p>
                        <div>
                            <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large ui-button--invert">
                                <span class="label">Open a wallet</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ui-section--1 scrollme animateme" data-when="enter" data-from="1" data-scale="0.8" data-to="0" data-opacity="0">
            <div class="container">
                <div class="section--container">
                    <div class="col-left">
                        <h2 class="l-mb-25">
                            Your key to the<br> crypto market
                        </h2>
                        <p class="l-mb-40">Unlock emerging opportunities rapidly and<br>
                            reliably, trading securely on {{ env('APP_NAME') }}’s market-<br>
                            leading, licensed, and regulated exchange.</p>
                        <div>
                            <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large">
                                <span class="label">Open a wallet</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="ui-frame--2">

                            <lottie-player src="assets/animations/Second.json" background="index.html" speed="1" loop="" autoplay=""></lottie-player>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ui-section--3 overflow-hidden scrollme">
            <div class="container">
                <div class="section--container">
                    <div class="col-left">
                        <div class="ui-frame--3">
                            <div class="frame animateme" data-when="enter" data-from="1.5" data-translatex="-150" data-to="0"></div>
                        </div>
                    </div>
                    <div class="col-right">
                        <h2 class="l-mb-25">Rapid, real time execution</h2>
                        <p class="l-mb-40">In the volatile cryptocurrency exchanges,
                            every second counts. Our highly responsive tech can react instantly,
                            executing a huge volume of transactions simultaneously.</p>
                        <div>
                            <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large ui-button--invert">
                                <span class="label">Open a wallet</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui-flower--1 animateme" data-when="enter" data-from="1.5" data-translatey="150" data-to="0"></div>
        </section>
        <section class="ui-section--1">
            <div class="container">
                <div class="section--container">
                    <div class="col-left">
                        <h2 class="l-mb-25">
                            Maximize Your<br> Passive changes
                        </h2>
                        <p class="l-mb-40">Stake your funds with our decentralized yield<Br> farming program and trade using our automated<br>
                            arbitrage trading system to enjoy annual<br> percentage yields that are unmatched anywhere<br> in the industry</p>
                        <div>
                            <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large">
                                <span class="label">Sign Up</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-right scrollme">
                        <div class="ui-frame--5">
                            <div class="frame">
                                <div class="notebook animateme" data-when="enter" data-from="1" data-translatex="550" data-to="0">
                                    <div class="screen animateme" data-when="enter" data-from="2" data-opacity="0" data-to="0"></div>
                                </div>
                                <div class="flowers-1"></div>
                                <div class="flowers-2"></div>
                                <div class="placeholder animateme" data-when="enter" data-from="1" data-scale="0.4" data-to="0"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ui-section--3 scrollme">
            <div class="container animateme" data-when="enter" data-from="1" data-scale="0.7" data-to="0" data-opacity="0">
                <div class="section--container">
                    <div class="col-left">
                        <div class="ui-frame--4">
                            <div class="frame"></div>
                        </div>
                    </div>
                    <div class="col-right">
                        <h2 class="l-mb-25">Putting your security first</h2>
                        <p class="l-mb-40">Fully EU licensed and regulated, {{ env('APP_NAME') }} implements the strictest
                            technological protocols to ensure account integrity,
                            safeguarding the privacy and security of all automated transactions.</p>
                        <div>
                            <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large ui-button--invert">
                                <span class="label">Start now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
