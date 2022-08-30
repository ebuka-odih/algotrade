@extends('pages.layout.app')
@section('content')

<main>
    <div class="uk-section uk-padding-remove-vertical">
        <div class="in-slideshow uk-position-relative" data-uk-slideshow>
            <ul class="uk-slideshow-items uk-light">
                <li class="uk-flex uk-flex-bottom">
                    <div class="uk-position-cover">
                        <img src="img/in-slideshow-image-1.jpg" alt="slideshow-image" data-uk-cover>
                    </div>
                    <span></span>
                    <div class="uk-container">
                        <div class="uk-uk-grid" data-uk-grid>
                            <div class="uk-width-3-5@m">
                                <div class="uk-overlay">
                                    <h1>Trade Shares and Forex with Financial Thinking</h1>
                                    <p class="uk-text-lead uk-visible@m">Access 40,000+ instruments – across asset classes – to trade, hedge and invest from a single account.</p>
                                    <a href="{{ route('register') }}" class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i class="fas fa-scroll uk-margin-small-right"></i>Get Started Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="uk-flex uk-flex-bottom">
                    <div class="uk-position-cover">
                        <img src="img/in-slideshow-image-2.jpg" alt="slideshow-image" data-uk-cover>
                    </div>
                    <span></span>
                    <div class="uk-container">
                        <div class="uk-uk-grid" data-uk-grid>
                            <div class="uk-width-3-5@m">
                                <div class="uk-overlay">
                                    <h1>Trade Shares and Crypto with Financial Thinking</h1>
                                    <p class="uk-text-lead uk-visible@m">A trusted destination for traders worldwide, multi-lingual support 24/7.</p>
                                    <a href="{{ route('register') }}" class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i class="fas fa-scroll uk-margin-small-right"></i>Get Started Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="uk-flex uk-flex-bottom">
                    <div class="uk-position-cover">
                        <img src="img/in-slideshow-image-3.jpg" alt="slideshow-image" data-uk-cover>
                    </div>
                    <span></span>
                    <div class="uk-container">
                        <div class="uk-uk-grid" data-uk-grid>
                            <div class="uk-width-3-5@m">
                                <div class="uk-overlay">
                                    <h1>Award-winning Products and Trading platforms</h1>
                                    <p class="uk-text-lead uk-visible@m">Tap into the world's markets and explore endless trading opportunities with tight spreads and no commission.</p>
                                    <a href="{{ route('register') }}" class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i class="fas fa-scroll uk-margin-small-right"></i>Get Started Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="uk-container uk-light">
                <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-center"></ul>
            </div>
        </div>
    </div> <!-- section content begin -->
    <div class="uk-section uk-section-primary uk-section-xsmall">
        <div class="uk-container in-wave-1">
            <div class="uk-grid uk-grid-divider uk-child-width-1-4@m in-margin-top@s in-margin-bottom@s" data-uk-grid>
                <div>
                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                        <div class="uk-width-auto">
                            <img src="img/in-wave-icon-1.svg" alt="wave-icon" width="48">
                        </div>
                        <div class="uk-width-expand">
                            <p>Free<br>analysis tools</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                        <div class="uk-width-auto">
                            <img src="img/in-wave-icon-2.svg" alt="wave-icon" width="48">
                        </div>
                        <div class="uk-width-expand">
                            <p>Fast execution<br>0 commision</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                        <div class="uk-width-auto">
                            <img src="img/in-wave-icon-3.svg" alt="wave-icon" width="48">
                        </div>
                        <div class="uk-width-expand">
                            <p>Low minimum<br>deposit of $100</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                        <div class="uk-width-auto">
                            <img src="img/in-wave-icon-4.svg" alt="wave-icon" width="48">
                        </div>
                        <div class="uk-width-expand">
                            <p>Over 2,100<br>assets to trade</p>
                        </div>
                    </div>
                </div>
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" align="center">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
                        {
                            "symbols": [
                            {
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "Nasdaq 100"
                            },
                            {
                                "description": "Apple Inc.",
                                "proName": "NASDAQ:AAPL"
                            },
                            {
                                "description": "Microsoft",
                                "proName": "NASDAQ:MSFT"
                            },
                            {
                                "description": "Gold",
                                "proName": "NYSE:GOLD"
                            }
                        ],
                            "colorTheme": "dark",
                            "isTransparent": false,
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section uk-section-default uk-padding-remove-vertical in-wave-5 in-offset-bottom-40">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-background-contain uk-background-center-right uk-background-image@m" style="background-image: url(img/in-wave-mockup-1.png);">
                    <h1 class="uk-margin-remove-bottom">Start <span class="uk-text-primary">trading</span></h1>
                    <p class="uk-text-lead">on <span class="uk-text-primary">Algotrade</span> via mobile devices.</p>
                    <p class="uk-margin-small-bottom">Available on multiple platform</p>
                    <a href="{{ route('login') }}" class="uk-button uk-button-secondary uk-border-rounded in-button-app">
                        <i class="fab fa-google-play fa-2x"></i>
                        <span class="wrapper">Access from<span>Android Devices</span></span>
                    </a>
                    <a href="{{ route('login') }}" class="uk-button uk-button-secondary uk-border-rounded in-button-app uk-margin-small-left in-margin-remove-left@s">
                        <i class="fab fa-apple fa-2x"></i>
                        <span class="wrapper">Access from<span>Apple Devices</span></span>
                    </a>
                    <a href="{{ route('login') }}" class="uk-button uk-button-secondary uk-border-rounded uk-visible@m in-button-app uk-margin-small-left">
                        <i class="fab fa-windows fa-2x"></i>
                        <span class="wrapper">Access from<span>PC/Laptop</span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section uk-section-primary in-offset-bottom-40">
        <div class="uk-container in-wave-10">
            <div class="uk-grid uk-position-relative uk-flex uk-flex-middle">
                <div class="uk-position-bottom-right in-offset-bottom-40">
                    <img src="img/in-wave-background-4.svg" alt="wave-hq" width="500">
                </div>
                <div class="uk-width-auto@m uk-text-center">
                    <img src="img/in-wave-icon-10.svg" alt="wave-icon" width="96">
                </div>
                <div class="uk-width-3-5@m">
                    <h2 class="uk-margin-remove-bottom">CORONAVIRUS SUPPORT</h2>
                    <p>We are supporting your investing needs no matter how things may be. We've put together some helpful resources to make it quick and easy to self-service on our website and mobile apps. If you need to reach us by phone, please understand your wait may be longer than normal due to increased market volatility related to COVID-19. You can write us instead and we'll reply promptly. <a class="uk-text-small uk-text-uppercase uk-margin-small-left" href="contact.html">Learn more<i class="fas fa-long-arrow-alt-right fa-sm uk-margin-small-left"></i></a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <br>
    <!-- section content begin -->
    <div class="uk-section uk-padding-large">
        <div class="uk-container in-wave-2">
            <div class="uk-grid">
                <div class="uk-width-3-4@m">
                    <h1 class="uk-margin-remove-bottom">Industry-<span class="in-highlight">leading</span> prices</h1>
                    <p class="uk-text-lead uk-text-muted uk-margin-small-top uk-margin-bottom">Get ultra-competitive spreads and commissions across all asset classes. Receive even better rates as your volume increases.</p>
                </div>
            </div>
            <div class="uk-grid-medium uk-grid-match" data-uk-grid>
                <div class="uk-width-1-4@m">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center" style="background-image: url(img/in-wave-card-bg-1.png);">
                        <h5 class="uk-margin-remove">
                            <a href="{{ route('login') }}">FX <i class="fas fa-chevron-right fa-xs"></i></a>
                        </h5>
                        <p class="uk-margin-remove">Spread as low as</p>
                        <h1 class="uk-margin-top">0.2</h1>
                        <p class="uk-margin-remove-top uk-margin-bottom">pip</p>
                        <p>Trade 182 FX spot pairs and 140 forwards across majors, minors, exotics and metals.</p>
                    </div>
                </div>
                <div class="uk-width-1-4@m">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center" style="background-image: url(img/in-wave-card-bg-2.png);">
                        <h5 class="uk-margin-remove">
                            <a href="{{ route('register') }}">CFDs <i class="fas fa-chevron-right fa-xs"></i></a>
                        </h5>
                        <p class="uk-margin-remove">Spread from</p>
                        <h1 class="uk-margin-top">0.4</h1>
                        <p class="uk-margin-remove-top uk-margin-bottom">on US500</p>
                        <p>Go long or short on 9,000+ instruments with tight spreads & low commissions.</p>
                    </div>
                </div>
                <div class="uk-width-1-4@m">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center" style="background-image: url(img/in-wave-card-bg-3.png);">
                        <h5 class="uk-margin-remove">
                            <a href="{{ route('register') }}">Stocks <i class="fas fa-chevron-right fa-xs"></i></a>
                        </h5>
                        <p class="uk-margin-remove">Commissions from</p>
                        <h1 class="uk-margin-top">$3</h1>
                        <p class="uk-margin-remove-top uk-margin-bottom">on US stocks</p>
                        <p>Access 19,000+ stocks across core and emerging markets on 36 exchanges worldwide.</p>
                    </div>
                </div>
                <div class="uk-width-1-4@m">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center" style="background-image: url(img/in-wave-card-bg-4.png);">
                        <h5 class="uk-margin-remove">
                            <a href="{{ route('register') }}">Commodities <i class="fas fa-chevron-right fa-xs"></i></a>
                        </h5>
                        <p class="uk-margin-remove">Commission as low as</p>
                        <h1 class="uk-margin-top">$1.25</h1>
                        <p class="uk-margin-remove-top uk-margin-bottom">per lot</p>
                        <p>Trade a wide range of commodities as CFDs, futures, options, spot pairs, & more.</p>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-5@m">
                    <div class="uk-card uk-card-default uk-card-body uk-text-center uk-border-rounded uk-box-shadow-small in-wave-2-card">
                        <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill uk-margin-small-right">Start trade</span>
                        Trade stocks on our Intuitive, easy-to-use and powerful platform. <a href="{{ route('register') }}">Join now!</a>
                    </div>
                    <div class="uk-grid-collapse uk-grid-divider uk-child-width-1-3@m uk-text-center uk-margin-top uk-margin-small-bottom" data-uk-grid>
                        <div>
                            <i class="fas fa-headset fa-lg uk-margin-small-right uk-text-primary"></i>
                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Award-winning support</p>
                        </div>
                        <div>
                            <i class="fas fa-university fa-lg uk-margin-small-right uk-text-primary"></i>
                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Regulated Platform</p>
                        </div>
                        <div>
                            <i class="fas fa-history fa-lg uk-margin-small-right uk-text-primary"></i>
                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">11 years experience</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-section-muted uk-padding-large in-wave-3 uk-background-contain uk-background-center" style="background-image: url(img/in-wave-background-1.png);" data-uk-parallax="bgy: -200">
        <div class="uk-container">
            <div class="uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                <div class="uk-width-1-2@m">
                    <img class="uk-margin-bottom" src="img/in-wave-icon-5.svg" alt="wave-icon" width="64">
                    <h1 class="uk-margin-remove">Market
                        <span class="in-highlight">analysis</span> and<br>trade inspiration</h1>
                    <p>Our award-winning platform gives you access to powerful technical charting & fundamental stock research tools. See for yourself how equity trading here gives you some of the best technology and value you’ll find anywhere.</p>
                    <div class="uk-grid-medium uk-child-width-1-3@m uk-text-center uk-margin-medium-top" data-uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <img class="uk-margin-remove-bottom" src="img/in-wave-icon-6.svg" alt="wave-icon" width="52">
                                <h5 class="uk-margin-small-top">Strategies &amp; Discussions</h5>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <img class="uk-margin-remove-bottom" src="img/in-wave-icon-7.svg" alt="wave-icon" width="52">
                                <h5 class="uk-margin-small-top">Forecasts &amp; Educations</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-inline uk-dark in-wave-video uk-margin-small-bottom">
                        <img class="uk-border-rounded" src="img/in-wave-image-1.jpg" alt="wave-video">
                        <div class="uk-position-center">
                            <a href="#modal-media-youtube" data-uk-toggle>
                                <div class="in-play-button"></div>
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div id="modal-media-youtube" class="uk-flex-top" data-uk-modal>
                            <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-wave-iframe">
                                <button class="uk-modal-close-outside" type="button" data-uk-close></button>
                            </div>
                        </div>
                    </div>
                    <p class="uk-text-small uk-text-muted">Explore the markets at your own pace with short online courses. <span class="uk-label uk-text-small uk-border-pill">Sign up</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-large">
        <div class="uk-container in-wave-4">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-1-1 uk-text-center">
                    <h1 class="uk-margin-medium-bottom"><span class="in-highlight">Complete</span> package for every traders</h1>
                </div>
                <div class="uk-width-3-4@m">
                    <div class="uk-grid-collapse uk-child-width-1-2@m in-wave-pricing" data-uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium">
                                <p class="uk-text-small uk-text-uppercase">Minimum funding<span class="uk-label uk-border-pill uk-text-small uk-margin-small-left">USD 500</span></p>
                                <h2 class="uk-margin-top uk-margin-remove-bottom">Classic account</h2>
                                <p class="uk-text-lead uk-text-muted uk-margin-remove-top">Benefit from industry-leading entry prices</p>
                                <hr>
                                <ul class="uk-list uk-list-bullet">
                                    <li>One of the established industry leaders</li>
                                    <li>Three decades of trading know-how</li>
                                    <li>Award-winning customer service*</li>
                                    <li>Highly-regarded trader education*</li>
                                    <li>Advanced risk management</li>
                                    <li>Tax-free spread betting profits</li>
                                    <li>Low minimum deposit</li>
                                </ul>
                                <a href="{{ route('register') }}" class="uk-button uk-button-default uk-border-rounded uk-align-center">Open an account<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body uk-box-shadow-large">
                                <p class="uk-text-small uk-text-uppercase">Minimum funding<span class="uk-label uk-border-pill uk-text-small uk-margin-small-left">USD 1000</span></p>
                                <h2 class="uk-margin-top uk-margin-remove-bottom">Platinum account</h2>
                                <p class="uk-text-lead uk-text-muted uk-margin-remove-top">Receive even tighter spreads and commissions</p>
                                <hr>
                                <ul class="uk-list uk-list-bullet">
                                    <li>Award-winning trading platform*</li>
                                    <li>Wide range of charting tools</li>
                                    <li>Fast, automated excecution</li>
                                    <li>Expert news & analysis</li>
                                    <li>Competitive spreads</li>
                                    <li>Advanced trading tools</li>
                                    <li>Tax-free spread betting profits</li>
                                </ul>
                                <a href="{{ route('register') }}" class="uk-button uk-button-primary uk-border-rounded uk-align-center">Open an account<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section uk-section-default in-wave-15 in-offset-bottom-40 uk-background-contain uk-background-center-right uk-background-image@m" style="background-image: url(img/in-wave-background-3.png);">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-1-3@m">
                    <h2>Join over <span class="uk-text-primary">1 million</span> traders over the world</h2>
                    <p>Sign up for your demo account now.</p>
                    <form class="uk-grid-small" data-uk-grid>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <input class="uk-input uk-border-rounded" type="text" placeholder="Email address">
                        </div>
                        <div class="uk-width-1-1 uk-width-auto@m">
                            <button class="uk-button uk-button-primary uk-border-rounded uk-width-expand">Get Started</button>
                        </div>
                    </form>
                    <div class="uk-margin-top">
                        <span class="uk-text-small uk-text-muted uk-margin-small-right">Or sign up with</span>
                        <a class="uk-button uk-button-small uk-border-rounded in-brand-google" href="{{ route('register') }}"><i class="fab fa-google"></i></a>
                        <a class="uk-button uk-button-small uk-border-rounded in-brand-facebook" href="{{ route('register') }}"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="uk-width-expand@m uk-flex uk-flex-center in-margin-medium-top@s">
                    <img src="img/in-wave-mockup-4.png" alt="wave-mockup" width="292" height="286">
                </div>
                <div class="uk-width-auto@m uk-visible@m">
                    <a class="uk-flex uk-flex-middle uk-light in-wave-15-button" href="{{ route('register') }}">
                        <h3>Get a taste of the<br>Trading experience</h3>
                        <i class="fas fa-chevron-right fa-lg uk-margin-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

</main>

@endsection
