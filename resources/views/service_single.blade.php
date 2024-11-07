@extends('master-page-2')

@section('content')
@foreach ($Service as $Service)


<!-- page-title -->
<section class="page-title">
    <div class="bg-layer" style="background-image: url('{{asset('theme/assets/images/_MG_5001.jpg')}}');"></div>
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url('{{asset('theme/assets/images/shape/shape-36.png')}}');"></div>
        <div class="pattern-2" style="background-image: url('{{asset('theme/assets/images/shape/shape-47.png')}}');"></div>
    </div>
    <div class="auto-container">
        <div class="content-box">
            <ul class="bread-crumb clearfix mb_20">
                <li><a href="{{url('/')}}"># Home</a></li>
                <li>&nbsp;-&nbsp;</li>
                <li>{{$Service->title}}</li>
            </ul>
            <h1>{{$Service->title}}</h1>
        </div>
    </div>
</section>
<!-- page-title end -->

   <!-- about-style-two -->
   <section class="about-style-two pt_120 pb_120" id="about">
    <div class="pattern-11"></div>
    <div class="pattern-layer">
        <div class="pattern-1"></div>
        {{-- <div class="pattern-2" style="background-image: url('{{asset('theme/assets/images/shape/shape-33.png')}}');"></div> --}}
    </div>
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title mb_20">
                        <span class="sub-title">Blue Heights Events Limited </span>
                        <h3>{{$Service->title}}</h3>
                    </div>
                    <div class="text-box">
                        {!!html_entity_decode($Service->content)!!}

                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image image-1"><img src="{{url('/')}}/theme/assets/images/{{$Service->image}}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->

@endforeach
@endsection
