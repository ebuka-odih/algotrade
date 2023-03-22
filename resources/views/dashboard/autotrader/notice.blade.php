@extends('dashboard.layout.app')
@section('content')
    <style>

        li {
            /* list-style: none; */
        }
    </style>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-md-10 offset-lg-2 ">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h3 class="heading mb-0 text-center">Auto Trader</h3>
                        </div>
                        <div class="card-body pt-2">
                           <h5>Terms and Conditions for Auto Trade Method Users</h5>
                            <hr>
                            <p>By using our auto trade method, you agree to the following terms and conditions:</p>

                            <ol  class="b">
                                <li>The Automated Trading System (ATS) is offered to clients of the broker as a service and is intended for use by experienced traders who understand the risks involved in trading.</li>
                                <li>The broker makes no guarantees or warranties regarding the performance of the ATS, and clients should be aware that there are risks involved in trading.</li>
                                <li>The client acknowledges that they have read and understood the terms and conditions of the ATS and agree to be bound by them.</li>
                                <li>The client acknowledges that the ATS is provided on an "as is" basis and that the broker shall not be liable for any losses, damages, or other expenses that may arise from the use of the ATS.</li>
                                <li>The client agrees that they will not hold the broker responsible for any errors or omissions that may occur as a result of using the ATS.</li>
                                <li>The client agrees that they will not use the ATS for any illegal or unethical purposes.</li>
                                <li>The client agrees to provide accurate and complete information when setting up the ATS account and to keep the broker informed of any changes to their contact information.</li>
                                <li>The client agrees to maintain sufficient funds in their trading account to cover any potential losses that may occur as a result of using the ATS.</li>
                                <li>The broker reserves the right to suspend or terminate access to the ATS at any time without prior notice to the client.</li>
                                <li>The client acknowledges that the broker may modify the terms and conditions of the ATS at any time without prior notice to the client. The client's continued use of the ATS constitutes acceptance of any changes made to the terms and conditions.</li>
                                <li>The client acknowledges that the broker may share trading data and other information related to the client's use of the ATS with third-party service providers as necessary for the provision of the ATS.</li>
                                <li>The client acknowledges that the broker may use aggregated trading data for research and analysis purposes, but will not disclose individual client data to third parties without the client's consent, except as required by law.</li>
                                <li>These terms and conditions shall be governed by and construed in accordance with the laws of the jurisdiction where the broker is located.</li>
                                <li>Any disputes arising from the use of the ATS shall be resolved through binding arbitration in accordance with the rules of the American Arbitration Association.</li>
                                <li>Our ATS has a 20-25% probability ROI</li>
                            </ol>
                            <form action="{{ route('user.autoTrade') }}" method="GET">
                                @csrf
                                <div class="form-check custom-checkbox mb-3">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                                    <label class="form-check-label" for="customCheckBox1"> I agree to the terms and condition above</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Proceed</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
