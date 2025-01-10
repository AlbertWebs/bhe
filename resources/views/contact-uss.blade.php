@extends('master')

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
                <li>Contact Us</li>
            </ul>
            <h1>Contact Us</h1>
        </div>
    </div>
</section>
<!-- page-title end -->


 <!-- contact-section -->
 <section class="contact-section pt_140 pb_140">
    <div class="pattern-layer"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-9 col-md-12 col-sm-12 form-column">
                <div class="form-inner">
                    <form method="post" action="sendemail.php" id="contact-form" class="default-form">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="Name*" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email*" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="phone" required="" placeholder="Your Phone*">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="subject" required="" placeholder="Subject">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Enter your comment here"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                <button class="theme-btn btn-one" type="submit" name="submit-form">Send Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 info-column">
                <div class="info-inner">
                    <div class="single-item mb_60">
                        <h6>Be Creative Our Team</h6>
                        <ul class="info-list clearfix">
                            <li><i class="icon-27"></i><a href="mailto:example@templatepath.com">example@templatepath.com</a></li>
                            <li><i class="icon-28"></i><a href="tel:7045550127">(704) 555-0127</a></li>
                        </ul>
                    </div>
                    <div class="single-item mb_60">
                        <h6>Let's Call or Email</h6>
                        <ul class="info-list clearfix">
                            <li><i class="icon-27"></i><a href="mailto:example@info.com">example@info.com</a></li>
                            <li><i class="icon-28"></i><a href="tel:4065550120">(406) 555-0120</a></li>
                        </ul>
                    </div>
                    <div class="single-item">
                        <h6>Let's Call or Email </h6>
                        <ul class="info-list clearfix">
                            <li><i class="icon-29"></i><a href="contact.html">@templathPath</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->


<!-- google-map-section -->
<section class="google-map-section">
    <div class="map-inner">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.419707195239!2d36.7899799!3d-1.2591332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17b847b45ecd%3A0x41aae9ed994e225a!2sBlue%20Heights%20Events%20Limited!5e0!3m2!1sen!2ske!4v1722137315559!5m2!1sen!2ske" width="600" height="535" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>
<!-- google-map-section end -->

@endsection
