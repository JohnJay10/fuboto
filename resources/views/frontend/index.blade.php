@extends('layouts.master')

@section('content')


<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div id="home" class="first-section" style="background-image:url('assets/uploads/slider-03.jpg'); ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="big-tagline">
                                <img src="assets/images/logos/fubotol 3.png" alt="image">
                                <h2 data-animation="animated zoomInRight">Technology <strong>Stop</strong> Shop</h2>
                                <p class="lead" data-animation="animated fadeInLeft">	Your reliable Firm in Technology, Security, and Innovation </p>
                                 <a data-scroll href="{{route('service')}}" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">SERVICES</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a data-scroll href="{{route('contact')}}" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInRight">CONTACT US</a>
                            </div>
                        </div>
                    </div><!-- end row -->            
                </div><!-- end container -->
            </div><!-- end section -->
        </div>
        <div class="item">
            <div id="home" class="first-section" style="background-image:url('assets/uploads/slider-02.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="big-tagline">
                                <img src="assets/images/logos/fubotol 3.png" alt="image">
                                <h2 data-animation="animated zoomInRight">Technology <strong>Stop</strong> Shop</h2>
                                <p class="lead" data-animation="animated fadeInLeft">	Your reliable Firm in Technology, Security, and Innovation </p>
                                <a data-scroll href="{{route('service')}}" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">SERVICES</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a data-scroll href="{{route('contact')}}" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInRight">CONTACT US</a>
                            </div>
                        </div>
                    </div><!-- end row -->            
                </div><!-- end container -->
            </div><!-- end section -->
        </div>
        <div class="item">
            <div id="home" class="first-section" style="background-image:url('assets/uploads/slider-01.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="big-tagline">
                                <img src="assets/images/logos/fubotol 3.png" alt="image">
                                <h2 data-animation="animated zoomInRight">Technology <strong>Stop</strong> Shop</h2>
                                <p class="lead" data-animation="animated fadeInLeft">	Your reliable Firm in Technology, Security, and Innovation </p>
                                <a data-scroll href="{{route('service')}}" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">SERVICES</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a data-scroll href="{{route('contact')}}" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInRight">CONTACT US</a>
                            </div>
                        </div>
                    </div><!-- end row -->            
                </div><!-- end container -->
            </div><!-- end section -->
        </div>
        <!-- Left Control -->
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div id="overviews" class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <!-- <img src="assets/images/logos/fubotol 2.png" alt="" width="100px" height="100px" class="about_img"> -->
                <div class="text-content ms-3"> <!-- Add margin start to the text -->
                    <h3>About FUBOTOL</h3>
                    <p class="lead">•	Fubotol Technology Cubes is an Information Technology Firm established in May 2010 and incorporated in May 2012 with Corporate Affairs Commission, in Nigeria.  An Information Technology (IT) firm specializes in offering Information Technology solutions and services to Governments, Businesses and Individuals. Fubotol plays a critical role in today's digital world by helping organizations leverage technology to improve efficiency, enhance security, and drive innovation.</p><br>
                    <p class="lead">•	We have extensive experience in managing IT projects, especially in the corporate offices.  Working with our business partners, we also provide total and complete solutions and system integration in the areas of software development as well as building robust network infrastructure.</p><br>
                    <p class="lead">•	Our clients judge us by our services, expertise and ability to create innovative business solutions using IT.</p>
                </div>
            </div>
        </div>
        
        
    
        <div class="row">
            <div class="col-md-6">
                <div class="message-box">
                    <h4>2024 FUBOTOL</h4>
                    <h2>OUR APPROACH AND FUTURE</h2>
                    <p class="lead"> We have always believed in Channel Partnership. By allying with leading technology vendors, we work closely with our channel partners to understand their customers’ pain, needs (now and future) and propose relevant solutions and services for their IT environments.</p>
                    <p class="lead">Our priority is to help our business partners evolve their business in the challenging arena of providing IT solutions. </p>

                    

                    
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

        <div class="row"> 
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <i class="fas fa-laptop-code global-radius effect-1 alignleft"></i>

                    <h3>Software Development and Integration</h3>
                    <p>Our team specializes in developing custom software solutions tailored to meet your business needs. We integrate cutting-edge technologies with your existing systems to ensure seamless functionality, driving efficiency and innovation. <small class="readmore"><a href="#">Read more</a></small></p>
                </div><!-- end icon-wrapper -->
            </div><!-- end col -->

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                    <i class="fas fa-user-tie global-radius effect-1 alignleft"></i>


                    <h3>IT Consulting and Digital Transformation Services</h3>
                    <p>Transform your business with our IT consulting services. We help organizations adopt digital strategies that streamline operations, enhance customer experience, and ensure you stay competitive in today’s evolving marketplace.<small class="readmore"><a href="#">Read more</a></small></p>
                </div><!-- end icon-wrapper -->
            </div><!-- end col -->

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <i class="fas fa-hdd global-radius effect-1 alignleft"></i>

                    <h3>Managed IT Services (Hardware and Software)</h3>
                    <p>Focus on growing your business while we manage your IT infrastructure. From hardware to software, our comprehensive managed IT services ensure everything runs smoothly, securely, and efficiently. <small class="readmore"><a href="#">Read more</a></small></p>
                </div><!-- end icon-wrapper -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="hr3"> 

        <div class="row"> 
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <i class="fas fa-shield-alt global-radius effect-1 alignleft"></i>

                    <h3>Penetration Testing, Cyber and Information Security</h3>
                    <p>Protect your business from cyber threats with our advanced penetration testing and cybersecurity solutions. We identify vulnerabilities and implement robust security measures to safeguard your data and IT systems. <small class="readmore"><a href="#">Read more</a></small></p>
                </div><!-- end icon-wrapper -->
            </div><!-- end col -->

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <i class="fas fa-chart-bar global-radius effect-1 alignleft"></i>
                    <h3>Business Intelligence and Analytics</h3>
                    <p>Unlock the power of data with our business intelligence and analytics services. We provide insights that help you make informed decisions, optimize performance, and drive business growth.<small class="readmore"><a href="#">Read more</a></small></p>
                </div><!-- end icon-wrapper -->
            </div><!-- end col -->

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                    <i class="fas fa-chalkboard-teacher global-radius effect-1 alignleft"></i>
                    <h3>Capacity building and Training</h3>
                    <p>Empower your team with our IT capacity-building and training programs. We offer customized training solutions that enhance your team’s skills, ensuring they are equipped to handle today’s technological challenges.<small class="readmore"><a href="#">Read more</a></small></p>
                </div><!-- end icon-wrapper -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<div id="domain" class="section noover">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-5 col-sm-12">
                <div class="customwidget text-left">
                    <h1>Fubotol Technology Cubes Core Values</h1>
                    <p>• Innovation: We stay on the mountain top, constantly exploring new technologies and methodologies to bring you the best solutions.</p>
                    <p>• Customer Focus: We are committed to understanding your needs and delivering services that exceed meets expectations - Your satisfaction is our success</p>
                    <a href="{{route('about')}}" data-scroll class="btn btn-light grd1 effect-1 btn-radius btn-brd">Read More</a>
                </div>
            </div>
            <!-- end col -->

            <div class="col-md-7">
                <form class="checkdomain form-inline">
                    <div class="checkdomain-wrapper">
                        <div class="form-group">
                            <h1>Newsletter</h1>
                            <label class="sr-only" for="domainnamehere">newsletter</label>
                            <input type="text" class="form-control" id="domainnamehere" placeholder="Enter Your Email ....">
                            <button type="submit" class="btn btn-primary grd1"><i class="fa fa-submit"></i>Submit</button>
                        </div>
                        <hr>
                        <div class="clearfix"></div>
                    </div><!-- end checkdomain-wrapper -->
                </form>
            </div>
        </div><!-- end row -->
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