@extends('pages.layout.app2')
@section('content')

<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid-match uk-grid-medium uk-child-width-1-3@m in-card-10 uk-grid" data-uk-grid="">
                <div class="uk-width-1-1 uk-first-column">
                    <h1 class="uk-margin-remove">A <span class="in-highlight">relationship</span> on your terms.</h1>
                    <p class="uk-text-lead uk-text-muted uk-margin-remove">Work with us the way you want.</p>
                    <p>Some believe you must choose between an online broker and a wealth management firm. At Algotrade, you don’t need to compromise. Whether you invest on your own, with an advisor, or a little of both — we can support you.</p>
                </div>
                <div class="uk-grid-margin uk-first-column">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-green">
                        <i class="fas fa-seedling fa-lg in-icon-wrap uk-margin-bottom"></i>
                        <h4 class="uk-margin-top">
                            <a href="{{ route('login') }}">Investing<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>A wide selection of investment product to help build diversified portfolio</p>
                    </div>
                </div>
                <div class="uk-grid-margin">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-blue">
                        <i class="fas fa-chart-bar fa-lg in-icon-wrap uk-margin-bottom"></i>
                        <h4 class="uk-margin-top">
                            <a href="{{ route('login') }}">Trading<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Powerful trading tools, resources, insight and support</p>
                    </div>
                </div>
                <div class="uk-grid-margin">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-purple">
                        <i class="fas fa-chart-pie fa-lg in-icon-wrap uk-margin-bottom"></i>
                        <h4 class="uk-margin-top">
                            <a href="{{ route('login') }}">Wealth management<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Dedicated financial consultant to help reach your own specific goals</p>
                    </div>
                </div>
                <div class="uk-grid-margin uk-first-column">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-navy">
                        <i class="fas fa-chalkboard-teacher fa-lg in-icon-wrap uk-margin-bottom"></i>
                        <h4 class="uk-margin-top">
                            <a href="{{ route('login') }}">Investment advisory<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>A wide selection of investing strategies from seasoned portfolio managers</p>
                    </div>
                </div>
                <div class="uk-grid-margin">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-grey">
                        <i class="fas fa-funnel-dollar fa-lg in-icon-wrap uk-margin-bottom"></i>
                        <h4 class="uk-margin-top">
                            <a href="{{ route('login') }}">Smart portfolio<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>A revolutionary, fully-automated investmend advisory services</p>
                    </div>
                </div>
                <div class="uk-grid-margin">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-orange">
                        <i class="fas fa-handshake fa-lg in-icon-wrap uk-margin-bottom"></i>
                        <h4 class="uk-margin-top">
                            <a href="{{ route('login') }}">Mutual fund advisor<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Specialized guidance from independent local advisor for hight-net-worth investors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-2-3@m">
                    <div class="uk-grid uk-grid-small" data-uk-grid="">
                        <div class="uk-width-auto@m uk-first-column">
                            <i class="fas fa-money-bill-wave fa-2x in-icon-wrap large primary-color uk-margin-right"></i>
                        </div>
                        <div class="uk-width-expand">
                            <h3>Why trade with Us?</h3>
                            <p>Learn the basic concepts of trading, what this market is all about, and why you should be a part of it. Familiarize yourself with advanced strategies and our trading toolset. Take your trading to the next level.</p>
                            <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                                <div>
                                    <ul class="uk-list uk-list-bullet in-list-check">
                                        <li>Direct Market Access (DMA)</li>
                                        <li>Leverage up to 1:500</li>
                                        <li>T+0 settlement</li>
                                        <li>Dividends paid in cash</li>
                                    </ul>
                                </div>
                                <div class="in-margin-small-top@s in-margin-bottom@s">
                                    <ul class="uk-list uk-list-bullet in-list-check">
                                        <li>Free from UK Stamp Duty</li>
                                        <li>Short selling available</li>
                                        <li>Commissions from 0.08%</li>
                                        <li>Access to 1500 global shares</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <h3>Check out our Shares offer</h3>
                    <table class="uk-table uk-table-divider uk-table-striped uk-text-small uk-text-center">
                        <thead>
                        <tr>
                            <th class="uk-text-center">Name</th>
                            <th class="uk-text-center">Initial Deposit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Apple Inc CFD</td>
                            <td>10%</td>
                        </tr>
                        <tr>
                            <td>Alibaba CFD</td>
                            <td>10%</td>
                        </tr>
                        <tr>
                            <td>Facebook CFD</td>
                            <td>10%</td>
                        </tr>
                        </tbody>
                    </table>
                    <p class="uk-text-small"><a href="{{ route('login') }}">See Full Shares Table</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-card-16">
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                        <div class="uk-grid uk-flex-middle" data-uk-grid="">
                            <div class="uk-width-1-1 uk-width-expand@m uk-first-column">
                                <h3>Get up to $600 plus 60 days of commission-free stocks &amp; forex trades</h3>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('login') }}">Open an Account</a>
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
