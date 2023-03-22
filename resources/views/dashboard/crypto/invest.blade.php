@extends('dashboard.layout.app')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                @if(auth()->user()->balance == 0)
                    <div class="col-xxl-4 col-md-10 offset-lg-4 ">

                        <div class="card text-center">
                            <div class="card-header">
                                <h5 class="card-title">Insufficient Funds!</h5>

                            </div>
                            <div class="card-body">
                                <p class="caption-text">We regret that you have no funds in your account. Please make a deposit and try again once funds available.</p>
                                <p class="sub-text-sm">Deposit instantly using our available payment method.</p>
                                <a href="{{ route('user.deposit') }}" class="btn btn-primary">Deposit Now</a>
                            </div>
                            <div class="card-footer">
                                <p class="card-text text-dark"> Please feel free to contact us if you face any problem.</p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-xxl-4 col-md-10 offset-lg-4 ">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="heading mb-0">Purchase Cryptocurrency</h4>
                            </div>
                            <hr>
                            <h4 class="text-center "><span class="badge bg-success">{{ $crypto->name }}</span></h4>
                            <div class="card-body pt-2">
                                <div class="d-flex align-items-center justify-content-between my-3">
                                    <span class="small text-muted">Avbl Balance</span>
                                    <span class="">{{ auth()->user()->balance }} USD</span>
                                </div>
                                <form action="{{ route('user.investAsset') }}" method="POST">
                                    @csrf
                                    @if(session()->has('declined'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('declined') }}
                                        </div>
                                    @endif
                                    <input type="hidden" name="name" value="{{ $crypto->name }}">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Amount</span>
                                        <input type="text" class="form-control" name="amount">
                                        <span class="input-group-text">USD</span>
                                    </div>

                                    <div class="mt-3 d-flex justify-content-between">
                                        <button type="submit" style="background-color: #362465"  class="btn text-white py-2 text-uppercase">Proceed</button>
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
