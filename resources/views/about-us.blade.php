@extends('master-page-about')

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
                <li>About Us</li>
            </ul>
            <h1>Our Story</h1>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- about-style-two -->
<section class="about-style-two pt_120 pb_120">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-32.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-33.png);"></div>
    </div>
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title mb_20">
                        <span class="sub-title"># A TRADITION OF EXCELLENCE</span>
                        <h2>
                            ABOUT US
                        </h2>
                    </div>
                    <div class="text-box">
                        <p>
                            Our company is based on the belief that our customers needs are of the utmost importance. Our dedicated team is committed to meeting those needs and exceeding expectations.
                        </p>
                    </div>
                    <div class="text-boxs">
                        <p>
                            The Blue Heights Events Ltd is an event management company that was established to provide events managements for various corporate events and effectively help clients hold memorable events and efficiently promote their brand.
                            <br><br>
                            We specialize in providing premium services to corporate clients both the
                            private and public sectors of the economy. We are committed to providing
                            innovative solutions spanning; Design of exhibition floor plans, provision of
                            quality shell scheme structures, media coverage and comprehensive
                            provision of all conferencing equipment that gurantees our clientele
                            satisfaction.
                            <br><br>
                            At The Blue Heights Events we believe that our customers’ needs are of
                            utmost importance. We have a dedicated team that is committed to
                            meeting these needs and where possible exceeding expectations.
                        </p>
                        <br>
                        <a href="{{url('/')}}/our-portfolio" class="theme-btn btn-one">Our Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image image-1"><img src="{{asset('theme/assets/images/IMG_20220419_111200.png')}}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->


<!-- mission-section -->
<section class="mission-section pt_20 pb_20 centred">
    <div class="pattern-layer" style="background-image: url('{{asset('theme/assets/images/shape/shape-11.png')}}');"></div>
    <div class="auto-container">
        <div class="title-inner mb_60">
            <div class="sec-title centred mb_20">
                <span class="sub-title">#   </span>
                <h2>Mission & Vision</h2>
                {{-- ● --}}
            </div>
            {{-- <p>With our passion, knowledge, creative flair and inspiration, <br>we are dedicated in helping.</p> --}}
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 mission-block">
                <div class="mission-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box" style="min-height:378px">

                        <h3><a href="#">Vision</a></h3>
                        <br>
                        <p>
                            To become the leading event organizing company both locally and internationally.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 mission-block">
                <div class="mission-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box" style="min-height:378px">

                        <h3><a href="#">Mission</a></h3>
                        <br>
                        <p>
                            To provide innovative and professional marketing and event
                            management services with a focus on quality and detail. Our aim
                            is to represent the best interest of our client by providing advice
                            while keeping a focus on creative and innovative ways to
                            accomplish each goal set forth.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mission-block">
                <div class="mission-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box" style="min-height:378px">

                        <h3><a href="#">Core Values</a></h3>

                        <p>
                            <p><span class="fas fa-check-square"></span> Integrity</p>
                            <p><span class="fas fa-check-square"></span> Innovation</p>
                            <p><span class="fas fa-check-square"></span> Team Work</p>
                            <p><span class="fas fa-check-square"></span> Perfection</p>
                            <p><span class="fas fa-check-square"></span> Customer Care</p>
                        </p>

                    </div>
                </div>
            </div>
            {{--  --}}

        </div>
    </div>
</section>
<!-- mission-section end -->


<!-- cta-section -->
<section class="cta-section centred pt_140 pb_140">
<div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url('{{asset('theme/assets/images/background/cta-bg.jpg')}}');"></div>
<div class="auto-container">
    <div class="inner-box">
        <span># Our Promise</span>
        <h2>Why Choose Us</h2>
        <p style="color:#ffffff">
            At Blue Heights Events Ltd, we believe that our customers' needs are paramount, and our dedicated team is committed to exceeding your expectations. With over six years of experience, we specialize in providing premium event management services to both private and corporate sectors. <br> <br>
            Our comprehensive offerings include designing exhibition floor plans, world-class shell schemes, interior decor, stand designs, media coverage, itinerary setups, and state-of-the-art conferencing equipment. We pride ourselves on delivering innovative solutions that make your events memorable and effective in promoting your brand. Choose Blue Heights Events Ltd for an exceptional, customer-centric event experience that stands out.
        </p>

    </div>
</div>
</section>
<!-- cta-section end -->


   <!-- testimonial-section -->
   <section class="testimonial-section pt_110 pb_140">
    <div class="pattern-layer">
        <div class="pattern-1 float-bob-x" style="background-image: url(assets/images/shape/shape-17.png);"></div>
    </div>
    <div class="auto-container">
        <div class="title-inner mb_60">
            <div class="sec-title mb_20">
                <span class="sub-title"># Testimonial</span>
                <h2>What our clients are saying</h2>
            </div>
            {{-- <p>With our passion, knowledge, creative flair and inspiration, we are dedicated in helping.</p> --}}
        </div>
        <div class="testimonial-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('theme/assets/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                        <div class="icon-box"><i class="icon-8"></i></div>
                    </div>
                    <div class="text-box">
                        <p>Pellentesque quis scelerisque justo. Aenean mauris justo, sagittis ornare felis ut, mattis pretium neque. Vestibulum finibus eleifend tellus vel convallis. Aliquam faucibus quis lacus quis sodales. Nulla id suscipit sem.</p>
                        <h3>Wade Warren</h3>
                        <span class="designation">Designation</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('theme/assets/images/resource/testimonial-2.jpg')}}" alt=""></figure>
                        <div class="icon-box"><i class="icon-8"></i></div>
                    </div>
                    <div class="text-box">
                        <p>Pellentesque quis scelerisque justo. Aenean mauris justo, sagittis ornare felis ut, mattis pretium neque. Vestibulum finibus eleifend tellus vel convallis. Aliquam faucibus quis lacus quis sodales. Nulla id suscipit sem.</p>
                        <h3>Floyd Miles</h3>
                        <span class="designation">Web Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->

@endsection
