@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Add Trading Pair</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">

                <div class="block-content">
                   <h3 class="text-center">Add Crypto Pair</h3>
                    <form action="{{ route('admin.store.pair') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Basic Elements -->
                        <div class="row push">
                            <div class="col-lg-8 offset-lg-2">

                                <div class="row">
                                    <div class="mb-4 col-lg-12">
                                        <label class="form-label" for="example-text-input">Pair Name</label>
                                        <input type="text" class="form-control" id="example-text-input" name="pair" >
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-secondary">Save</button>

                            </div>

                        </div>

                        <!-- END Basic Elements -->

                    </form>
                </div>
                <div class="block-content">
                   <h3 class="text-center">Add Stock Pair</h3>
                    <form action="{{ route('admin.storeStock') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Basic Elements -->
                        <div class="row push">
                            <div class="col-lg-8 offset-lg-2">

                                <div class="row">
                                    <div class="mb-4 col-lg-12">
                                        <label class="form-label" for="example-text-input">Pair Name</label>
                                        <input type="text" class="form-control" id="example-text-input" name="pair" >
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-secondary">Save</button>

                            </div>

                        </div>

                        <!-- END Basic Elements -->

                    </form>
                </div>
                <div class="block-content">
                    <h3 class="text-center">Add Forex Pair</h3>
                    <form action="{{ route('admin.storeIndexes') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Basic Elements -->
                        <div class="row push">
                            <div class="col-lg-8 offset-lg-2">

                                <div class="row">
                                    <div class="mb-4 col-lg-12">
                                        <label class="form-label" for="example-text-input">Pair Name</label>
                                        <input type="text" class="form-control" id="example-text-input" name="pair" >
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-secondary">Save</button>

                            </div>

                        </div>

                        <!-- END Basic Elements -->

                    </form>
                </div>
            </div>
            <!-- END Elements -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
