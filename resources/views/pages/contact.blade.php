@extends('pages.layout.app')
@section('content')

<main>
    <section class="ui-section--1 ui-section--start style--2">
    <div class="container">
    <div class="section--container">
    <div class="col-left">
    <h2 class="l-mb-15">
    Contact us
    </h2>
    <p class="l-mb-25 l-mr-50 lm-mr-0">Get in touch with our expert team of industry specialists and receive personal, professional guidance twenty-four hours a day, from our global support staff, via email and live chat.</p>
    <div>
    <a href="#" id="start_chat" class="ui-button ui-button--1 ui-button--large">
    <span class="label">Chat with us</span>
    </a>
    </div>
    </div>
    <div class="col-right">
    <div class="ui-frame--25">
    <div class="frame"></div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section class="ui-section--1">
    <div class="container">
    <div class="section--container">
    <div class="col-left">
    <div class="ui-feature--card style--1">
    <div class="wrapper">
    <div class="image">
    <img src="/assets/icons/mail.svg">
    </div>
    <div class="details">
    <div class="ui-title l-mb-15">
    E-mail
    </div>
    <p>Contact our team via e-mail, at any time, at <a href="mailto:support@algo-trade.co">support@algo-trade.co</a></p>
    </div>
    </div>
    </div>{{ env('APP_NAME')}}
    </div>
    <div class="col-right">
    <div class="ui-feature--card style--1">
    <div class="wrapper">
    <div class="image">
    <img src="/assets/icons/chat.svg">
    </div>
    <div class="details">
    <div class="ui-title l-mb-15">
    24/7
    </div>
    <p>{{ env('APP_NAME')}}'s expert, global professionals are available, 24/7, via live chat</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </main>

@endsection