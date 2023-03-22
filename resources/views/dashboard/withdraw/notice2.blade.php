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

                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">You are almost ready to withdraw!</h5>

                        </div>
                        <div class="card-body">

                            <p class="card-text">You do not have any account set up for withdrawal.</p>
                            <a href="{{ route('user.accounts') }}" class="btn btn-primary">Setup Withdrawal Method</a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text text-dark"> Please feel free to contact us if you face any problem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
