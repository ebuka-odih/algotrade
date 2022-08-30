@extends('dashboard.layout.app')
@section('content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">


        <div class="nk-content-body">
            <div class="page-dw wide-xs m-auto" id="wd-step-container">
                <div class="nk-pps-apps">

                        <div class="page-invest wide-xs m-auto" id="iv-step-container">
                            <div class="nk-pps-apps">
                                <div class="nk-pps-result">
                                    <em class="icon icon-circle icon-circle-xxl ni ni-wallet-saving bg-info"></em>

                                    <h4 class="title">Enter amount to be withdrawn!</h4>
{{--                                    <p>Note: Select your payment method below</p>--}}

                                    <form action="{{ route('user.processWithdraw') }}" method="POST">
                                        @csrf
                                        @if(session()->has('declined'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('declined') }}
                                            </div>
                                        @endif

{{--                                        @foreach($w_method as $item)--}}
{{--                                            {{ $item }}--}}
{{--                                        @endforeach--}}

                                        <div class="form-control-group">
                                            <div class="form-text-hint form-text-hint-lg">
                                                <span class="currency">USD</span>
                                            </div>
                                            <input type="text" class="form-control form-control-lg form-control-number" id="deposit-amount" name="amount" placeholder="0.00">
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="col-12">
                                                <label for="">Payment Method</label>
                                                <select name="withdraw_method_id" class="form-control form-control-lg" id="">
                                                    @foreach($w_method as $item)
                                                    <option value="{{ $item->id }}">{{ $item->transType() }} ({{ $item->acctLabel() }})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="col-lg-12">
                                                <button class="btn btn-primary col-lg-12 " type="submit"><span class="text-center">Withdraw</span></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
