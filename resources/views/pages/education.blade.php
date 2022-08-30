@extends('pages.layout.app2')
@section('content')

<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid" data-uk-grid="">
                <div class="uk-width-3-5@m uk-first-column">
                    <h1 class="uk-margin-small-bottom"><span class="in-highlight">Knowledge</span> is a wise investment</h1>
                    <p class="uk-text-lead uk-text-muted uk-margin-remove-top">By combining easy-to-understand information with actionable insights, Our company helps make the market seem less daunting—and more approachable.</p>
                    <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill">Learn</span>
                    <i class="fas fa-arrows-alt-h fa-sm uk-margin-small-left uk-margin-small-right"></i>
                    <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill">Understand</span>
                    <i class="fas fa-arrows-alt-h fa-sm uk-margin-small-left uk-margin-small-right"></i>
                    <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill">Trade</span>
                </div>
                <div class="uk-width-2-5@m">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                        <div class="uk-grid uk-grid-small">
                            <div class="uk-width-expand@m">
                                <h3 class="uk-margin-remove-bottom">Trade Academy</h3>
                                <p class="uk-margin-small-top">Become a Pro-Trader in just few days. Get all the knowledge you need!</p>
                                <a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('register') }}">Start Learning</a>
                            </div>
                            <div class="uk-width-auto@m uk-visible@m">
                                <div class="in-icon-wrapper transparent uk-margin-top">
                                    <i class="fas fa-user-graduate fa-5x"></i>
                                </div>
                            </div>
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
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <table class="uk-table uk-table-middle uk-table-divider uk-table-responsive">
                        <tbody>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                        <i class="fas fa-users fa-lg in-icon-wrap"></i>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3>Beginner Course</h3>
                                    </div>
                                </div>
                            </td>
                            <td>Learn the basic concepts of forex trading, what this market is all about, and why you should be a part of it.</td>
                            <td class="uk-width-1-5@m uk-text-right@m">
                                <a href="{{ route('register') }}" class="uk-button uk-button-text">Enter Course<i class="fas fa-chevron-right fa-xs uk-margin-small-left"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                        <i class="fas fa-tools fa-lg in-icon-wrap"></i>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3>Trading Tools</h3>
                                    </div>
                                </div>
                            </td>
                            <td>Familiarize yourself with advanced strategies and Btrade's trading toolset. Take your trading to the next level.</td>
                            <td class="uk-width-1-5@m uk-text-right@m">
                                <a href="{{ route('register') }}" class="uk-button uk-button-text">Enter Course<i class="fas fa-chevron-right fa-xs uk-margin-small-left"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="uk-width-1-3@m">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                        <i class="fas fa-chart-area fa-lg in-icon-wrap"></i>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h3>Stocks and CFDs</h3>
                                    </div>
                                </div>
                            </td>
                            <td>Discover the world of CFD trading: The ins &amp; outs of the CFD market, relevant information and market dynamics.</td>
                            <td class="uk-width-1-5@m uk-text-right@m">
                                <a href="{{ route('register') }}" class="uk-button uk-button-text">Enter Course<i class="fas fa-chevron-right fa-xs uk-margin-small-left"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="uk-flex uk-flex-center uk-margin-medium-top uk-margin-bottom">
                        <div class="uk-width-3-4@m">
                            <div class="uk-grid-small uk-child-width-1-3@m uk-child-width-1-2@s uk-grid" data-uk-grid="">
                                <div class="uk-first-column">
                                    <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">Fast Academy</a>
                                </div>
                                <div>
                                    <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">Video Tutorials</a>
                                </div>
                                <div>
                                    <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">Course</a>
                                </div>
                                <div class="uk-grid-margin uk-first-column">
                                    <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">E-Books</a>
                                </div>
                                <div class="uk-visible@m uk-grid-margin">
                                    <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">Glossary</a>
                                </div>
                                <div class="uk-visible@m uk-grid-margin">
                                    <a class="uk-button uk-button-default uk-border-rounded uk-width-expand" href="#">Trading Info</a>
                                </div>
                            </div>
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
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-primary uk-box-shadow-small uk-border-rounded uk-background-cover" style="background-image: url(img/in-card-background-1.jpg);">
                        <div class="uk-card-body">
                            <h2 class="uk-margin-remove-bottom">Free Demo Account</h2>
                            <p class="uk-margin-small-top">Practice Stocks and CFDs trading in a risk-free environment.</p>
                            <a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('register') }}">Open an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>

@endsection
