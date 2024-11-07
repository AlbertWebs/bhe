@extends('master-page')

@section('content')
@foreach ($Portfolio as $folio)
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
                <li>Our Projects</li>
                <li>&nbsp;-&nbsp;</li>
                <li>{{$folio->title}}</li>
            </ul>
            <h1>{{$folio->title}}</h1>
        </div>
    </div>
</section>
<!-- page-title end -->

        <!-- clients-section -->
        <section class="clients-section clients-page-section pt_140">
            {{-- <div class="pattern-11"></div> --}}

            <div class="auto-container">
                <div class="clients-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                            <div class="title-inner">
                                <div class="sec-title mb_20">
                                    <span class="sub-title"># Our Portfolio</span>
                                    <h2> {{$folio->title}} </h2>
                                </div>
                                <p>
                                    At Blueheights Events Limited, our partners and clients are the cornerstone of our success. We take pride in collaborating with a diverse range of organizations and individuals to create memorable events.
                                    <br><br>
                                    Our partnerships with industry leaders ensure we deliver top-notch services, while our loyal clients trust us to bring their visions to life with creativity and precision. Together, we transform ideas into extraordinary experiences.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- gallery-style-two -->
        <section class="gallery-style-two pt_140 pb_110">
            <div class="auto-container">
                <div class="sortable-masonry">
                    <div class="items-container row clearfix">
                        <?php
                           $gallery = DB::table('galleries')->where('portfolio_id',$folio->id)->get();
                        ?>
                        @foreach ($gallery as $gal)
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all technology grocery hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{url('/')}}/uploads/portfolio/{{$gal->image}}" alt=""></figure>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery-style-two end -->

@endforeach


@endsection
