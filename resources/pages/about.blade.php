@extends('pages.layout.app2')
@section('content')

<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="uk-width-3-5@m">
                        <h1 class="uk-margin-small-bottom">Giving our clients the best services <span class="in-highlight">since day 1</span></h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove-top">For more than 11 years, we’ve been empowering clients by helping them take control of their financial lives.</p>
                    </div>
                </div>
                <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid="">
                    <div class="uk-flex uk-flex-left uk-first-column">
                        <div class="uk-margin-right">
                            <i class="fas fa-leaf fa-lg in-icon-wrap primary-color"></i>
                        </div>
                        <div>
                            <h3>Philosophy</h3>
                            <p>Driven, motivated people who believe that personal engagement is a sense of ownership, and a commitment to investing gives them control over their financial future.</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <i class="fas fa-hourglass-end fa-lg in-icon-wrap primary-color"></i>
                        </div>
                        <div>
                            <h3>History</h3>
                            <p>Having more than 11 years experience, Algotrade is now one of the largest stock exchanges listed Stocks &amp; CFD broker in the world. We have offices in over 13 countries including UK, Poland, Germany, France and Turkey. We are also regulated by the world's biggest supervision authorities.</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <i class="fas fa-flag fa-lg in-icon-wrap primary-color"></i>
                        </div>
                        <div>
                            <h3>Culture</h3>
                            <p>Always providing top-notch trading experience for our clients and becoming one of the best in the industry. We never settle for less and we help our customers grow!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m">
                    <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid="">
                        <div class="uk-width-1-2@m uk-first-column">
                            <h4 class="uk-text-muted">Number speaks</h4>
                            <h1 class="uk-margin-medium-bottom">We always ready<br>for a <span class="in-highlight">challenge.</span></h1>
                            <a href="{{ route('register') }}" class="uk-button uk-button-primary uk-border-rounded">Get Started<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="uk-margin-large uk-grid" data-uk-grid="">
                                <div class="uk-width-1-3@m uk-first-column">
                                    <h1 class="uk-text-primary uk-text-right@m">
                                        <span class="count" data-counter-end="189">0</span>
                                    </h1>
                                    <hr class="uk-divider-small uk-text-right@m">
                                </div>
                                <div class="uk-width-expand@m">
                                    <h4>Trading instruments</h4>
                                    <p>Familiarize yourself with advanced strategies and our trading toolset. Take your trading to the next level.</p>
                                </div>
                            </div>
                            <div class="uk-margin-large uk-grid" data-uk-grid="">
                                <div class="uk-width-1-3@m uk-first-column">
                                    <h1 class="uk-text-primary uk-text-right@m">
                                        <span class="count" data-counter-end="36">0</span>
                                    </h1>
                                    <hr class="uk-divider-small uk-text-right@m">
                                </div>
                                <div class="uk-width-expand@m">
                                    <h4>Countries covered</h4>
                                    <p>Invest with Algotrade! Smart, reliable investing for Everyone, Anywhere!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>

@endsection
