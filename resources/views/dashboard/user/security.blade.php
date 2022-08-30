@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">


            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">Payment Accounts</h2>
                        <div class="nk-block-des">
                            <p>You have full control to manage your own account setting.</p>
                        </div>
                    </div>
                </div>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.profile') }}">Profile</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('user.accounts') }}">Accounts</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('user.security') }}">Security</a>
                    </li>
                </ul>
                <div class="nk-block">
                    <form action="{{ route('user.updateSecurity') }}" method="POST" class="form">
                        @csrf
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-label" for="acccount-name">Current Password <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <input name="current_password" type="text" class="form-control form-control-lg" id="acccount-name"  value="" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-label" for="account-number">New Password <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <input name="new_password" type="text" class="form-control form-control-lg" id="account-number"  value="" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-label" for="account-number">Confirm New Password <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <input name="new_confirm_password" type="text" class="form-control form-control-lg" id="account-number"  value="" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
    


    <div class="modal fade" id="wdm-account" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body">
                    <h4 class="title">Add Bank Account</h4>
                    <p>Add your bank information to withdraw your funds.</p>
                    <div class="divider sm stretched"></div>
                    <form action="{{ route('user.accountUpdate') }}" method="POST" class="form">
                        @csrf
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <div class="row gy-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Account Type <span class="text-danger">*</span></label>
                                    <ul class="custom-control-group g-3 align-center">
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input name="acct_type" type="radio" class="custom-control-input" id="account-personal" value="personal">
                                                <label class="custom-control-label" for="account-personal">Personal</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input name="acct_type" type="radio" class="custom-control-input" id="account-business" value="business">
                                                <label class="custom-control-label" for="account-business">Business</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="wdm-crypto" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body">
                    <h4 class="title">Add Crypto Wallet</h4>
                    <p>Add your bitcoin wallet to withdraw your funds.</p>
                    <div class="divider sm stretched"></div>
                    <form action="{{ route('user.storeBTC') }}" method="POST" class="form">
                        @csrf

                        <div class="row gy-3">


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="acccount-name">Wallet Address <span class="text-danger">*</span></label>
                                    <div class="form-control-wrap">
                                        <input name="wallet_address" type="text" class="form-control" id="acccount-name" placeholder="Your Account Name" value="" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row gy-3 pt-1">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="account-label">Label of account <span>(Optional)</span></label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="acct_label" value="" class="form-control" id="account-label" placeholder="eg. Personal">
                                    </div>
                                    <div class="form-note">
                                        You can easily identify using this. The label will auto genarate if you leave blank.<br>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider md stretched"></div>
                        <div class="row gy-3">
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" class="btn btn-primary" id="save-user-wd-account" data-redirect="no">
                                            <span class="spinner-border spinner-border-sm hide" role="status" aria-hidden="true" style="display: none;"></span>
                                            <span>Add Account</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="wdm-account"></div>

    <script type="text/javascript">
        const updateSetting = "https://www.beckstocker.com/public/update/setting", getTnxDetails = "https://www.beckstocker.com/public/transactions/details";
    </script>
    <script type="text/javascript">
        const msgs = { wdm: {title: "Are you sure you want to delete?", context: "The withdraw account will be deleted immediately. You can't undo this action. Are you sure you want to proceed?", btn: {confirm: "Delete Account", cancel: "Cancel" } } };
    </script>
@endsection
