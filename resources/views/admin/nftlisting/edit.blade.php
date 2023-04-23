@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Add Investment Package</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">

                <div class="block-content">
                    <form action="{{ route('admin.nftlisting.update', $nft->id) }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @method('PATCH')
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
                                    <div class="mb-4 col-lg-4">
                                        <label class="form-label" for="example-text-input">Name</label>
                                        <input type="text" class="form-control" id="example-text-input" name="name" value="{{ old('name', optional($nft)->name) }}">
                                    </div>
                                    <div class="mb-4 col-lg-4">
                                        <label class="form-label" for="example-password-input">Price (In the Asset, eg 0.1 ETH)</label>
                                        <input type="text" class="form-control" id="example-password-input" name="price" value="{{ old('price', optional($nft)->price) }}">
                                    </div>
                                    <div class="mb-4 col-lg-4">
                                        <label class="form-label" for="example-password-input">Bid</label>
                                        <input type="text" class="form-control" id="example-password-input" name="bid" value="{{ old('bid', optional($nft)->bid) }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 col-lg-6">
                                        <label class="form-label" for="example-email-input">Image</label>
                                        <input type="file" class="form-control" id="example-email-input" name="image" value="{{ old('image') }}">
                                        <img class="mt-2" height="80" width="80" src="{{ asset('nfts/'.$nft->image) }}" alt="">
                                    </div>
                                    <div class="mb-4 col-lg-6">
                                        <label class="form-label" for="example-password-input">Description (Optional)</label>
                                        <textarea class="form-control" name="description"  id="" cols="30" rows="10">{{ old('description', optional($nft)->description) }}</textarea>

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-secondary">Save</button>

                            </div>

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
