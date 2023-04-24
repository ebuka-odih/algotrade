@extends('pages.layout.app')
@section('content')

<main>
    <section class="ui-section--1 ui-section--start">
        <div class="container">
            <div class="section--container">
                <div class="col-left">
                    <h1 class="l-mb-15"> What Is an NFT? </h1>
                    <p class="l-mb-50"> An NFT, or non-fungible token, confers ownership of <br> an original asset, such as a collectible, in-game item, <br> video, piece of music or digital drawing. <br> In purchasing the NFT, ownership of the asset is <br> transferred, and since the data is held on a public <br> blockchain, its authenticity can be instantly verified. <br>
                    </p>
                    <div>
                        <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large">
                            <span class="label">Buy an NFT</span>
                        </a>
                    </div>
                </div>
                <div class="col-right">
                    <div class="ui-frame--17">
                        <div class="frame scrollme">
                            <div class="item animateme" data-when="enter" data-from="1" data-translatey="50" data-to="4.8" data-opacity="0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                                <img src="/assets/images/4405.png">
                            </div>
                            <div class="item animateme" data-when="enter" data-from="1" data-translatey="100" data-to="5" data-opacity="0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                                <img src="/assets/images/4406.png">
                            </div>
                            <div class="item animateme" data-when="enter" data-from="1" data-translatey="50" data-to="4.8" data-opacity="0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                                <img src="/assets/images/4409.png">
                            </div>
                            <div class="item animateme" data-when="enter" data-from="1" data-translatey="50" data-to="4.8" data-opacity="0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                                <img src="/assets/images/4407.png">
                            </div>
                            <div class="item animateme" data-when="enter" data-from="1" data-translatey="100" data-to="5" data-opacity="0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                                <img src="/assets/images/4408.png">
                            </div>
                            <div class="item animateme" data-when="enter" data-from="1" data-translatey="50" data-to="4.8" data-opacity="0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                                <img src="/assets/images/4410.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container scrollme animateme" data-when="enter" data-from="1" data-translatey="150" data-scale="0.8" data-to="0" style="padding-top: 50px">
        <section class="ui-section--4 style--1">
            <div class="wrapper overflow-hidden">
                <div class="section--container align-center">
                    <div class="col-left ">
                        <div class="ui-frame--13">
                            <div class="frame animateme" data-when="enter" data-from="1" data-translatex="-150" data-to="0" data-opacity="0"></div>
                        </div>
                    </div>
                    <div class="col-right">
                        <h2 class="l-mb-30 text-white">The {{ env('APP_NAME') }} NFT Marketplace </h2>
                        <div class="text-white l-mb-20"> The {{ env('APP_NAME') }} NFT marketplace brings artists, crypto enthusiasts and investors together in a secure space where sought-after exclusive artworks by top global digital artists can be bought and sold with ease. </div>
                        <div>
                            <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large ui-button--invert">
                                <span class="label">Join Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="ui-section--1 style--2 l-pb-0">
        <div class="container scrollme">
            <div class="section--container">
                <div class="col-left">
                    <h2 class="l-mb-15"> A Vast Digital <br>Collection </h2>
                    <p class="l-fs-16 l-mb-50">{{ env('APP_NAME') }}’s extensive and diverse collection of thousands of unique digital items includes a wide variety of one-of-a-kind assets. Many of these will provide additional utilities and benefits for NFT collectors and RBIS holders across the {{ env('APP_NAME') }} ecosystem. For example, our NFT marketplace is fully integrated with the {{ env('APP_NAME') }} metaverse, so you can purchase an avatar to represent you as you navigate our ever-expanding virtual world. </p>
                    <div>
                        <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large">
                            <span class="label">Buy an nft</span>
                        </a>
                    </div>
                </div>
                <div class="col-right">
                    <div class="ui-frame--19 animateme" data-when="enter" data-from="1" data-rotatez="-10" data-translatey="150" data-scale="0.8" data-to="0">
                        <div class="frame"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ui-section--1 style--1 scrollme">
        <div class="container">
            <div class="section--container">
                <div class="col-left">
                    <lottie-player src="/assets/animations/lf20_6hgs9gi7.json" background="transparent" speed="1" loop="" autoplay=""></lottie-player>
                </div>
                <div class="col-right">
                    <h2 class="l-mb-15"> Optimized Profit Potential </h2>
                    <p class="l-mb-50 l-fs-16">The entire {{ env('APP_NAME') }} crypto hub is interconnected. This means that you can purchase an in-game item in our NFT marketplace for use in our metaverse. Use of one RBIS utility will be rewarded with exclusive terms elsewhere in the growing {{ env('APP_NAME') }} ecosystem. So, for example if you hold an NFT, and then participate in our decentralized yield farming program, you will receive a higher APY. </p>
                    <div>
                        <a href="{{ route('register') }}" class="ui-button ui-button--1 ui-button--large">
                            <span class="label">Open an account</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
