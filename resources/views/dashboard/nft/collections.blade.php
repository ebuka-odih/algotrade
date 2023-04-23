@extends('dashboard.layout.app')
@section('content')

    <div class="content-body" style="min-height: 996px;">
        <!-- row -->
        <div class="container-fluid">


            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">NFT Collections</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example4_wrapper" class="dataTables_wrapper no-footer">

                                <table id="example4" class="display dataTable no-footer" style="min-width: 845px" role="grid" aria-describedby="example4_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 185.297px;">Date</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Roll No: activate to sort column descending" style="width: 112.617px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Invoice number: activate to sort column ascending" style="width: 202.852px;">Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Payment Type : activate to sort column ascending" style="width: 191.18px;">Item </th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Status : activate to sort column ascending" style="width: 108.891px;">Status </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($nfts as $item)
                                        <tr role="row" class="odd">
                                            <td>{{ date('Y, M d', strtotime($item->created_at)) }}</td>
                                            <td class="sorting_1">{{ optional($item->list_nft)->name }}</td>
                                            <td>
                                                <strong>{{ optional($item->list_nft)->price }}ETH</strong>
                                            </td>
                                            <td ><img height="100" width="100" src="{{ asset('nfts/'.$item->list_nft->image) }}" alt=""></td>
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
