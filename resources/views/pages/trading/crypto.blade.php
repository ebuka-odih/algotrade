@extends('pages.layout.app')
@section('content')
<style>
    h3{
        font-size: 28px;
        padding-bottom: 10px;
        font-weight: bolder;
    }
</style>

<main>
    <section class="ui-section--1 ui-section--start l-pb-0">
    <div class="container">
    <div class="section--container">
    <div class="col-left">
    <h1 class="l-mb-15">
        Cryptocurrencies
    </h1>
    <H2>What are Cryptocurrencies?</H2>
    <p class="l-mb-50">
        Cryptocurrencies or crypto, are digital assets that function on decentralized blockchain networks that are not reliant on central authorities such as banks and governments.
    </p>
   
    <h2> Buy and Sell Cryptocurrencies with Algo-Trade Crypto
    </h2>
    <p class="l-mb-50">
        Welcome to Algo-Trade Crypto trading platform. Diversify your portfolio and trade
cryptocurrencies like Bitcoin and Ethereum today!
    </p>
    <h2>Explore Popular Coins
        On The {{ env('APP_NAME')}} Crypto Trading platform</h2>
    <p>
        After allowing users of our trading platform to trade securities and traditional equities assets over the last 17 years, {{ env('APP_NAME')}} has launched a crypto product to run alongside its existing offering. There are a variety of crypto assets available to trade on Algo-Trade, including:
BTC
Bitcoin - $BTC
Buy, HODL, or trade Bitcoin, the top crypto asset by market capitalization, and the creation of anonymous developer Satoshi Nakamoto.

ETH

    </p>

    <div>
        <br>
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Crypto markets</span></a> by TradingView</div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
    {
    "width": "100%",
    "height": "490",
    "defaultColumn": "overview",
    "screener_type": "crypto_mkt",
    "displayCurrency": "USD",
    "colorTheme": "light",
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
     <br>
    <h3> A range of crypto assets at your fingertips</h3>
    <p>
        The crypto market is hard to ignore, with some of the world’s largest enterprises starting to tokenize parts of their business and enter the crypto space. Digital currencies and tokens add further diversity to the existing options on {{ env('APP_NAME')}}.
    </p>
    <br>
    <h3> Diversify your portfolio, all on one platform </h3>
    <p>
        In conjunction with Apex crypto, the {{ env('APP_NAME')}} cryptocurrency trading platform allows users to buy fractions of cryptocurrencies. This allows for greater options of crypto assets for our customers, without the need for high-tech wallets or exchange accounts.
    </p>
    <br>
    <a href="{{ route('register')}}" class="ui-button ui-button--1 ui-button--large">
    <span class="label">Join now</span>
    </a>
    <br>
    </div>
    </div>
    <div class="col-right">
    <div class="ui-frame--20">
    <div class="frame"></div>
    </div>
    </div>
    </div>
    </div>
    </section>
   
    <section class="ui-section--3 style--3">
    <div class="container">
    <div class="section--container">
    <div class="col-left">
    <h2 class="l-mb-15">
    Play to Earn<br>
    Make money just for playing games!
    </h2>
    
    <div>
    <a href="{{ route('register')}}" class="ui-button ui-button--1 ui-button--large ui-button--invert">
    <span class="label">Play now</span>
    </a>
    </div>
    </div>
    <div class="col-right">
    <div class="ui-frame--22">
    <div class="frame"></div>
     </div>
    </div>
    </div>
    </div>
    </section>
    
    </main>

@endsection