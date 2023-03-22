@extends('dashboard.layout.app')
@section('content')

    <div class="content-body" style="min-height: 996px;">
        <!-- row -->
        <div class="container-fluid">

            <div class="col-xl-12">
                <div class="card Infra">
                    <div class="card-header border-0">
                        <div class="site-filters clearfix center m-b40">
                            <ul class="filters" data-bs-toggle="buttons">
                                <li class="btn active">
                                    <a href="{{ route('user.deposits') }}" class="site-button">Deposits</a>
                                </li>
                                <li class="btn">
                                    <a href="{{ route('user.withdrawal') }}" class="site-button">Withdrawals</a> </li>
                                <li data-filter=".gaming" class="btn">
                                    <a href="javascript:void(0);" class="site-button">Funding</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Deposit History</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example4_wrapper" class="dataTables_wrapper no-footer">

                                <table id="example4" class="display dataTable no-footer" style="min-width: 845px" role="grid" aria-describedby="example4_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Roll No: activate to sort column descending" style="width: 112.617px;">TXID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 185.297px;">Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Invoice number: activate to sort column ascending" style="width: 202.852px;">Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Payment Type : activate to sort column ascending" style="width: 191.18px;">Payment Method </th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Status : activate to sort column ascending" style="width: 108.891px;">Status </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($deposits as $item)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $item->transId() }}</td>
                                        <td>{{ date('Y, M d', strtotime($item->created_at)) }}</td>
                                        <td>
                                            <strong>${{ $item->amount }}</strong>
                                        </td>
                                        <td class="text-capitalize">{{ $item->crypto_wallet->name }}</td>
                                        <td>{!! $item->status() !!}</td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
