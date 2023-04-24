@extends('pages.layout.app')
@section('content')

<main>
    <section class="ui-section--1 ui-section--start l-pb-0">
    <div class="container">
    <div class="section--container">
    <div class="col-left">
    <h1 class="l-mb-15">
    Stocks
    </h1>
   
    <strong> Choose from a range of investing possibilities</strong>
    <p class="l-mb-50">

        Trade many different equities, funds and strategies while setting up conditional orders and taking advantage of after-hours trading in your account.
    </p>
    <strong>Listed and OTC Stocks</strong>
    <p>
        Trade both listed and OTC trading stocks.</p>
    <div><br>
        <div class="two_col right_two_col">
			<strong>Exchange Traded Funds (ETFs)</strong>
			<p>Replicate the performance of an index by investing in Exchange Traded Funds. Use screeners with over 30 different screening criteria options to help you find ETFs.</p>
		</div>
        <br>
        <div class="two_col">
			<strong>Penny Stocks to Large Cap Stocks</strong>
			<p>Invest in large, mid, and small cap companies or penny stocks.</p>
		</div>
        <br>
        <div class="two_col right_two_col">
			<strong>Divided Reinvestment Programs</strong>
			<p>Enroll in our dividend reinvestment programs at no additional charge and keep those dividends working.</p>
		</div>
        <br>
    <a href="{{ route('register')}}" class="ui-button ui-button--1 ui-button--large">
    <span class="label">Join now</span>
    </a>
    <br>
    </div>
    </div>
    <div class="col-right">
    <div class="ui-frame--20">
    <div class="frame"></div>
    </div>
    </div>
    </div>
    </div>
    </section>
   
    <section class="ui-section--3 style--3">
    <div class="container">
    <div class="section--container">
    <div class="col-left">
    <h2 class="l-mb-15">
    Play to Earn<br>
    Make money just for playing games!
    </h2>
    
    <div>
    <a href="{{ route('register')}}" class="ui-button ui-button--1 ui-button--large ui-button--invert">
    <span class="label">Play now</span>
    </a>
    </div>
    </div>
    <div class="col-right">
    <div class="ui-frame--22">
    <div class="frame"></div>
     </div>
    </div>
    </div>
    </div>
    </section>
    
    </main>

@endsection