@extends('dashboard.layout.app')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-xxl-4 col-md-10 offset-lg-4 ">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="heading mb-0">Auto Trader</h4>

                        </div>


                        <div class="card-body pt-2">
                            <p>
                                Enter the amount which the system will use to trade
                            </p>
                            <hr>
                            <div class="d-flex align-items-center justify-content-between my-3">
                                <span class="small text-muted">Avbl Balance</span>
                                <span class="">{{ auth()->user()->balance }} USD</span>
                            </div>
                            <form action="" method="POST">
                                @csrf

                                <div class="input-group mb-3">
                                    <span class="input-group-text">Amount</span>
                                    <input type="text" class="form-control" name="amount">
                                    <span class="input-group-text">USD</span>
                                </div>
                                <small>Min: $100</small>

                                <div class="mt-3 d-flex justify-content-between">
                                    <button type="submit" style="background-color: #362465"  class="btn text-white py-2 text-uppercase">Proceed</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
