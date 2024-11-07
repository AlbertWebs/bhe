@extends('master-page')

@section('content')

<!-- page-title -->
<section class="page-title">
    <div class="bg-layer" style="background-image: url('{{asset('theme/assets/images/background/page-title-4.jpg')}}');"></div>
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url('{{asset('theme/assets/images/shape/shape-36.png')}}');"></div>
        <div class="pattern-2" style="background-image: url('{{asset('theme/assets/images/shape/shape-47.png')}}');"></div>
    </div>
    <div class="auto-container">
        <div class="content-box">
            <ul class="bread-crumb clearfix mb_20">
                <li><a href="index.html"># Home</a></li>
                <li>&nbsp;-&nbsp;</li>
                <li>Our Partners</li>
            </ul>
            <h1>Our Partners</h1>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- clients-section -->
<section class="clients-section clients-page-section pt_140 pb_140">
    {{-- <div class="pattern-11"></div> --}}

    <div class="auto-container">
        <div class="clients-inner">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                    <div class="title-inner">
                        <div class="sec-title mb_20">
                            <span class="sub-title"># Trusted by</span>
                            <h2>Partners & Clients </h2>
                        </div>
                        <p>
                            At Blueheights Events Limited, our partners and clients are the cornerstone of our success. We take pride in collaborating with a diverse range of organizations and individuals to create memorable events.
                            <br><br>
                            Our partnerships with industry leaders ensure we deliver top-notch services, while our loyal clients trust us to bring their visions to life with creativity and precision. Together, we transform ideas into extraordinary experiences.
                        </p>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 clients-column">
                    <div class="clients-inner">
                        <ul class="clients-logo-list mb_40">
                            <li><a href="{{url('/')}}"><img class="client-logo" src="{{asset('theme/assets/images/united-states-agency-text-label.png')}}" alt=""></a></li>
                            <li><a href="{{url('/')}}"><img class="client-logo" src="{{asset('theme/assets/images/159-1590925_siemens-logo-png-transparent-png-removebg-preview.png')}}" alt=""></a></li>
                            <li><a href="{{url('/')}}"><img class="client-logo" src="{{asset('theme/assets/images/prdlogo.png')}}" alt=""></a></li>
                            <li><a href="{{url('/')}}"><img class="client-logo" src="{{asset('theme/assets/images/11-GAK-Logo.png')}}" alt=""></a></li>
                            <li><a href="{{url('/')}}"><img class="client-logo" src="{{asset('theme/assets/images/STRYDE-Logo-Firesm.png')}}" alt=""></a></li>
                            <li><a href="{{url('/')}}"><img class="client-logo" src="{{asset('theme/assets/images/1597603258579-removebg-preview.png')}}" alt=""></a></li>
                        </ul>
                        <ul class="clients-logo-list">
                            <li><a href="{{url('/')}}"><img class="client-logo" src="{{asset('theme/assets/images/1541781582-97-davis-shirtliff-removebg-preview.png')}}" alt=""></a></li>
                            <li><a href="{{url('/')}}"><img class="client-logo" src="{{asset('theme/assets/images/png-transparent-dsv-transport-logistics-cargo-business-business-blue-text-trademark-removebg-preview.png')}}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- clients-section end -->

@endsection
