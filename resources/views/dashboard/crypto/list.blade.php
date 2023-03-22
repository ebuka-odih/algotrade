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
                                <li class="btn">
                                    <a href="{{ route('user.deposits') }}" class="site-button">Stocks</a>
                                </li>
                                <li class="btn active">
                                    <a href="{{ route('user.withdrawal') }}" class="site-button">Crypto</a>
                                </li>
                                <li data-filter=".gaming" class="btn">
                                    <a href="javascript:void(0);" class="site-button">Precious Metal</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <p class="text-black fs-16">Here are several Cryptocurrency. You can invest daily, weekly or monthly and get higher returns in your investment.</p>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example4_wrapper" class="dataTables_wrapper no-footer">

                                <table id="example4" class="display dataTable no-footer" style="min-width: 845px" role="grid" aria-describedby="example4_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 185.297px;">Symbol</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Status : activate to sort column ascending"  style="width: 202.852px;">Status </th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Invoice number: activate to sort column ascending" style="width: 108.891px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($crypto as $item)
                                        <tr role="row" class="odd">
                                            <td><strong class="text-black">{{ $item->name }}</strong></td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td><a href="{{ route('user.invest.crypto', $item->id) }}" class="btn btn-primary btn-sm">Invest</a></td>
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
