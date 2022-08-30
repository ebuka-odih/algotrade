@extends('dashboard.layout.app')
@section('content')


    <div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">


        <div class="nk-content-body">
            <div class="nk-block-head text-center">
                <h2 class="nk-block-title fw-normal">Crypto Assets</h2>
                <div class="nk-block-des w-max-550px m-auto">
                    <p class="lead">Here are several Stocks. You can invest daily, weekly or monthly and get higher returns in your investment.</p>
                    <p><strong>Choose your favourite stocks and start earning now.</strong></p>
                </div>
            </div>
                <div class="nk-ivp-apps">
                     <div class="nk-ivp-plans row g-gs scheme-container justify-center">
                        @foreach($stocks as $item)
                        <div class="col-md-6 col-lg-4">
                            <div class="nk-ivp-card card card-bordered card-full">
                                <div class="card-inner-group">
                                    <div class="card-inner">
                                        <div class="nk-ivp-title card-title">
                                            <h4 class="title">{{ $item->name }}</h4>
                                            <p class="sub-text">
                                                {{ $item->description }}
                                            </p>

                                    </div>
                                    <div class="card-inner">
                                        <div class="card-text">

                                            <div class="nk-ivp-action">
                                                <a class="btn btn-primary" href="{{ route('user.invest.crypto', $item->id) }}"><span>Invest Now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                         @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
