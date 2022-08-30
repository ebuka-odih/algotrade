@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit Stock</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">

                <div class="block-content">
                    <form action="{{ route('admin.stocks.update', $stock->id) }}" method="POST" enctype="multipart/form-data" >
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
                                    <div class="mb-4 col-lg-8">
                                        <label class="form-label" for="example-text-input">Name</label>
                                        <input type="text" class="form-control" id="example-text-input" name="name" value="{{ old('name', optional($stock)->name) }}">
                                    </div>
                                    <div class="mb-4 col-lg-4">
                                        <label class="form-label" for="example-password-input">Price($)</label>
                                        <input type="number" class="form-control" id="example-password-input" name="price" value="{{ old('price', optional($stock)->price) }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-4">
                                        <label class="form-label" for="example-textarea-input">Description</label>
                                        <textarea class="form-control" id="example-textarea-input" name="description" rows="4" placeholder="Textarea content..">
                                            {{ old('description', optional($stock)->description) }}
                                        </textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-secondary">Update</button>

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
