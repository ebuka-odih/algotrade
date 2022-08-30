{{--@extends('admin.layout.app')--}}
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Deposit Details
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

                        <table class="table table-striped">
                            <tr>
                                <th>Full Name:</th>
                                <td>{{ $deposit->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Telephone:</th>
                                <td>555 77 854</td>
                            </tr>
                            <tr>
                                <th>Telephone:</th>
                                <td>555 77 855</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
            <!-- END Page Content -->
    </main>

@endsection
