@extends('admin.layout.app')
@section('content')
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Withdrawal Details
                    </h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                            <div class="row">
                                <div class="col-sm-12">

                                    <table style="width:100%">
                                        <tr>
                                            <th>Name:</th>
                                            <td>{{ $withdraw->user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Balance :</th>
                                            <td>@convert($withdraw->user['balance'])USD</td>
                                        </tr>
                                        <tr>
                                            <th>Withdrawal Amount:</th>
                                            <td>${{ $withdraw->amount }}</td>
                                        </tr>
                                        @if($withdraw->withdraw_method->payment_type == 1)
                                        <tr>
                                            <th>Account Name:</th>
                                            <td>{{ $withdraw->withdraw_method->acct_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Account Type</th>
                                            <td>{{ $withdraw->withdraw_method->acct_type }}</td>
                                        </tr>
                                        <tr>
                                            <th>Account Number</th>
                                            <td>{{ $withdraw->withdraw_method->acct_number }}</td>
                                        </tr>
                                        <tr>
                                            <th>Bank Name</th>
                                            <td>{{ $withdraw->withdraw_method->bank_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Bank Country</th>
                                            <td>{{ $withdraw->withdraw_method->bank_country }}</td>
                                        </tr>
                                        <tr>
                                            <th>Bank Branch</th>
                                            <td>{{ $withdraw->withdraw_method->bank_branch }}</td>
                                        </tr>
                                            <tr>
                                            <th>Base Currency</th>
                                            <td>{{ $withdraw->withdraw_method->base_currency }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sort Code</th>
                                            <td>{{ $withdraw->withdraw_method->sort_code }}</td>
                                        </tr>
                                        <tr>
                                            <th>Routing Number</th>
                                            <td>{{ $withdraw->withdraw_method->routing_number }}</td>
                                        </tr>
                                        <tr>
                                            <th>Swift Code</th>
                                            <td>{{ $withdraw->withdraw_method->swift_code }}</td>
                                        </tr>
                                        <tr>
                                            <th>Iban Code</th>
                                            <td>{{ $withdraw->withdraw_method->iban_code }}</td>
                                        </tr>

                                        @else
                                            <tr>
                                                <th>Withdrawal Method (Crypto):</th>
                                                <td>{{ $withdraw->withdraw_method->acct_label }}</td>
                                            </tr>
                                            <tr>
                                                <th>Withdrawal Address (Crypto):</th>
                                                <td>{{ $withdraw->withdraw_method->wallet_address }}</td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
    </main>

@endsection
