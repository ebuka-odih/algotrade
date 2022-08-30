
@extends('dashboard.layout.app')
@section('content')


    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">


            <div class="nk-content-body">
                <div class="page-dw wide-xs m-auto" id="wd-step-container">
                    <div class="nk-pps-apps">
                        <div class="nk-pps-result">
                            <em class="icon icon-circle icon-circle-xxl ni ni-wallet-saving bg-info"></em>

                            <h4 class="title">You are almost ready to withdraw!</h4>

                            <div class="nk-pps-text sm">
                                <p class="caption-text">You do not have any account set up for withdrawal.</p>
                            </div>

                            <div class="nk-pps-action">
                                <ul class="btn-group-vertical align-center gy-3">
                                    <li><a href="{{ route('user.accounts') }}" class="btn btn-lg btn-mw btn-primary">Setup Withdrawal Method</a></li>
                                </ul>
                            </div>

                            <div class="nk-pps-notes text-center">
                                Please feel free to contact us if you face any problem.
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
