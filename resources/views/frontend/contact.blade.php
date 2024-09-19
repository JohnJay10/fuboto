@extends('layouts.master')

@section('content')
	
<div class="all-title-box">
    <div class="container text-center">
        <h1>Contact Us<span class="m_1">Kindly Get in Contact with Us</span></h1>
    </div>
</div>


<div id="support" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Need Help? Sure we are Online!</h3>
            <p class="lead">Let us give you more details about the special offer we give @ Fubotol Technology Cubes. Please fill out the form below. <br>We have satisfied clients who are happy to work with us!</p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-6 align-items-center justify-content-center">
                <div class="contact_form">
                    <div id="message"></div>
                    <form id="contactform" class="row" action="" name="contactform" method="post">
                        <fieldset class="row-fluid">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                            </div>
                            
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">SUBMIT</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div><!-- end col -->
            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <div>
                            <h1>Get in Touch With Us </h1>
                            <h3>You can get across to us through the following media:</h3>
                            <h3 class="icon"> <i class="fa fa-volume-control-phone" ></i> +234 806 7511 625</h3>
                            <h3 class="icon"> <i class="fa fa-envelope " ></i>   fubotol@gmail.com</h3>
                            <h3 class="icon"> <i class="fa fa-location-arrow " ></i>   B86 Grow Home, Chikakore, Kubwa, Abuja FCT, Nigeria</h3>
                    </div>

                    <div class="div-social">
                        <h1 class="social">Our Social Media Handles </h1>
                       
                        <h3 class="icon"> <a href="https://www.facebook.com/profile.php?id=100063654715830 "><i class="fab fa-facebook " ></i>  Facebook</a></h3>
                        <h3 class="icon"> <a href=""><i class="fab fa-linkedin-square " ></i>  Linkedin</a></h3>
                        <h3 class="icon"> <a href="https://x.com/FubotolTech"><i class="fab fa-twitter-square " ></i>  Twitter</a></h3>

                    </div>
                    
                   
                </div><!-- end media -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<div class="map-main-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="map-btn"><i class="fa fa-map-pin" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>
</div>
<div class="map-box">
    <div id="custom-places" class="small-map"></div>
</div>



<section class="section nopad cac text-center">
    <a href="#"><h3>We do our utmost for excellence in every step we take, from service delivery to customer support</h3></a>
</section>

@endsection
