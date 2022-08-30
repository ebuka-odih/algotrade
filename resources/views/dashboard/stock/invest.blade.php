@extends('dashboard.layout.app')
@section('content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">


        <div class="nk-content-body">
            @if(auth()->user()->balance == 0)
            <div class="page-invest wide-xs m-auto" id="iv-step-container">
                <div class="nk-pps-apps">
                    <div class="nk-pps-result">
                        <em class="icon icon-circle icon-circle-xxl ni ni-wallet-saving bg-info"></em>

                        <h4 class="title">No funds in account!</h4>

                        <div class="nk-pps-text md">
                            <p class="caption-text">We regret that you have no funds in your account. Please make a deposit and try again once funds available.</p>
                            <p class="sub-text-sm">Deposit instantly using our available payment method.</p>
                        </div>

                        <div class="nk-pps-action">
                            <ul class="btn-group-vertical align-center gy-3">
                                <li><a href="{{ route('user.deposit') }}" class="btn btn-lg btn-mw btn-primary">Deposit Now</a></li>
                                <li><a href="{{ route('user.dashboard') }}" class="link link-primary">Go to Dashboard</a></li>
                            </ul>
                        </div>

                        <div class="nk-pps-notes text-center">
                            Please feel free to contact us if you face any problem.
                        </div>
                    </div>
                </div>

            </div>
            @else
                <div class="page-invest wide-xs m-auto" id="iv-step-container">
                    <div class="nk-pps-apps">
                        <div class="nk-pps-result">
                            <em class="icon icon-circle icon-circle-xxl ni ni-wallet-saving bg-info"></em>

                            <h4 class="title">Enter Amount Of Stock to Buy!</h4>
                            <p>Note: You can only buy the amount of stock related to your account balance</p>

                            <form action="{{ route('user.investStock') }}" method="POST">
                                @csrf
                                @if(session()->has('declined'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('declined') }}
                                    </div>
                                @endif
                                <input type="hidden" name="stock_id" value="{{ $stocks->id }}">
                                <div class="form-row">
                                    <div class="col-12">
                                        <input type="number" name="amount" class="form-control form-control-lg" placeholder="$">
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                   <div class="col-lg-12">
                                       <button class="btn btn-primary col-lg-12 " type="submit"><span class="text-center">Buy Stock</span></button>
                                   </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            @endif
        </div>

    </div>
</div>

@endsection
