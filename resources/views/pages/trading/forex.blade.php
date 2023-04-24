@extends('pages.layout.app')
 @section('content') 
 <style>
    h3{
        font-size: 28px;
        padding-bottom: 10px;
        font-weight: bolder;
    }
    p{
        padding-bottom: 10px; 
    }
</style>
 <main>
    <section class="ui-section--1 ui-section--start l-pb-0">
      <div class="container">
        <div class="section--container">
          <div class="col-left">
            <h1 class="l-mb-15"> 
                Forex
            </h1><br>
            <h3> Why Trade Forex with {{ env('APP_NAME')}}</h3>
            <p>The global foreign exchange market is one of the fastest, most liquid and exciting markets. Join thousands of traders who are already trading with {{ env('APP_NAME')}}, a multi award-winning global broker, offering over 70 Forex pairs in all the major currencies, 24 hours a day, 5 days a week. All major currency pairs include the US dollar (USD) as either the base or counter currency. Majors include pairs like the GBP/USD, EUR/USD, and USD/JPY.</p>
         
            <p> {{ env('APP_NAME')}} offers you consistently tight spreads, starting from as low as 0.0 pips. We’ve partnered with leading banking and non-banking financial institutions to ensure a deep liquidity pool, so that you get the best available market prices and ultra-low latency order execution.</p>
            <div>
              <h3>
                What are the benefits of Forex trading?
              </h3>
              <ul>
                <li>Trade on spreads from 0.0 pips</li>
                <li>Leverage options up to 500:1</li>
                <li>70+ currency pairs</li>
                <li>The Forex markets are open 24 hours a day, 5 days a week</li>
                <li>Award-winning multilingual customer support</li>
                <li>No price manipulation</li>
                <li>Benefit from low margin, low-cost trading</li>
                <li>High speed trade execution from Equinix servers</li>
                <li>Enter and exit trades whenever you want to, 24/5</li>
                <li>Trade in any direction you think the markets will go, short or long, maximising trading opportunities.</li>
                <li>Get access to pre-open price action and gauge market direction with cutting-edge tools.</li>
              </ul>
              
              <br>
                        <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/" rel="noopener" target="_blank"><span class="blue-text">Forex market</span></a> by TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                {
                "width": 100%,
                "height": 400,
                "currencies": [
                "EUR",
                "USD",
                "JPY",
                "GBP",
                "CHF",
                "AUD",
                "CAD",
                "NZD"
                ],
                "isTransparent": false,
                "colorTheme": "light",
                "locale": "en"
            }
                </script>
            </div>
            <!-- TradingView Widget END -->
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
            <h2 class="l-mb-15"> Play to Earn <br> Make money just for playing games! </h2>
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