@extends('pages.layout.app')
@section('content')
    <main>
        <section class="ui-section--5 ui-section--start bg-11606">
            <div class="container relative">
                <div class="section--container small text-center l-fs-16">
                    <div class="wrap">
                        <h1 class="l-mb-25"> Speed and Simplicity </h1>
                        <p class="l-mb-50"> Buy and sell a broad choice of cryptocurrencies, benefiting from real-time data and lightning-fast trade execution. The {{ env('APP_NAME') }} exchange is incredibly intuitive, ensuring a user-friendly experience, while providing highly competitive rates. </p>
                        <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large l-ml-auto l-mr-auto">
                            <span class="label">Trade now</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="ui-section--1 m-text-center">
            <div class="container scrollme animateme" data-when="enter" data-from="1" data-scale="0.9" data-to="0" data-opacity="0.8" style="opacity: 0.81; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(0.905, 0.905, 0.905);">
                <div class="section--container">
                    <div class="col-left">
                        <h2 class="l-mb-15"> Trade with Peace of Mind </h2>
                        <p class="l-mb-50">The {{ env('APP_NAME') }} exchange is fully EU authorised, guaranteeing an exceptionally secure trading environment. We comply with the strictest technological protocols to safeguard against breaches or fraud, and implement best practices like account insurance, so you can trade with complete confidence. </p>
                        <div class="ml-flex justify-content-center">
                            <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large">
                                <span class="label">Join now</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="ui-frame--12">
                            <div class="frame"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ui-section--6 overflow-hidden">
            <div class="container">
                <div class="section--container">
                    <div class="col-left">
                        <div class="ui-frame--13">
                            <div class="frame scrollme animateme" data-when="enter" data-from="1" data-scale="0.9" data-to="0" data-opacity="0.8" style="opacity: 0.83; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(0.917, 0.917, 0.917);"></div>
                        </div>
                    </div>
                    <div class="col-right">
                        <h2 class="l-mb-25">Exchange Advantages</h2>
                        <div class="ui-list ui-list--1">
                            <div class="item">
                                <div class="caption">Exchange Advantages</div>
                            </div>
                            <div class="item">
                                <div class="caption">An intuitive, easy-to-navigate UI</div>
                            </div>
                            <div class="item">
                                <div class="caption">A secure, fully EU-licensed exchange</div>
                            </div>
                            <div class="item">
                                <div class="caption">A vast, varied selection of crypto assets</div>
                            </div>
                            <div class="item">
                                <div class="caption">A low fee-structure and unrivalled rates</div>
                            </div>
                            <div class="item">
                                <div class="caption">Instant, real-time trade execution </div>
                            </div>
                            <div class="item">
                                <div class="caption">Safe fund storage in a high-interest wallet</div>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large ui-button--invert">
                                <span class="label">Open an account</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ui-section--1 ">
            <div class="container relative">
                <div class="section--container text-center l-fs-16">
                    <div class="wrap">
                        <h2 class="l-mb-25"> Exceptional Rates </h2>
                        <p class="l-mb-50"> Benefit from unmatched rates, minimal transaction fees <br> and no hidden costs at all. </p>
                        <div class="ui-coin--list style--1 scrollme animateme" data-when="enter" data-from="1" data-scale="0.9" data-to="0" data-opacity="0.8" style="opacity: 0.86; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(0.929, 0.929, 0.929);">
                            <div class="wrap">
                                <div class="item header">
                                    <div class="ui-coin--card style--1">
                                        <div class="col"> Name </div>
                                        <div class="col category"> Category </div>
                                        <div class="col market-cap"> Market Cap </div>
                                        <div class="col price"> Price </div>
                                        <div class="col change"> Change </div>
                                        <div class="col"> Yield rate </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ui-coin--card style--1">
                                        <div class="col">
                                            <div class="coin-name">
                                                <div class="col-icon">
                                                    <span class="icon--bitcoin-alt"></span>
                                                </div>
                                                <div class="col-title">
                                                    <span>Bitcoin</span>
                                                    <div>BTC</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col category"> Crypto </div>
                                        <div class="col market-cap">
                                            <div id="bitcoin_mrktcap"></div>
                                        </div>
                                        <div class="col price">
                                            <div id="bitcoin_price"></div>
                                        </div>
                                        <div class="col change">
                                            <div id="bitcoin_change"></div>
                                        </div>
                                        <div class="col">
                                            <div>2.74%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ui-coin--card style--1">
                                        <div class="col">
                                            <div class="coin-name">
                                                <div class="col-icon">
                                                    <span class="icon--eth-alt"></span>
                                                </div>
                                                <div class="col-title">
                                                    <span>Ethereum</span>
                                                    <div>ETH</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col category"> Crypto </div>
                                        <div class="col market-cap">
                                            <div id="eth_mrktcap">–</div>
                                        </div>
                                        <div class="col price">
                                            <div id="eth_price">–</div>
                                        </div>
                                        <div class="col change">
                                            <div id="eth_change"></div>
                                        </div>
                                        <div class="col">
                                            <div>2.74%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ui-coin--card style--1">
                                        <div class="col">
                                            <div class="coin-name">
                                                <div class="col-icon">
                                                    <span class="icon--usdc-alt"></span>
                                                </div>
                                                <div class="col-title">
                                                    <span>USD Coin</span>
                                                    <div>USDC</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col category"> Crypto </div>
                                        <div class="col market-cap">
                                            <div id="usdc_mrktcap">–</div>
                                        </div>
                                        <div class="col price">
                                            <div id="usdc_price">–</div>
                                        </div>
                                        <div class="col change">
                                            <div id="usdc_change"></div>
                                        </div>
                                        <div class="col">
                                            <div>2.74%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large l-ml-auto l-mr-auto">
                            <span class="label">Join now</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
