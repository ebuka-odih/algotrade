
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CryptoZone : Crypto Trading Admin Bootstrap 5 Template">
    <meta property="og:title" content="CryptoZone  :Crypto Trading Admin Bootstrap 5 Template">
    <meta property="og:description" content="CryptoZone  :Crypto Trading Admin  Admin Bootstrap 5 Template">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>{{ env('APP_NAME') }}</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <link href="{{ asset('assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css" integrity="sha512-3PN6gfRNZEX4YFyz+sIyTF6pGlQiryJu9NlGhu9LrLMQ7eDjNgudQoFDK3WSNAayeIKc6B8WXXpo4a7HqxjKwg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style css -->
    <!-- Datatable -->
    <link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        [data-header-position="fixed"] .header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #36246514;
        }
    </style>

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="loader">
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">
    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <h3 style="font-weight: bolder" class=" text-white">AG-Trade</h3>
{{--            <h2 style="font-weight: bolder" class="brand-title">AlgoTrade</h2>--}}
{{--            <img src="images/logo/logo.png" class="logo-abbr" alt="">--}}
{{--            <img src="images/logo/logo-text.png" class="brand-title" alt="">--}}
{{--            <img src="images/logo/logo-color.png" class="logo-color" alt="">--}}
{{--            <img src="images/logo/logo-text-color.png" class="brand-title color-title" alt="">--}}
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="11" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="22" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect y="11" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect y="22" width="4" height="4" rx="2" fill="#2A353A"/>
                </svg>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->


    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Dashboard
                        </div>
                    </div>
                    <div class="navbar-nav header-right">

                        <div class="dz-side-menu">
                            <div class="sidebar-social-link ">
                                <ul>
                                    <li style="visibility: hidden" class="nav-item dropdown notification_dropdown">
                                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4023 13.4798C20.7599 13.6577 21.0359 13.9387 21.23 14.2197C21.6082 14.8003 21.5775 15.5121 21.2096 16.1395L20.4942 17.2634C20.1161 17.8627 19.411 18.2373 18.6854 18.2373C18.3277 18.2373 17.9291 18.1437 17.6021 17.9564C17.3364 17.7972 17.0298 17.741 16.7028 17.741C15.691 17.741 14.8428 18.5183 14.8121 19.4455C14.8121 20.5225 13.8719 21.3653 12.6967 21.3653H11.3068C10.1214 21.3653 9.18116 20.5225 9.18116 19.4455C9.16072 18.5183 8.3125 17.741 7.30076 17.741C6.96351 17.741 6.65693 17.7972 6.40144 17.9564C6.07441 18.1437 5.66563 18.2373 5.31816 18.2373C4.58235 18.2373 3.8772 17.8627 3.49908 17.2634L2.79393 16.1395C2.4158 15.5308 2.39536 14.8003 2.77349 14.2197C2.937 13.9387 3.24359 13.6577 3.59106 13.4798C3.8772 13.3487 4.06116 13.1333 4.23489 12.8804C4.74587 12.075 4.43928 11.0167 3.57062 10.5391C2.55888 10.0053 2.23185 8.81591 2.81437 7.88875L3.49908 6.78366C4.09181 5.8565 5.35904 5.52871 6.381 6.0719C7.2701 6.52143 8.42491 6.22174 8.94611 5.4257C9.10962 5.16347 9.2016 4.88251 9.18116 4.60156C9.16072 4.23631 9.27314 3.8898 9.46731 3.60884C9.84543 3.0282 10.5301 2.65359 11.2762 2.63486H12.7171C13.4734 2.63486 14.1581 3.0282 14.5362 3.60884C14.7202 3.8898 14.8428 4.23631 14.8121 4.60156C14.7917 4.88251 14.8837 5.16347 15.0472 5.4257C15.5684 6.22174 16.7232 6.52143 17.6225 6.0719C18.6343 5.52871 19.9117 5.8565 20.4942 6.78366L21.1789 7.88875C21.7717 8.81591 21.4447 10.0053 20.4227 10.5391C19.554 11.0167 19.2474 12.075 19.7686 12.8804C19.9322 13.1333 20.1161 13.3487 20.4023 13.4798ZM9.10962 12.0095C9.10962 13.4798 10.4075 14.6505 12.012 14.6505C13.6165 14.6505 14.8837 13.4798 14.8837 12.0095C14.8837 10.5391 13.6165 9.3591 12.012 9.3591C10.4075 9.3591 9.10962 10.5391 9.10962 12.0095Z" fill="#130F26"></path>
                                            </svg>

                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 p-3 height370">
                                                <h4 class="text-center border-bottom pb-2">Notications</h4>
                                                <ul class="timeline">
                                                    <li>
                                                        <div class="timeline-badge primary"></div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>10 minutes ago</span>
                                                            <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge info">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                                                            <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge danger">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>30 minutes ago</span>
                                                            <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge success">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>15 minutes ago</span>
                                                            <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge warning">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge dark">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge primary"></div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>10 minutes ago</span>
                                                            <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge info">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                                                            <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge danger">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>30 minutes ago</span>
                                                            <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge success">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>15 minutes ago</span>
                                                            <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge warning">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge dark">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <ul>
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('img/avatar.jpeg') }}" alt="">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                        <a href="{{ route('user.profile') }}" class="dropdown-item ai-icon ">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="var(--primary)" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                            <span class="ms-2">Profile </span>
                                        </a>
                                        <a href="{{ route('user.settings') }}" class="dropdown-item ai-icon ">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="var(--primary)" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="var(--primary)"></path>
                                                </g>
                                            </svg>
                                            <span class="ms-2">Settings </span>
                                        </a>
                                        <a href="page-login.html" class="dropdown-item ai-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                            <span class="ms-2">Logout </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class=" " href="{{ route('user.dashboard') }}" >
                        <i class="material-icons">grid_view</i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a href="{{ route('user.deposit') }}" aria-expanded="false">
                        <i class="material-icons">arrow_downward</i>
                        <span class="nav-text">Deposit </span>
                    </a>
                </li>
                <li><a href="{{ route('user.withdraw') }}" >
                        <i class="material-icons">arrow_upward</i>
                        <span class="nav-text">Withdrawal </span>
                    </a>
                </li>
                <li><a href="{{ route('user.deposits') }}" >
                        <i class="material-icons">money</i>
                        <span class="nav-text">Transactions </span>
                    </a>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons">attach_money</i>
                        <span class="nav-text">Buy Assets</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('user.stock') }}">Stocks</a></li>
                        <li><a href="{{ route('user.crypto') }}">Crypto</a></li>
                        <li><a href="coin-details.html">Precious Metals</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('user.investment') }}" >
                        <i class="material-icons">monetization_on</i>
                        <span class="nav-text">Investment</span>
                    </a>
                </li>
                <li><a href="{{ route('user.autotrader') }}" aria-expanded="false">
                        <i class="material-icons">autorenew</i>
                        <span class="nav-text">Auto Trader </span>
                    </a>
                </li>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons">show_chart</i>
                        <span class="nav-text">Trading Room</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="exchange.html">Forex</a></li>
                        <li><a href="crypto.html">Stocks</a></li>
                        <li><a href="{{ route('user.trade.crypto') }}">Crypto</a></li>
                    </ul>
                </li>
                <li><a href="#" >
                        <i class="material-icons">history</i>
                        <span class="nav-text">Orders </span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    @yield('content')

    <!--**********************************
        Content body end
    ***********************************-->



    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer out-footer">
        <div class="copyright">
            <p>Copyright © <a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_NAME') }}</a> 2023</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>
<!-- Apex Chart -->
<script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/js/swiper-bundle.min.js') }}"></script>

<!-- Datatable -->
<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>

<script src="https://s3.tradingview.com/tv.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js"></script>
<script src="{{ asset('assets/vendor/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assets/vendor/morris/morris.min.js') }}"></script>

<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/deznav-init.js') }}"></script>
<script src="{{ asset('assets/js/demo.js') }}"></script>
{{--<script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/dashboard/tradingview-1.js') }}"></script>--}}

</body>
</html>
