@extends('pages.layout.app')
@section('content')

    <main>
    <section class="ui-section--1 l-pb-0">
        <div class="container relative">
            <div class="section--container small text-center l-fs-16">
                <div class="wrap l-mb-50 lm-mb-25">
                    <h1 class="l-mb-25"> A World of Crypto Choices </h1>
                    <p>  {{ env('APP_NAME') }} has combined state-of-the-art technology and a wealth of market expertise to create an innovative and intuitive global crypto ecosystem that is open to everyone. Trade digital assets on our exchange, enjoy unmatched interest rates with an  {{ env('APP_NAME') }} wallet, and generate passive returns with our fully automated crypto arbitrage platform.</p>
                </div>
            </div>
            <div class="section--container align-flex-start">
                <div class="col-left">
                    <div class="ui-embed lm-mb-50 toggle" data-ready-class="toggle">
                        
                    </div>
                </div>
                <div class="col-right">
                    <div class="ui-list  style--1">
                        <div class="item">
                            <div class="caption"> We are committed to continuously improving our products and services, implementing upgrades, and developing innovative value-added utilities for RBIS,  {{ env('APP_NAME') }}'s native token </div>
                        </div>
                        <div class="item">
                            <div class="caption">  {{ env('APP_NAME') }} offers a highly secure, regulated crypto investing environment where you can benefit from an exceptionally user-friendly experience, and unparalleled revenue potential </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ui-section--1">
        <div class="container">
            <div class="section--container">
                <div class="col-left">
                    <h2 class="l-mb-30"> The  {{ env('APP_NAME') }} advantage </h2>
                    <p class="l-mb-25 l-fs-16">Our highly innovative patent-pending technology is designed to help you strengthen your crypto portfolio and nurture steady, long-term revenue growth</p>
                    <p class="l-mb-25 l-fs-16"> As a fully EU licensed and regulated crypto ecosystem,  {{ env('APP_NAME') }} enables users to enter the digital currency markets securely, transparently, and reliably.</p>
                    <p class="l-mb-50 l-fs-16"> {{ env('APP_NAME') }} offers a broad selection of exceptionally user-friendly financial products and services that open the door to cryptocurrency investing to everyone</p>
                    <div>
                        <a href="#" class="ui-button ui-button--1 ui-button--large">
                            <span class="label">Join now</span>
                        </a>
                    </div>
                </div>
                <div class="col-right scrollme animateme" data-when="enter" data-from="1.5" data-translatey="100" data-to="0" data-scale="0.8" style="opacity: 1; transform: translate3d(0px, 98px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(0.804, 0.804, 0.804);">
                    <div class="ui-frame--11">
                        <div class="frame"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ui-section--3">
        <div class="container relative">
            <div class="ui-features-blocks swiper" id="_features_block_1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide item">
                        <div class="ui-feature--card style--2">
                            <div class="wrapper">
                                <div class="image">
                                    <img src="/assets/icons/about/1.svg">
                                </div>
                                <div class="details">
                                    <div class="ui-title l-mb-15"> Advanced proven technology </div>
                                    <p>Our sophisticated technology offers unprecedented levels of reliability, speed, and efficiency</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide item">
                        <div class="ui-feature--card style--2">
                            <div class="wrapper">
                                <div class="image">
                                    <img src="/assets/icons/about/2.svg">
                                </div>
                                <div class="details">
                                    <div class="ui-title l-mb-15"> Multiple financial services </div>
                                    <p>Pick from a broad suite of services including our exchange, wallet, and crypto arbitrage platform</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide item">
                        <div class="ui-feature--card style--2">
                            <div class="wrapper">
                                <div class="image">
                                    <img src="/assets/icons/about/3.svg">
                                </div>
                                <div class="details">
                                    <div class="ui-title l-mb-15"> Support for fiat and crypto </div>
                                    <p>Benefit from the flexibility to invest in crypto using a wide range of fiat and digital currencies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide item">
                        <div class="ui-feature--card style--2">
                            <div class="wrapper">
                                <div class="image">
                                    <img src="/assets/icons/about/4.svg">
                                </div>
                                <div class="details">
                                    <div class="ui-title l-mb-15"> A user-friendly experience </div>
                                    <p>Enter the crypto arena with ease, investing smoothly and simply with a highly intuitive system</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide item">
                        <div class="ui-feature--card style--2">
                            <div class="wrapper">
                                <div class="image">
                                    <img src="/assets/icons/about/5.svg">
                                </div>
                                <div class="details">
                                    <div class="ui-title l-mb-15"> EU license and regulation </div>
                                    <p>Invest secure in the knowledge that  {{ env('APP_NAME') }} complies with the strictest regulatory requirements</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide item">
                        <div class="ui-feature--card style--2">
                            <div class="wrapper">
                                <div class="image">
                                    <img src="/assets/icons/about/6.svg">
                                </div>
                                <div class="details">
                                    <div class="ui-title l-mb-15"> 24/7 service and support </div>
                                    <p>Take advantage of expert assistance, around the clock, from experienced industry professionals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ui-section--1">
        <div class="container relative">
            <div class="section--container align-flex-start">
                <div class="col-left">
                    <h2 class="l-mb-25 before-circle"> Our vision </h2>
                    <p class="l-fs-16 l-mr-50 lm-mb-50">We believe in democratizing the arbitrage space, diverting power away from major financial institutions and placing it back in the hands of ordinary people. Smart Arbitrage Systems is committed to creating an environment where even those without a wealth of experience or hundreds of thousands in available investment capital can earn from market price differences. We aim to help novices get a slice of the action, by automizing and simplifying the entire process so that anyone can benefit from market opportunities, enjoying minimal exposure and maximum returns.</p>
                </div>
                <div class="col-right l-ml-50 lm-ml-0">
                    <h2 class="l-mb-25 before-circle"> Unmatched expertise </h2>
                    <p class="l-fs-16"> {{ env('APP_NAME') }}'s team is made up of R&amp;D professionals and market specialists. We are dedicated to providing expert personal guidance to our clients whatever their experience level, so they can optimize their profit potential, while driving innovation with arbitrage technology that keeps pushing the envelope.</p>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            if (window.innerWidth <= 1024) {
                const swiper = new Swiper('#_features_block_1', {
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
