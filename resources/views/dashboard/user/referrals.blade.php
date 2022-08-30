@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">


        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-head-sub"><span>Referrals</span></div>
                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">Referral Activity</h2>
                        <div class="nk-block-des">
                            <p>See who you've referred and statistic of your referrals.</p>
                        </div>
                    </div>

                </div>
            </div>



            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <h5 class="nk-block-title">Referral Commissions</h5>
                </div>
                <div class="card card-bordered">
                    <table class="nk-plan-tnx table">
                        <thead class="thead-light">
                        <tr>
                            <th class="tb-col-type w-50"><span class="overline-title">Details</span></th>
                            <th class="tb-col-status tb-col-sm"><span class="overline-title">Username</span></th>
                            <th class="tb-col-date tb-col-md"><span class="overline-title">Date</span></th>
                            <th class="tb-col-amount tb-col-end"><span class="overline-title">Earning</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(auth()->user()->all_referrals() as $ref)
                            <tr>
                                <td>{{ $ref->name}}</td>
                                <td>{{ $ref->username}}</td>
                                <td>{{ date('M Y d', strtotime($ref->created_at ))  }}</td>
                                <td>$ @convert($ref->ref_bonus)</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <br>

            <div class="nk-block">
                <div class="nk-block"><div class="card card-bordered"><div class="card-inner">

                            <div class="nk-refwg-invite">
                                <div class="nk-refwg-head g-3">
                                    <div class="nk-refwg-title">
                                        <h5 class="title">Refer Us &amp; Earn</h5>
                                        <div class="title-sub">Use the below link to invite your friends.</div>
                                    </div>

                                </div>
                                <div class="nk-refwg-url">
                                    <div class="form-control-wrap">
                                        <div class="form-clip clipboard-init" data-clipboard-target="#ref-url" data-success="Copied" data-text="Copy Link">
                                            <em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
                                        <div class="form-icon">
                                            <em class="icon ni ni-link-alt"></em>
                                        </div>
                                        <input type="text" class="form-control copy-text" id="ref-url" value="{{ auth()->user()->referral_link }}">
                                    </div>
                                </div>
                            </div>

                        </div></div></div>

            </div>

        </div>

    </div>
</div>

@endsection
