@extends('dashboard.layout.app')
@section('content')


<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">


        <div class="nk-content-body">
            <div class="page-dw wide-xs m-auto">
                <div class="nk-pps-apps">
                    <div class="nk-pps-title">
                        <h3 class="title text-center">Transfer your Money</h3>
                        <p class="caption-text">Your order TNX37093548 has been placed successfully. To complete your deposit, please send the payment of <strong class="text-dark">@convert($deposit->amount) USD</strong> through bank.</p>
                    </div>
                    <div class="nk-pps-data">
                        <p class="sub-text pb-1">We've sent an email to you including payment information as below. If you have any question regarding payment information, please contact us.</p>
                        <h5 class="overline-title-alt mt-4">Payment Information:</h5>
                        <ul class="nk-olist nk-olist-flat is-aligned is-compact">
                            <li class="nk-olist-item">
                                <div class="label lead-text">Payment Amount</div>
                                <div class="data">@convert($deposit->amount) USD</div>
                            </li>
                            <li class="nk-olist-item">
                                <div class="label lead-text">Reference</div>
                                <div class="data">{{ $deposit->transId() }}</div>
                            </li>
                        </ul>

                        <h5 class="overline-title-alt mt-4">Account Information:</h5>
                        <ul class="nk-olist nk-olist-flat is-aligned is-compact">
                            <li class="nk-olist-item">
                                <div class="label lead-text">Account Name</div>
                                <div class="data">Contact Support</div>
                            </li>
                            <li class="nk-olist-item">
                                <div class="label lead-text">Account Number</div>
                                <div class="data">Contact Support</div>
                            </li>
                            <li class="nk-olist-item">
                                <div class="label lead-text">Account Holder Address</div>
                                <div class="data">Contact Support</div>
                            </li>
                        </ul>

                        <h5 class="overline-title-alt mt-4">Our Bank Details:</h5>
                        <ul class="nk-olist nk-olist-flat is-plain is-aligned">
                            <li class="nk-olist-item">
                                <div class="label lead-text">Bank Name</div>
                                <div class="data">Contact Support</div>
                            </li>
                            <li class="nk-olist-item">
                                <div class="label lead-text">Bank Branch</div>
                                <div class="data">Contact Support</div>
                            </li>
                            <li class="nk-olist-item">
                                <div class="label lead-text">Bank Address</div>
                                <div class="data">Contact Support</div>
                            </li>
                            <li class="nk-olist-item">
                                <div class="label lead-text">Sort Code</div>
                                <div class="data">Contact Support</div>
                            </li>
                            <li class="nk-olist-item">
                                <div class="label lead-text">Routing Number</div>
                                <div class="data">Contact Support</div>
                            </li>
                            <li class="nk-olist-item">
                                <div class="label lead-text">IBAN</div>
                                <div class="data">Contact Support</div>
                            </li>
                            <li class="nk-olist-item">
                                <div class="label lead-text">Swift/BIC</div>
                                <div class="data">Contact Support</div>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-pps-action mt-n2">
                        <ul class="btn-group justify-between align-center gy-3">

                            <li>
{{--                                <form method="POST" action="{!! route('admin.deleteDeposit', $deposit->id) !!}" accept-charset="UTF-8">--}}
{{--                                    <input name="_method" value="DELETE" type="hidden">--}}
{{--                                    {{ csrf_field() }}--}}

{{--                                    <div class="btn-group btn-group-xs pull-right" role="group">--}}
{{--                                        <button type="submit" class="link link-danger js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Cancel Deposit?&quot;)">--}}
{{--                                            Cancel Order--}}
{{--                                        </button>--}}

{{--                                    </div>--}}

{{--                                </form>--}}
                                <a href="{{ route('user.cancelDeposit', $deposit->id) }}" class="link link-danger">Cancel Order</a>
                            </li>
                            <li><a href="{{ route('user.dashboard') }}" class="link link-primary"><span>Back to Dashboard</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                        </ul>
                    </div>
                    <div class="nk-pps-notes">
                        <ul>
                            <li class="alert-note is-plain">
                                <em class="icon ni ni-alert-circle text-primary"></em>
                                <p>Your account will credited once we confirm that payment has been received.</p>
                            </li>
                            <li class="alert-note is-plain">
                                <em class="icon ni ni-alert-circle text-primary"></em>
                                <p>Ensure that the amount you send is sufficient to cover all such changes by your bank.</p>
                            </li>
                            <li class="alert-note is-plain text-danger">
                                <em class="icon ni ni-alert-circle"></em>
                                <p>Please make your payment within 3 days, unless this order will be cancelled.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
