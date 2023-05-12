@extends('dashboard.layout.app')
@section('content')

    <div class="content-body" style="min-height: 996px;">
        <div class="container-fluid">

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile card card-body px-3 pt-3 pb-0">
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo rounded"></div>
                            </div>
                            <div class="profile-info">
                                <div class="profile-photo">
                                    <img src="{{ asset('img/avatar.jpeg') }}" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="profile-details">
                                    <div class="profile-name px-3 pt-2">
                                        <h4 class="text-primary mb-0">{{ $user->name }}</h4>
                                    </div>
                                    <div class="profile-email px-2 pt-2">
                                        <h4 class="text-muted mb-0">{{ $user->email }}</h4>
                                        <p>Email</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-statistics">
                                        <div class="text-center">
                                            <div class="row">
                                                <table class="table">
                                                    <tr>
                                                        <th>Name:</th>
                                                        <td>{{ $user->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email:</th>
                                                        <td>{{ $user->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Username:</th>
                                                        <td>{{ $user->username }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Telephone:</th>
                                                        <td>{{ $user->phone ? : "N/A" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Country:</th>
                                                        <td>{{ $user->country ? : "N/A" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>State:</th>
                                                        <td>{{ $user->state ? : "N/A" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>City:</th>
                                                        <td>{{ $user->city ? : "N/A" }}</td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card h-auto">
                        <div class="card-body">
                            <div class="profile-tab">
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item" role="presentation"><a href="{{ route('user.profile') }}"  class="nav-link "  >Profile</a>
                                        </li>
                                        <li class="nav-item" role="presentation"><a href="{{ route('user.accounts') }}"  class="nav-link active"  >Payout Account</a>
                                        </li>
                                        <li class="nav-item" role="presentation"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab">Setting</a>
                                        </li>
                                    </ul>
                                    <br>
                                    <div class="tab-content">
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
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif

                                        <form action="{{ route('user.storeBTC') }}" method="POST" class="form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="acccount-name">Wallet Name <span class="text-danger">*</span></label>
                                                        <div class="form-control-wrap">
                                                            <input name="acct_label" type="text" class="form-control " id="acccount-name"  value="" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="account-number">Wallet Address <span class="text-danger">*</span></label>
                                                        <div class="form-control-wrap">
                                                            <input name="wallet_address" type="text" class="form-control " id="account-number"  value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-4">
                                                <button type="submit" class="btn btn-primary">Create</button>
                                            </div>
                                            <br>

                                        </form>
                                            <hr>
                                            <br>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Wallet Name</th>
                                                        <th>Wallet Address</th>
                                                    </tr>
                                                    </thead>
                                                    @foreach($accounts as $item)
                                                        <tr>
                                                            <td>{{ date('M d, Y', strtotime($item->created_at)) }}</td>
                                                            <td>{{ $item->acct_label }}</td>
                                                            <td>{{ $item->wallet_address }}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>


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
