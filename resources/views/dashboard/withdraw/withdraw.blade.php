@extends('dashboard.layout.app')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-xxl-4 col-md-10 offset-lg-4 ">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="heading mb-0">Withdrawal</h4>
                        </div>
                        <div class="card-body pt-2">
                            <div class="d-flex align-items-center justify-content-between my-3">
                                <span class="small text-muted">Avbl Balance</span>
                                <span class="">{{ auth()->user()->balance }} USD</span>
                            </div>
                            <form action="{{ route('user.proBTCAmount') }}" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Payment Method</span>
                                    <select name="payment_method_id" id="" class="form-control">
                                        @foreach($payment_m as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
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
            </div>
        </div>
    </div>



@endsection
