@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">


            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-sub"><span>History</span></div>
                    <div class="nk-block-between-sm g-4">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Transactions</h2>
                            <div class="nk-block-des">
                                <p>List of transactions in your account.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.transactions') }}">History
                            <span class="badge badge-primary">{{ $fund_count }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.deposits') }}">Deposit
                            <span class="badge badge-primary">{{ $dep_count }}</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('user.withdrawal') }}">Withdraw
                            <span class="badge badge-primary">{{ $wit_count }}</span></a>
                    </li>
                </ul>
                <div class="nk-block nk-block-xs">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h6 class="nk-block-title">All Deposits</h6>
                            </div>

                        </div>

                    </div>
                    <div class="nk-odr-list is-stretch card card-bordered ">
                        @forelse($withdrawal as $item)
                            <div class="nk-odr-item ">
                                <div class="nk-odr-col">
                                    <div class="nk-odr-info">
                                        <div class="nk-odr-badge">
                                            <span class="nk-odr-icon bg-success-dim text-success icon ni ni-arrow-down-left"></span><span class="nk-odr-icon text-secondary icon ni ni-building-fill"></span>
                                        </div>
                                        <div class="nk-odr-data">
                                            <div class="nk-odr-label ellipsis">{{ $item->type }}</div>
                                            <div class="nk-odr-meta">
                                                <span class="date">{{ date('d M Y', strtotime($item->created_at)) }}</span>
                                                <span class="status dot-join">
                                            {!! $item->status !!}
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-odr-col nk-odr-col-amount">
                                    <div class="nk-odr-amount">
                                        <div class="number-md text-s text-success">
                                            + @convert($item->amount)
                                            <span class="currency">USD</span>
                                        </div>
                                        <div class="number-sm">@convert($item->amount) <span class="currency">USD</span></div>
                                    </div>
                                </div>
                                <div class="nk-odr-col nk-odr-col-action">
                                    <div class="nk-odr-action">
                                        <a class="tnx-details" href="javascript:void(0)" data-tnx="YlNOVkROdXd2MjRrR1lPcW51aE8ydz09"><em class="icon ni ni-forward-ios"></em></a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="nk-odr-list is-stretch card card-bordered is-compact">
                                <div class="nk-odr-item">
                                    <div class="nk-odr-col">No transactions found!</div>
                                </div>
                            </div>

                        @endforelse


                    </div>
                    <div class="mt-4">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
