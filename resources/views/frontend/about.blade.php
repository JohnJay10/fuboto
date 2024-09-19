@extends('layouts.master')

@section('content')
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>About Fubotol Technology Cubes<span class="m_1">Your reliable Firm in Technology, Security, and Innovation</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Fubotol Company Overview</h3>
                    <p class="lead">•	Fubotol Technology Cubes is an Information Technology 
                        Firm established in May 2010 and incorporated in May 2012 with Corporate Affairs Commission, in Nigeria.  An Information Technology (IT) firm specializes in offering Information Technology solutions and services to Governments, Businesses and Individuals. Fubotol plays a critical role in today's digital world by helping organizations 
                        leverage technology to improve efficiency, enhance security, and drive innovation</p>
                        <p class="lead">•	We have extensive experience in managing IT projects, especially in the corporate offices.  Working with our business partners, we also provide total and complete solutions 
                            and system integration in the areas of software development as well as building robust network infrastructure.</p>
                
                            <p class="lead">•	Our clients judge us by our services, expertise and ability to create innovative business solutions using IT.</p>
                        </div>
            </div><!-- end title -->
            <div>

                
          
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-cup global-radius effect-1 alignleft"></i>
                        <h3>MISSION </h3>
                        <p>Build a World class profitable Firm by providing Information Technology related services, support and solutions.</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="fas fa-bullseye global-radius effect-1 alignleft"></i>


                        <h3>VISION</h3>
                        <p>To be among the top 100 IT firms in Africa. </p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-locked global-radius effect-1 alignleft"></i>
                        <h3>Our Approach & Future</h3>
                        <p>We have always believed in Channel Partnership. By allying with leading technology vendors, we work closely with our channel partners to understand their customers’ pain, needs (now and future) and propose relevant solutions and services for their IT environments.</p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col --> --}}
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


    
<div id="overviews" class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <!-- <img src="assets/images/logos/fubotol 2.png" alt="" width="100px" height="100px" class="about_img"> -->
              
            </div>
        </div>
        
        
    
        <div class="row">
            <div class="col-md-6">
                <div class="message-box">
                    <h4>2024 FUBOTOL</h4>
                    <h2>OUR APPROACH AND FUTURE</h2>
                    <p class="lead"> We have always believed in Channel Partnership. By allying with leading technology vendors, we work closely with our channel partners to understand their customers’ pain, needs (now and future) and propose relevant solutions and services for their IT environments.</p>
                    <p class="lead">Our priority is to help our business partners evolve their business in the challenging arena of providing IT solutions. </p>

                    

                    <a href="{{route('service')}}" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
                </div><!-- end messagebox -->
            </div><!-- end col -->
            
            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <img src="assets/uploads/approach.jpg" alt="" class="img-responsive img-rounded">
                    <a href="" data-rel="prettyPhoto[gal]" class="playbutton"></a>
                </div><!-- end media -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis"> 

       
    </div><!-- end container -->
</div><!-- end section -->


   

	

   
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



    <section class="section nopad cac text-center">
        <a href="#"><h3>We do our utmost for excellence in every step we take, from service delivery to customer support</h3></a>
    </section>

 @endsection