@extends('dashboard.layout.app')
@section('content')

<div class="content-body" style="min-height: 996px;">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div id="tradingview_85dc0" class="">
                            <div id="tradingview_43054-wrapper" style="position: relative;box-sizing: content-box;width: 100%;height: 516px;margin: 0 auto !important;padding: 0 !important;font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif;">
                                <div style="width: 100%;height: 516px;background: transparent;padding: 0 !important;">
                                    <iframe id="tradingview_43054" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_43054&amp;symbol=BITSTAMP%3ABTCUSD&amp;interval=D&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=Light&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;showpopupbutton=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;showpopupbutton=1&amp;locale=en&amp;utm_source=&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=BITSTAMP%3ABTCUSD#%7B%22page-uri%22%3A%22__NHTTP__%22%7D" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h4 class="heading mb-0">Crypto Future Trade</h4>
                    </div>
                    <div class="card-body pt-2">
                        <div class="d-flex align-items-center justify-content-between my-3">
                            <span class="small text-muted">Avbl Balance</span>
                            <span class="">@convert(auth()->user()->balance) USD</span>
                        </div>
                        <form action="{{ route('user.placeTrade') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session()->get('success') }}</strong>
                                </div>
                            @endif
                            <div class="input-group mb-3">
                                <span class="input-group-text">Pair</span>
                                <select name="trading_pair_id" id="" class="form-control" required>
                                    <option selected>Select Pair</option>
                                    @foreach($pairs as $item)
                                        <option value="{{ $item->id }}">{{ $item->pair }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">Price</span>
                                <input type="text" name="price" class="form-control">
                                <span class="input-group-text">USDT</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Size</span>
                                <input type="text" name="size" class="form-control">
                                <span class="input-group-text">USDT</span>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">Leverage</span>
                                <select class="form-control" name="leverage">
                                    <option value="5x">5x</option>
                                    <option value="10x">10x</option>
                                    <option value="20x">20x</option>
                                    <option value="30x">30x</option>
                                    <option value="40x">40x</option>
                                    <option value="50x">50x</option>
                                    <option value="75x">75x</option>
                                    <option value="100x">100x</option>
                                    <option value="125x">125x</option>
                                </select>
                            </div>
                            <div class="mb-3 mt-4">
                                <label class="form-label">TP/SL</label>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">TP</span>
                                            <input type="text" name="tp" class="form-control" placeholder="Take Profit">
                                        </div>
                                    </div>
                                   <div class="col-6">
                                       <div class="input-group mb-3">
                                           <span class="input-group-text">SL</span>
                                           <input type="text" name="sl" class="form-control" placeholder="Stop Loss">
                                       </div>
                                   </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Execution Time</span>
                                <select class="form-control" name="execution_time">
                                    <option value="60">1 Minutes</option>
                                    <option value="180">3 Minutes</option>
                                    <option value="300">5 Minutes</option>
                                    <option value="600">10 Minutes</option>
                                    <option value="1800">30 Minutes</option>
                                    <option value="3600">1 Hour</option>
                                    <option value="604800">1 Week</option>
                                    <option value="2628000">1 Month</option>
                                </select>
                            </div>

                            <div class="mt-3 d-flex justify-content-between">
                                <button type="submit" name="trade_type" value="buy" class="btn btn-success py-2 text-uppercase">BUY</button>
                                <button type="submit" name="trade_type" value="sell" class="btn btn-danger py-2 text-uppercase">Sell</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0 pb-2 flex-wrap">
                        <h4 class="heading">Trade History</h4>
                        <nav>
                            <div class="order nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-order-tab" data-bs-toggle="tab" data-bs-target="#nav-order" type="button" role="tab" aria-selected="true">Order</button>
                                <button class="nav-link" id="nav-trade-tab" data-bs-toggle="tab" data-bs-target="#nav-trade" type="button" role="tab" aria-selected="false" tabindex="-1">Trade Histroy</button>
                            </div>
                        </nav>
                    </div>
                    <div class="card-body pt-0">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">
                                <div class="table-responsive dataTabletrade">
                                    <div id="example_wrapper" class="dataTables_wrapper no-footer">

                                        <table id="example" class="table display dataTable no-footer" style="min-width:845px" role="grid" aria-describedby="example_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 139.82px;">Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Trade: activate to sort column ascending" style="width: 218.406px;">Symbol</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Side: activate to sort column ascending" style="width: 114.297px;">Size</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 74.6094px;">Entry Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 99.7812px;">Leverage</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 99.7812px;">Timeframe</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 99.7812px;">TP/SL</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 99.7812px;">Status</th>
                                                <th class="text-end sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 87.2109px;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($trades as $item)
                                            <tr class="odd" role="row">
                                                <td class="sorting_1">{{ $item->created_at }}</td>
                                                <td>{{ $item->trading_pair->pair }}</td>
                                                <td>$@convert($item->amount)</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->leverage }}</td>
                                                <td>{{ $item->execution_time }} Secs</td>
                                                <td>{{ $item->tp ? : "-" }}/ {{ $item->sl ? : "-" }}</td>
                                                <td class="pull-right">{!! $item->status() !!}</td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-trade" role="tabpanel" aria-labelledby="nav-trade-tab">
                                <div class="table-responsive dataTabletrade">
                                    <div id="example3_wrapper" class="dataTables_wrapper no-footer">

                                        <table id="example3" class="table display dataTable no-footer" style="min-width:845px" role="grid" aria-describedby="example3_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 139.82px;">Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Trade: activate to sort column ascending" style="width: 218.406px;">Symbol</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Side: activate to sort column ascending" style="width: 114.297px;">Size</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 74.6094px;">Entry Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 99.7812px;">Leverage</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 99.7812px;">Timeframe</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 99.7812px;">TP/SL</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 99.7812px;">Status</th>
                                                <th class="text-end sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 87.2109px;">Profit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($closed_trades as $item)
                                                <tr class="odd" role="row">
                                                    <td class="sorting_1">{{ $item->created_at }}</td>
                                                    <td>{{ $item->trading_pair->pair }}</td>
                                                    <td>$@convert($item->amount)</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td>{{ $item->leverage }}</td>
                                                    <td>{{ $item->execution_time }} Secs</td>
                                                    <td>{{ $item->tp ? : "-" }}/ {{ $item->sl ? : "-" }}</td>
                                                    <td class="pull-right">{!! $item->status() !!}</td>
                                                    <td>{{ $item->profit }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="dataTables_info" id="example3_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div>
                                        <div class="dataTables_paginate paging_simple_numbers" id="example3_paginate">
                                            <a class="paginate_button previous disabled" aria-controls="example3" data-dt-idx="0" tabindex="0" id="example3_previous">
                                                <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                                            </a>
                                            <span>
                        <a class="paginate_button current" aria-controls="example3" data-dt-idx="1" tabindex="0">1</a>
                      </span>
                                            <a class="paginate_button next disabled" aria-controls="example3" data-dt-idx="2" tabindex="0" id="example3_next">
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
