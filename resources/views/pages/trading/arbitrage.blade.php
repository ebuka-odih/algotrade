@extends('pages.layout.app')
 @section('content') 

 <main>
    <section class="ui-section--1 ui-section--start">
      <div class="container">
        <div class="section--container">
          <div class="col-left">
            <h1 class="l-mb-15"> What is arbitrage? </h1>
            <p class="l-mb-50">Arbitrage involves buying an asset on one market and selling it on another to profit from a price difference between the two. Arbitrage is widely considered to offer an attractive investment opportunity as it tends to provide healthy returns while exposing the investor to minimal risk.</p>
            <div>
              <a href="{{ route('register')}}" target="_blank" class="ui-button ui-button--1 ui-button--large">
                <span class="label">Get started</span>
              </a>
            </div>
          </div>
          <div class="col-right">
            <div class="ui-lottie--frame">
              <lottie-player src="/assets/animations/arbitrage2.json" background="transparent" speed="1" loop="" autoplay=""></lottie-player>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ui-section--3 style--3">
      <div class="container">
        <div class="section--container">
          <div class="col-left">
            <div class="ui-lottie--frame">
              <lottie-player src="/assets/animations/arbitrage1.json" background="transparent" speed="1" loop="" autoplay=""></lottie-player>
            </div>
          </div>
          <div class="col-right">
            <h2 class="l-mb-25"> What is crypto arbitrage? </h2>
            <p class="l-fw-700 l-mb-30"> Crypto arbitrage takes advantage of temporary price inefficiencies - brief intervals where a coin is available at different prices simultaneously. The coin is bought on the exchange where the price is lowest, then sold on the exchange where the price is highest to generate a profit. </p>
            <div class="ui-list l-mb-50">
              <div class="item">
                <div class="caption"> {{ env('APP_NAME')}} is a fully EU regulated, automated system, which scans thirty-five exchanges at once, 24/7 </div>
              </div>
              <div class="item">
                <div class="caption"> Secure and reliable, our advanced proprietary technology enables you to invest with peace of mind </div>
              </div>
              <div class="item">
                <div class="caption"> The platform generates industry-high returns, of up to 45% a year depending on the size of the investment </div>
              </div>
            </div>
            <div>
              <a href="{{ route('register')}}" target="_blank" class="ui-button ui-button--invert ui-button--1 ui-button--large">
                <span class="label">Create an account</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ui-section--5 style--1">
      <div class="container relative">
        <div class="section--container small text-center l-fs-16">
          <div class="wrap">
            <h2 class="l-mb-25"> Why become an arbitrage investor with {{ env('APP_NAME')}}? </h2>
            <p class="l-mb-50"> Buy and sell a broad choice of cryptocurrencies, benefiting from real-time data and lightning-fast trade execution. The {{ env('APP_NAME')}} exchange is incredibly intuitive, ensuring a user-friendly experience, while providing highly competitive rates. </p>
          </div>
        </div>
        <div class="ui-features-blocks swiper" id="_features_block">
          <div class="swiper-wrapper">
            <div class="swiper-slide item">
              <div class="ui-feature--card style--1">
                <div class="wrapper">
                  <div class="image">
                    <img src="/assets/icons/arbitrage/1.svg">
                  </div>
                  <div class="details">
                    <div class="ui-title l-mb-15"> Unmatched profit potential </div>
                    <p>Enjoy the opportunity to earn unparalleled passive profits and industry-leading interest rates on your fiat and crypto capital</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide item">
              <div class="ui-feature--card style--1">
                <div class="wrapper">
                  <div class="image">
                    <img src="/assets/icons/arbitrage/2.svg">
                  </div>
                  <div class="details">
                    <div class="ui-title l-mb-15"> State-of-the-art technology </div>
                    <p>Benefit from the cryptocurrency markets in real time, with advanced tech capable of processing a mass of data at lightning speed</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide item">
              <div class="ui-feature--card style--1">
                <div class="wrapper">
                  <div class="image">
                    <img src="/assets/icons/arbitrage/3.svg">
                  </div>
                  <div class="details">
                    <div class="ui-title l-mb-15"> EU licensed and regulated </div>
                    <p>Invest with peace of mind, with an exceptionally secure, licensed platform, compliant with the strictest regulatory standards</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide item">
              <div class="ui-feature--card style--1">
                <div class="wrapper">
                  <div class="image">
                    <img src="/assets/icons/arbitrage/4.svg">
                  </div>
                  <div class="details">
                    <div class="ui-title l-mb-15"> Access via any device </div>
                    <p>Manage your portfolio from home or on the go, accessing your {{ env('APP_NAME')}} account, at any time, via your computer, tablet or mobile</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide item">
              <div class="ui-feature--card style--1">
                <div class="wrapper">
                  <div class="image">
                    <img src="/assets/icons/arbitrage/5.svg">
                  </div>
                  <div class="details">
                    <div class="ui-title l-mb-15"> Expert 24/7 assistance </div>
                    <p>Receive first-class service and support, around the clock, from our experienced, global team of crypto market professionals</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide item">
              <div class="ui-feature--card style--1">
                <div class="wrapper">
                  <div class="image">
                    <img src="/assets/icons/arbitrage/6.svg">
                  </div>
                  <div class="details">
                    <div class="ui-title l-mb-15"> Support for fiat and crypto </div>
                    <p>Take advantage of lucrative crypto exchange, arbitrage, and wallet opportunities using a wide selection of fiat and cryptocurrencies</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="l-mt-30">
          <a href="#" class="ui-button ui-button--1 ui-button--large l-ml-auto l-mr-auto">
            <span class="label">Get started</span>
          </a>
        </div>
      </div>
    </section>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        if (window.innerWidth <= 1024) {
          const swiper = new Swiper('#_features_block', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            breakpoints: {
              // when window width is >= 640px
              500: {
                slidesPerView: 'auto',
                spaceBetween: 20
              },
              1024: {
                slidesPerView: 3,
                spaceBetween: 20
              }
            }
          });
        }
      });
    </script>
  </main>
 @endsection