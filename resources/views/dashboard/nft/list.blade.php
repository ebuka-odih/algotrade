@extends('dashboard.layout.app')
@section('content')

<div class="content-body" style="min-height: 996px;">
    <div class="container-fluid mh-auto">
        <div class="row">
            @foreach($nfts as $item)
            <div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img style="height: 200px" class="img-fluid"  src="{{ asset('nfts/'.$item->image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 ">
                                <div class="new-arrival-content position-relative">
                                    <h4><a href="{{ route('user.nft.show', $item->id) }}">{{ $item->name }}</a></h4>
                                    <div class="comment-review star-rating">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                            <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        </ul>
                                        <p class="price">{{ $item->price }} ETH</p>
                                        <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                        <p>Bid: <span class="item">{{ $item->bid }} ETH</span> </p>
                                        <p class="text-content">{{ $item->description }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- review -->
            <div class="modal fade" id="reviewModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="text-center mb-4">
                                    <img class="img-fluid rounded" width="78" src="images/avatar/1.jpg" alt="DexignZone">
                                </div>
                                <div class="mb-3">
                                    <div class="rating-widget mb-4 text-center">
                                        <!-- Rating Stars Box -->
                                        <div class="rating-stars">
                                            <ul id="stars">
                                                <li class="star" title="Poor" data-value="1">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Fair" data-value="2">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Good" data-value="3">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Excellent" data-value="4">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="WOW!!!" data-value="5">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
                                </div>
                                <button class="btn btn-success btn-block">RATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
