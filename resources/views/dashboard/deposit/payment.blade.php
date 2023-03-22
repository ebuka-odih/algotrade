@extends('dashboard.layout.app')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.btn2');
    </script>


    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-xxl-4 col-md-10 offset-lg-4 ">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="heading mb-0">Make Payment</h4>
                        </div>
                        <div class="card-body pt-2">
                            <div class="d-flex align-items-center justify-content-between my-3">
                                <p class="caption-text">Your order <strong class="text-dark">{{ $deposit->transId() }}</strong> has been placed successfully. To complete, please send the exact amount of <strong class="text-dark">{{ $deposit->amount }} USD in {{ $deposit->crypto_wallet->name }} rate</strong> to the address below.</p>

                            </div>
                            <hr>
                            <div class="table-responsive mb-3">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Amount:</th>
                                        <td>@convert($deposit->amount) USD</td>
                                    </tr>
                                    <tr>
                                        <th>Payment Method:</th>
                                        <td>{{ $deposit->crypto_wallet->name }}</td>
                                    </tr>
                                </table>
                            </div>

                            <form >
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <div class="visible-print text-center">
                                        {!! QrCode::size(100)->generate($deposit->crypto_wallet->value); !!}
                                        <p>Scan me to copy payment wallet.</p>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Wallet</span>
                                    <input type="text" class="form-control" id="foo" value="{{ $deposit->crypto_wallet->value }}">
                                    <span class="input-group-text"><a href="#" class="btn2 btn-sm" data-clipboard-target="#foo">Copy</a></span>
                                </div>

                                <div class="mt-3 d-flex justify-content-between">
                                    <button type="button" style="background-color: #362465"  class="btn text-white py-2 text-uppercase" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Confirm Payment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form class="form" action="{{ route('user.paymentReference') }}" method="POST" id="crypto-pay-reference">
                    @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <p>If you already paid, please provide us your payment reference to speed up verification process.</p>


                    <input type="hidden" name="deposit_id" value="{{ $deposit->id }}">
                    <div class="form-group">
                        <div class="form-label">Payment Reference <span class="text-danger">*</span></div>
                        <div class="form-control-wrap">
                            <input name="trans_code" type="text" class="form-control " value="" placeholder="Enter your reference id / hash">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
                </form>
            </div>
        </div>
    </div>


@endsection
