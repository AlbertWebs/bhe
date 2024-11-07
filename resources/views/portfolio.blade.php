@extends('master-page')

@section('content')

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
                <li>Our Portfolio</li>
            </ul>
            <h1>Our Past Projects</h1>
        </div>
    </div>
</section>
<!-- page-title end -->

<?php
    $Portfolio = DB::table('portfolios')->get();
?>

<!-- gallery-style-two -->
<section class="gallery-style-two pt_140 pb_110">
    <div class="auto-container">
        <div class="sortable-masonry">
            <div class="items-container row clearfix">
                @foreach ($Portfolio as $portfolio)
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all technology grocery hospital">
                    <div class="gallery-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{url('/')}}/uploads/portfolio/{{$portfolio->image}}" alt=""></figure>
                            <div class="link"><a href="{{url('/')}}/our-portfolio/{{$portfolio->slung}}"><i class="icon-25"></i></a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- gallery-style-two end -->


@endsection
