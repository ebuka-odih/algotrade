@extends('dashboard.layout.app')
@section('content')

    <div class="content-body" style="min-height: 996px;">
        <!-- row -->
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="row main-card">
                        <div class="swiper crypto-Swiper position-relative overflow-hidden swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
                            <div class="swiper-wrapper " id="swiper-wrapper-18f0cc7ab4ddf97f" aria-live="polite">
                                <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="1 / 4" style="width: 252.5px; margin-right: 30px;">
                                    <div class="card coin-card bg-secondary">
                                        <div class="back-image">
                                            <svg width="121" height="221" viewBox="0 0 121 221" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="135.5" cy="84.5" r="40" stroke="#BE7CFF"></circle>
                                                <circle cx="136" cy="85" r="135.5" stroke="#BE7CFF"></circle>
                                                <circle cx="136" cy="85" r="109.5" stroke="#BE7CFF"></circle>
                                                <circle cx="136" cy="85" r="86.5" stroke="#BE7CFF"></circle>
                                                <circle cx="136" cy="85" r="64.5" stroke="#BE7CFF"></circle>
                                            </svg>
                                        </div>
                                        <div class="card-body p-4 ">
                                            <div class="title">
                                                <h4>Investment</h4>
                                                <img height="50" width="50" src="{{ asset('img/dollar-sign-white.svg') }}" alt="">
                                            </div>
                                            <div class="chart-num">
                                                <h2>@convert(auth()->user()->invest_bal)</h2>
                                            </div>
                                            <hr>
                                            <div class="chart-num">
                                                <h2>Profit</h2>
                                                <span style="padding-right: 30px;">@convert(auth()->user()->profit)</span>
                                                <span class="pull-r">+ {{ $percent }}%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /row -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Investments</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="example4_wrapper" class="dataTables_wrapper no-footer">

                                    <table id="example4" class="display dataTable no-footer" style="min-width: 845px" role="grid" aria-describedby="example4_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 185.297px;">Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Invoice number: activate to sort column ascending" style="width: 202.852px;">Asset</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Invoice number: activate to sort column ascending" style="width: 202.852px;">Size</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Status : activate to sort column ascending" style="width: 108.891px;">Status </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($transact as $item)
                                            <tr role="row" class="odd">
                                                <td>{{ date('Y, M d', strtotime($item->created_at)) }}</td>

                                                <td class="text-capitalize">{{ $item->asset }}</td>
                                                <td>
                                                    <strong>${{ $item->amount }}</strong>
                                                </td>
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
    </div>

@endsection
