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
                Metal
            </h1><br>
            <h3> Trade Metals CFDs with {{ env('APP_NAME')}} </h3>
            <p>{{ env('APP_NAME')}} allows trading the spot price for metals including Gold or Silver against the US Dollar or Australian Dollar as a currency pair on 500:1 leverage.

            </p>
            <p>Open a trading account with {{ env('APP_NAME')}}, and you will gain exposure to the available global market prices on trading gold CFDs and silver CFDs. Trading metal CFDs with {{ env('APP_NAME')}}, a global regulated, multi-award-winning broker.

            </p>
         
            <div>
              <h3>
                What are the benefits of trading Metals?
              </h3>
              <ul>
                <li>Trade in any direction you think the markets will go, short or long, maximising trading opportunities</li>
                <li>Powerful trading platforms, MetaTrader 4 (MT4), MetaTrader 5 (MT5) and Iress, with real-time gold and silver news and charts. Trade anytime, anywhere, across multiple devices</li>
                <li>Rich educational resources and Trading Tools to hone your Trading Strategies</li>
                <li>Hedge Risks - Hedge your investment risks with high value assets, like gold and silver</li>
                <li>Benefit from low margin, low-cost trading, without compromising execution                </li>
            
            </ul>
              
              <br>
        
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