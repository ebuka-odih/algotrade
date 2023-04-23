@extends('dashboard.layout.app')
@section('content')

<div class="content-body" style="min-height: 996px;">
    <div class="container-fluid mh-auto">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="first">
                                        <img class="img-fluid rounded" src="{{ asset('nfts/'.$nft->image) }}" alt="">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="second">
                                        <img class="img-fluid rounded" src="images/product/2.jpg" alt="">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="third">
                                        <img class="img-fluid rounded" src="images/product/3.jpg" alt="">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="for">
                                        <img class="img-fluid rounded" src="images/product/4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--Tab slider End-->
                            <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12">
                                <div class="product-detail-content">
                                    <!--Product details-->
                                    <div class="new-arrival-content pr">
                                        <h4>{{ $nft->name }}</h4>
                                        <div class="comment-review star-rating d-flex">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>

                                            </ul>
                                            <span class="review-text ms-3">(34 reviews) / </span><a class="product-review" href="#" data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
                                        </div>
                                        <div class="d-table mb-2">
                                            <p class="price float-start d-block">{{ $nft->price }} ETH</p>
                                        </div>
                                        <p>Availability: <span class="item"> In stock <i class="fa fa-shopping-basket"></i></span>
                                        </p>
                                        <p>Bid: <span class="item">{{ $nft->bid }} ETH</span> </p>
                                        <p>tags:&nbsp;&nbsp;
                                            <span class="badge badge-success light">nft</span>
                                            <span class="badge badge-success light">art</span>
                                            <span class="badge badge-success light">web3</span>

                                        </p>
                                        <p class="text-content">
                                            {{ $nft->description }}
                                        </p>
                                        <hr>
                                        <div class="d-flex align-items-end flex-wrap mt-4">

                                            <!--Quantity start-->
                                            <div class="col-6 px-0  mb-1 me-3">
                                                <input type="text" readonly class="form-control" id="foo" value="{{ $nft->crypto_wallet->value }}">

                                            </div>
                                            <!--Quanatity End-->
                                            <div class="shopping-cart  mb-1 me-3">
                                                <a class="btn btn-primary btn-sm" href="javascript:void(0);" data-clipboard-target="#foo"><i class="fa fa-copy me-2"></i>
                                                </a>

                                            </div>
                                            <div class="col-lg-10 mt-2">
                                                {!! QrCode::size(100)->generate($nft->crypto_wallet->value); !!}
                                            </div>


                                            <div class="d-flex"><a  class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Buy item</a></div>

                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body">
                                                    <h3 class="mb-4">Pay to the wallet below</h3>
                                                    <hr>
                                                    <h5>{{ $nft->crypto_wallet->name }}</h5>
                                                    <div class="input-group">
                                                        <input type="text" readonly class="form-control" id="foo" value="{{ $nft->crypto_wallet->value }}">

                                                        <div class="input-group-prepend">
                                                            <button class="btn input-group-text" data-clipboard-target="#foo">
                                                                Copy
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 mt-2">
                                                        {!! QrCode::size(200)->generate($nft->crypto_wallet->value); !!}
                                                    </div>
                                                    <a href="" class="btn btn-sm btn-primary mt-2">Paid</a>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

<script>
    new ClipboardJS('.btn');
</script>
@endsection
