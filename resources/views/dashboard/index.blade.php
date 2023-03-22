@extends('dashboard.layout.app')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card bubles">
                                <div class="card-body">
                                    <div class="buy-coin  bubles-down">
                                        <div>
                                            <h2>Buy & Sell 100+ Assets Instantly</h2>
                                            <p>Lorem Ipsum has been.</p>
                                            <a href="{{ route('user.stock') }}" class="btn btn-primary">Buy Stock</a>
                                        </div>
                                        <div class="coin-img">
                                            <img src="{{ asset('assets/images/coin.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <!-- column -->
                                <div class="col-xl-3 col-md-6 col-sm-6">
                                    <div class="card pull-up">
                                        <div class="card-body align-items-center flex-wrap">
                                            <div class="d-flex align-items-center mb-4">
                                                <a href="javascript:void(0)" class="ico-icon">
                                                    <i class="fa-solid fa-dollar-sign"></i>
                                                </a>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0)"><h4 class="heading mb-0">@convert($user->balance)</h4></a>
                                                   <span>Total Balance</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /column -->

                                <!-- column -->
                                <div class="col-xl-3 col-md-6 col-sm-6">
                                    <div class="card pull-up">
                                        <div class="card-body align-items-center flex-wrap">
                                            <div class="d-flex align-items-center mb-4">
                                                <a href="javascript:void(0)" class="ico-icon">
                                                    <i class="fa-solid fa-dollar-sign"></i>
                                                </a>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0)"><h4 class="heading mb-0">@convert($user->invest_bal)</h4></a>
                                                    <span>Total Investment</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p style="color: #3d00ce;" class="mb-0 fs-14 ">{{ $user->profit }}</p>
                                                    <span class="fs-12">Profit</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /column -->

                                <!-- column -->
                                <div class="col-xl-3 col-md-6 col-sm-6">
                                    <div class="card pull-up">
                                        <div class="card-body align-items-center flex-wrap">
                                            <div class="d-flex align-items-center mb-4">
                                                <a href="javascript:void(0)" class="ico-icon">
                                                    <i class="fa-solid fa-dollar-sign"></i>
                                                </a>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0)"><h4 class="heading mb-0">@convert($total_deposit)</h4></a>
                                                   <span>Total Deposits</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p style="color: #3d00ce" class="mb-0 fs-14">@convert($pending_deposit)</p>
                                                    <span class="fs-12">Pending</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <!-- column -->
                                <div class="col-xl-3 col-md-6 col-sm-6">
                                    <div class="card pull-up">
                                        <div class="card-body align-items-center flex-wrap">
                                            <div class="d-flex align-items-center mb-4">
                                                <a href="javascript:void(0)" class="ico-icon">
                                                    <i class="fa-solid fa-dollar-sign"></i>
                                                </a>
                                                <div class="ms-4">
                                                    <a href="javascript:void(0)"><h4 class="heading mb-0">@convert($total_withdraw)</h4></a>
                                                   <span>Total Withdrawal</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p style="color: #3d00ce" class="mb-0 fs-14">@convert($pending_withdraw)</p>
                                                    <span class="fs-12">Pending</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /column -->




                            </div>
                        </div>


                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="tradingview_e8053" class="tranding-chart"></div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>
<script>
    new ClipboardJS('.btn');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

@endsection
