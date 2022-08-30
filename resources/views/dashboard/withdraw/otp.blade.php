@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">

                    <div class="buysell-title text-center">
                        <h3 class="title">Withdrawal Pin [Payout]</h3>
                    </div><!-- .buysell-title -->
                    <br>
                    <div class="buysell-block">
                        <form action="{{ route('user.process_otp') }}" class="buysell-form" method="POST">
                            @csrf
                            @if(session()->has('success_message'))
                                <div class="alert alert-success">
                                    {{ session()->get('success_message') }}
                                </div>
                            @endif
                            @if(session()->has('declined'))
                                <div class="alert alert-danger">
                                    {{ session()->get('declined') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="buysell-field form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="buysell-amount">Enter Withdrawal Code</label>
                                </div>
                                <div class="form-control-group">
                                    <input type="hidden" value="{{ $withdrawal->id }}" name="withdrawal_id">
                                    <input type="text" name="otp_code" class="form-control form-control-number" id="buysell-amount" placeholder="Enter your withdrawal pin here...">

                                </div>
                            </div><!-- .buysell-field -->

                            <div class="buysell-field form-action">
                                <button type="submit" class="btn btn-lg btn-block btn-primary">Proceed</button>
                            </div><!-- .buysell-field -->

                        </form><!-- .buysell-form -->
                    </div><!-- .buysell-block -->
                </div><!-- .buysell -->
            </div>

        </div>
    </div>

@endsection
