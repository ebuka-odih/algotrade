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
                        <a class="nav-link" href="https://www.beckstocker.com/public/transactions">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.beckstocker.com/public/transactions?type=deposit">Deposit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.beckstocker.com/public/transactions?type=withdraw">Withdraw</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://www.beckstocker.com/public/transactions?view=scheduled">
                            Scheduled <span class="badge badge-primary">4</span>
                        </a>
                    </li>
                </ul>
                <div class="nk-block nk-block-xs">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h6 class="nk-block-title">All Transaction</h6>
                            </div>
                            <ul class="nk-block-tools gx-2">
                                <li>
                                    <a href="#" class="search-toggle toggle-search btn btn-icon btn-trigger" data-target="search"><em class="icon ni ni-search"></em></a>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                            <div class="dot dot-primary"></div>
                                            <em class="icon ni ni-filter-alt"></em>
                                        </a>

                                        <div class="filter-wg dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                            <div class="dropdown-head">
                                                <span class="sub-title dropdown-title">Filter Transaction</span>
                                            </div>
                                            <form action="https://www.beckstocker.com/public/transactions" method="GET">
                                                <input type="hidden" name="filter" value="true">
                                                <div class="dropdown-body dropdown-body-rg">
                                                    <div class="row gx-6 gy-3">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="overline-title overline-title-alt">Type</label>
                                                                <select name="type" class="form-select form-select-sm select2-hidden-accessible" tabindex="-1" aria-hidden="true" data-select2-id="13">
                                                                    <option value="any" data-select2-id="15">Any Type</option>
                                                                    <option value="bonus">Bonus</option>
                                                                    <option value="charge">Charge</option>
                                                                    <option value="deposit">Deposit</option>
                                                                    <option value="withdraw">Withdraw</option>
                                                                    <option value="investment">Investment</option>
                                                                    <option value="referral">Referral</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="14" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-type-q3-container"><span class="select2-selection__rendered" id="select2-type-q3-container" role="textbox" aria-readonly="true" title="Any Type">Any Type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="overline-title overline-title-alt">Status</label>
                                                                <select name="status" class="form-select form-select-sm select2-hidden-accessible" tabindex="-1" aria-hidden="true" data-select2-id="19">
                                                                    <option value="any" data-select2-id="21">Any Status</option>
                                                                    <option value="cancelled">Cancelled</option>
                                                                    <option value="failed">Failed</option>
                                                                    <option value="completed">Completed</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="20" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-27-container"><span class="select2-selection__rendered" id="select2-status-27-container" role="textbox" aria-readonly="true" title="Any Status">Any Status</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="overline-title overline-title-alt">From</label>
                                                                <input class="form-control date-picker" name="date[from]" type="text" value="">
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="overline-title overline-title-alt">To</label>
                                                                <input class="form-control date-picker" name="date[to]" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-foot between">
                                                    <button type="submit" class="btn btn-secondary">Filter</button>
                                                    <a href="https://www.beckstocker.com/public/transactions" class="clickable">Reset Filter</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-setting"></em></a>
                                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                            <ul class="link-check">
                                                <li><span>Show</span></li>
                                                <li class="update-meta active">
                                                    <a href="#" data-value="10" data-meta="perpage" data-type="tnx">10</a>
                                                </li>
                                                <li class="update-meta">
                                                    <a href="#" data-value="20" data-meta="perpage" data-type="tnx">20</a>
                                                </li>
                                                <li class="update-meta">
                                                    <a href="#" data-value="50" data-meta="perpage" data-type="tnx">50</a>
                                                </li>
                                            </ul>
                                            <ul class="link-check">
                                                <li><span>Density</span></li>
                                                <li class="update-meta active">
                                                    <a href="#" data-value="regular" data-meta="display" data-type="tnx">Regular</a>
                                                </li>
                                                <li class="update-meta">
                                                    <a href="#" data-value="compact" data-meta="display" data-type="tnx">Compact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <form action="https://www.beckstocker.com/public/transactions" method="GET">
                            <div class="search-wrap search-wrap-extend bg-lighter" data-search="search">
                                <div class="search-content">
                                    <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                    <input type="text" name="query" class="form-control border-transparent form-focus-none" placeholder="Search by transaction id">
                                    <button class="search-submit btn btn-icon mr-1"><em class="icon ni ni-search"></em></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="nk-odr-list is-stretch card card-bordered ">
                        <div class="nk-odr-item ">
                            <div class="nk-odr-col">
                                <div class="nk-odr-info">
                                    <div class="nk-odr-badge">
                                        <span class="nk-odr-icon bg-success-dim text-success icon ni ni-arrow-down-left"></span><span class="nk-odr-icon text-secondary icon ni ni-building-fill"></span>
                                    </div>
                                    <div class="nk-odr-data">
                                        <div class="nk-odr-label ellipsis">Deposit via Bank Transfer</div>
                                        <div class="nk-odr-meta">
                                            <span class="date">01 Jun, 2022</span>
                                            <span class="status dot-join">
                        Pending
                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-odr-col nk-odr-col-amount">
                                <div class="nk-odr-amount">
                                    <div class="number-md text-s text-success">
                                        + 300.00
                                        <span class="currency">USD</span>
                                    </div>
                                    <div class="number-sm">300.00 <span class="currency">USD</span></div>
                                </div>
                            </div>
                            <div class="nk-odr-col nk-odr-col-action">
                                <div class="nk-odr-action">
                                    <a class="tnx-details" href="javascript:void(0)" data-tnx="YlNOVkROdXd2MjRrR1lPcW51aE8ydz09"><em class="icon ni ni-forward-ios"></em></a>
                                </div>
                            </div>
                        </div>
                        <div class="nk-odr-item ">
                            <div class="nk-odr-col">
                                <div class="nk-odr-info">
                                    <div class="nk-odr-badge">
                                        <span class="nk-odr-icon bg-success-dim text-success icon ni ni-arrow-down-left"></span><span class="nk-odr-icon text-secondary icon ni ni-wallet-fill"></span>
                                    </div>
                                    <div class="nk-odr-data">
                                        <div class="nk-odr-label ellipsis">Deposit via Crypto Payment (Bitcoin)</div>
                                        <div class="nk-odr-meta">
                                            <span class="date">06 Jun, 2022</span>
                                            <span class="status dot-join">
                        Pending
                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-odr-col nk-odr-col-amount">
                                <div class="nk-odr-amount">
                                    <div class="number-md text-s text-success">
                                        + 3,225.81
                                        <span class="currency">USD</span>
                                    </div>
                                    <div class="number-sm">0.100000 <span class="currency">BTC</span></div>
                                </div>
                            </div>
                            <div class="nk-odr-col nk-odr-col-action">
                                <div class="nk-odr-action">
                                    <a class="tnx-details" href="javascript:void(0)" data-tnx="VnJPOFJCVlRmekw3aU9UdlFKUXVlUT09"><em class="icon ni ni-forward-ios"></em></a>
                                </div>
                            </div>
                        </div>
                        <div class="nk-odr-item ">
                            <div class="nk-odr-col">
                                <div class="nk-odr-info">
                                    <div class="nk-odr-badge">
                                        <span class="nk-odr-icon bg-success-dim text-success icon ni ni-arrow-down-left"></span><span class="nk-odr-icon text-secondary icon ni ni-building-fill"></span>
                                    </div>
                                    <div class="nk-odr-data">
                                        <div class="nk-odr-label ellipsis">Deposit via Bank Transfer</div>
                                        <div class="nk-odr-meta">
                                            <span class="date">11 Jun, 2022</span>
                                            <span class="status dot-join">
                        Pending
                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-odr-col nk-odr-col-amount">
                                <div class="nk-odr-amount">
                                    <div class="number-md text-s text-success">
                                        + 300.00
                                        <span class="currency">USD</span>
                                    </div>
                                    <div class="number-sm">300.00 <span class="currency">USD</span></div>
                                </div>
                            </div>
                            <div class="nk-odr-col nk-odr-col-action">
                                <div class="nk-odr-action">
                                    <a class="tnx-details" href="javascript:void(0)" data-tnx="cmZrMkhQdm1pVWNGdTJsOCtOa3Zidz09"><em class="icon ni ni-forward-ios"></em></a>
                                </div>
                            </div>
                        </div>
                        <div class="nk-odr-item ">
                            <div class="nk-odr-col">
                                <div class="nk-odr-info">
                                    <div class="nk-odr-badge">
                                        <span class="nk-odr-icon bg-success-dim text-success icon ni ni-arrow-down-left"></span><span class="nk-odr-icon text-secondary icon ni ni-wallet-fill"></span>
                                    </div>
                                    <div class="nk-odr-data">
                                        <div class="nk-odr-label ellipsis">Deposit via Crypto Payment (Bitcoin)</div>
                                        <div class="nk-odr-meta">
                                            <span class="date">11 Jun, 2022</span>
                                            <span class="status dot-join">
                        Pending
                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-odr-col nk-odr-col-amount">
                                <div class="nk-odr-amount">
                                    <div class="number-md text-s text-success">
                                        + 3,225.81
                                        <span class="currency">USD</span>
                                    </div>
                                    <div class="number-sm">0.100000 <span class="currency">BTC</span></div>
                                </div>
                            </div>
                            <div class="nk-odr-col nk-odr-col-action">
                                <div class="nk-odr-action">
                                    <a class="tnx-details" href="javascript:void(0)" data-tnx="SjBwV0pwOTAzNFJQWlhWTzhrS0lSdz09"><em class="icon ni ni-forward-ios"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
