@extends('dashboard.layout.app')
@section('content')


    <div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">


        <div class="nk-pps-apps">
            <div class="nk-pps-result">
                <em class="icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                <h4 class="title">Opps, payment cancelled!</h4>
                <div class="nk-pps-text md">
                    <p class="caption-text">You have cancelled your payment via Bank Transfer. Don't worry, you can make payment any time to deposit your account.</p>
                    <p class="sub-text">Transaction ID {{ $deposit->transId() }}</p>
                </div>
                <div class="nk-pps-action">
                    <ul class="btn-group-vertical align-center gy-3">
                        <li><a href="{{ route('user.deposit') }}" class="btn btn-lg btn-mw btn-primary">Deposit More</a></li>
                        <li><a href="{{ route('user.dashboard') }}" class="link link-primary">Go back to Dashboard</a></li>
                    </ul>
                </div>
                <div class="nk-pps-notes text-center">Please do not hesitate to <a href="{{ route('contact') }}">contact us</a> if you have any questions.</div>
            </div>
        </div>

    </div>
</div>

@endsection
