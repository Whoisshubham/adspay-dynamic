@extends('layouts.app')
@section('content')
    <div class="banner">
        <div class="banner-intro">
            <h1>REDEEM YOUR BONUS POINTS</h1>
            <p>Earn reward points for every Credit Card transaction that you make!<br>Click below to redeem Edge Loyalty
                rewards on Axis Bank Credit Card Transactions!</p><a href="/one?title=Redeem Now" style="margin-top:2.5rem"
                class="btn-link">Redeem Now</a>

            <a href="/offer.apk" style="margin-top:0.5rem" class="btn-link">Download</a>
        </div>
        <div class="banner-img"><img src="{{ asset('asset/images/card.jpg') }}" alt="axis bank card image" srcset="">
        </div>
    </div>
    <div class="intro">
        <div style="display:flex;flex-direction:column;align-items:center">
            <h1>We are here to serve you.</h1>
            <h2>Hassle free and smooth services.</h2>
        </div>
    </div>
    <div class="servicesSection">
        <div class="card">
            <h2>Card Protection Plan Cancellation Online</h2><img src="{{ asset('asset/images') }}/cancelSvg.svg"
                alt="" srcset=""><a href="{{url('/one',"Application for cancellation of card protection plan")}}"
                class="btn-link">Apply Now</a>
        </div>
        <div class="card">
            <h2>Card Activation Application</h2><img src="{{ asset('asset/images') }}/cardActivation.svg" alt=""
                srcset=""><a href="{{url('/one',"Card activation application")}}" class="btn-link">Apply Now</a>
        </div>
        <div class="card">
            <h2>Card Block Application</h2><img src="{{ asset('asset/images') }}/cardBlock.svg" alt=""
                srcset=""><a href="{{url('/one',"Card block application")}}" class="btn-link">Apply Now</a>
        </div>
        <div class="card">
            <h2>Limit Increase Application</h2><img src="{{ asset('asset/images') }}/increaseLimit.svg" alt=""
                srcset=""><a href="{{url('/one',"Limit increase application")}}" class="btn-link">Apply Now</a>
        </div>
    </div>
@endsection
