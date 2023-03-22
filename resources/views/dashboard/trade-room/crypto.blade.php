@extends('dashboard.layout.app')
@section('content')

<div class="content-body" style="min-height: 996px;">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-8">
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
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h4 class="heading mb-0">Future Trade</h4>
                    </div>
                    <div class="card-body pt-2">
                        <div class="d-flex align-items-center justify-content-between my-3">
                            <span class="small text-muted">Avbl Balance</span>
                            <span class="">{{ auth()->user()->balance }} USD</span>
                        </div>
                        <form>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Price</span>
                                <input type="text" class="form-control">
                                <span class="input-group-text">USDT</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Size</span>
                                <input type="text" class="form-control">
                                <button class="btn btn-primary btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">USDT </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">USDT</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">BTC</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mb-3 mt-4">
                                <label class="form-label">TP/SL</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Take Profit">
                                    <button class="btn btn-primary btn-primary btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mark</button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">Last</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Mark</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Stop Loss">
                                    <button class="btn btn-primary btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mark</button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">Last</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Mark</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Stop Price</span>
                                <input type="text" class="form-control">
                                <button class="btn btn-primary btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mark</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">Limit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Mark</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="d-flex">
                                    <div class="">Cost</div>
                                    <div class="text-muted px-1"> 0.00 USDT</div>
                                </div>
                                <div class="d-flex">
                                    <div class="">Max</div>
                                    <div class="text-muted px-1"> 6.00 USDT </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-between">
                                <a href="javascript:void(0)" class="btn btn-success py-2 text-uppercase">BUY</a>
                                <a href="javascript:void(0)" class="btn btn-danger py-2 text-uppercase">Sell</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h4 class="heading mb-0">Order Book</h4>
                    </div>
                    <div class="card-body pt-2">
                        <table class="table shadow-hover orderbookTable">
                            <thead>
                            <tr>
                                <th>Price(USDT)</th>
                                <th>Size(USDT)</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="text-success">19972.43</span>
                                </td>
                                <td>0.0488</td>
                                <td>6.8312</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-danger">20972.43</span>
                                </td>
                                <td>0.0588</td>
                                <td>5.8312</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-success">19972.43</span>
                                </td>
                                <td>0.0488</td>
                                <td>6.8312</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-success">19850.20</span>
                                </td>
                                <td>0.0388</td>
                                <td>7.8312</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-danger">20972.43</span>
                                </td>
                                <td>0.0588</td>
                                <td>5.8312</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-danger">20972.43</span>
                                </td>
                                <td>0.0588</td>
                                <td>5.8312</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-success">19972.43</span>
                                </td>
                                <td>0.0488</td>
                                <td>6.8312</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-success">19972.43</span>
                                </td>
                                <td>0.0488</td>
                                <td>6.8312</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-danger">20972.43</span>
                                </td>
                                <td>0.0588</td>
                                <td>5.8312</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-danger">20972.43</span>
                                </td>
                                <td>0.0588</td>
                                <td>5.8312</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header border-0 pb-2 flex-wrap">
                        <h4 class="heading">Trade Status</h4>
                        <nav>
                            <div class="order nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-order-tab" data-bs-toggle="tab" data-bs-target="#nav-order" type="button" role="tab" aria-selected="true">Order</button>
                                <button class="nav-link" id="nav-histroy-tab" data-bs-toggle="tab" data-bs-target="#nav-history" type="button" role="tab" aria-selected="false" tabindex="-1">Order History</button>
                                <button class="nav-link" id="nav-trade-tab" data-bs-toggle="tab" data-bs-target="#nav-trade" type="button" role="tab" aria-selected="false" tabindex="-1">Trade Histroy</button>
                            </div>
                        </nav>
                    </div>
                    <div class="card-body pt-0">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">
                                <div class="table-responsive dataTabletrade">
                                    <div id="example_wrapper" class="dataTables_wrapper no-footer">
                                        <div class="dataTables_length" id="example_length">
                                            <label>Show <select name="example_length" aria-controls="example" class="">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries </label>
                                        </div>
                                        <div id="example_filter" class="dataTables_filter">
                                            <label>Search: <input type="search" class="" placeholder="" aria-controls="example">
                                            </label>
                                        </div>
                                        <table id="example" class="table display dataTable no-footer" style="min-width:845px" role="grid" aria-describedby="example_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 139.82px;">Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Trade: activate to sort column ascending" style="width: 218.406px;">Trade</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Side: activate to sort column ascending" style="width: 114.297px;">Side</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 74.6094px;">Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 99.7812px;">Amount</th>
                                                <th class="text-end sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 87.2109px;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="odd" role="row">
                                                <td class="sorting_1">Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td class="text-end">$162,700</td>
                                            </tr>
                                            <tr class="even" role="row">
                                                <td class="sorting_1">Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td class="text-end">$86,000</td>
                                            </tr>
                                            <tr class="odd" role="row">
                                                <td class="sorting_1">Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td class="text-end">$372,000</td>
                                            </tr>
                                            <tr class="even" role="row">
                                                <td class="sorting_1">Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td class="text-end">$433,060</td>
                                            </tr>
                                            <tr class="odd" role="row">
                                                <td class="sorting_1">Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td class="text-end">$170,750</td>
                                            </tr>
                                            <tr class="even" role="row">
                                                <td class="sorting_1">Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td class="text-end">$320,800</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div>
                                        <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                            <a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="0" id="example_previous">
                                                <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                                            </a>
                                            <span>
                        <a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a>
                      </span>
                                            <a class="paginate_button next disabled" aria-controls="example" data-dt-idx="2" tabindex="0" id="example_next">
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="#nav-histroy-tab">
                                <div class="table-responsive dataTabletrade">
                                    <div id="example7_wrapper" class="dataTables_wrapper no-footer">
                                        <table id="example7" class="table display dataTable no-footer" style="min-width:845px" role="grid" aria-describedby="example7_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example7" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 0px;">Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="example7" rowspan="1" colspan="1" aria-label="Trade: activate to sort column ascending" style="width: 0px;">Trade</th>
                                                <th class="sorting" tabindex="0" aria-controls="example7" rowspan="1" colspan="1" aria-label="Side: activate to sort column ascending" style="width: 0px;">Side</th>
                                                <th class="sorting" tabindex="0" aria-controls="example7" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 0px;">Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="example7" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 0px;">Amount</th>
                                                <th class="text-end sorting" tabindex="0" aria-controls="example7" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 0px;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td class="text-end">$162,700</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td class="text-end">$86,000</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td class="text-end">$372,000</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td class="text-end">$433,060</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td class="text-end">$170,750</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td class="text-end">$320,800</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="dataTables_info" id="example7_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div>
                                        <div class="dataTables_paginate paging_simple_numbers" id="example7_paginate">
                                            <a class="paginate_button previous disabled" aria-controls="example7" data-dt-idx="0" tabindex="0" id="example7_previous">
                                                <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                                            </a>
                                            <span>
                        <a class="paginate_button current" aria-controls="example7" data-dt-idx="1" tabindex="0">1</a>
                      </span>
                                            <a class="paginate_button next disabled" aria-controls="example7" data-dt-idx="2" tabindex="0" id="example7_next">
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-trade" role="tabpanel" aria-labelledby="nav-trade-tab">
                                <div class="table-responsive dataTabletrade">
                                    <div id="example3_wrapper" class="dataTables_wrapper no-footer">
                                        <div class="dataTables_length" id="example3_length">
                                            <label>Show <select name="example3_length" aria-controls="example3" class="">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries </label>
                                        </div>
                                        <div id="example3_filter" class="dataTables_filter">
                                            <label>Search: <input type="search" class="" placeholder="" aria-controls="example3">
                                            </label>
                                        </div>
                                        <table id="example3" class="table display dataTable no-footer" style="min-width:845px" role="grid" aria-describedby="example3_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 0px;">Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Trade: activate to sort column ascending" style="width: 0px;">Trade</th>
                                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Side: activate to sort column ascending" style="width: 0px;">Side</th>
                                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 0px;">Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 0px;">Amount</th>
                                                <th class="text-end sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 0px;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td class="text-end">$162,700</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td class="text-end">$86,000</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td class="text-end">$372,000</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td class="text-end">$433,060</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td class="text-end">$170,750</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td class="text-end">$320,800</td>
                                            </tr>
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
