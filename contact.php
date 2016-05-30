<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Srimad Solutions HTML5 Template | Contact Style One</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <?php include ('topnavigation.php'); ?>
    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-13.jpg);">
    	<div class="auto-container">
        	<h1>Contact Us</h1>
        </div>
    </section>
    
     <!--Info Section-->
    <section class="info-section">
    	<div class="auto-container">
        	<div class="clearfix">
                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-6 col-xs-12">
                    <div class="info-inner">
                        <h3 class="upper-title">Contact Informations</h3>
                        <div class="lower">
                            <ul class="info-style-one">
                                <li><div class="icon"><span class="flaticon-pin"></span></div> <h4>We Are Located At</h4> Srimad Solutions Inc <br> 301 N Severgn Drive, Exton, PA 19341, USA.</li>
                                <li><div class="icon"><span class="flaticon-telephone"></span></div> <h4>Call Us On</h4> +(1) 302 287 5911</li>
                                <li><div class="icon"><span class="flaticon-web-3"></span></div> <h4>Leave A Message</h4> <a href="mailto:Info@Srimad Solutions.Com">Info@SrimadSolutions.Com</a> <br><a href="mailto:Support@Srimad Solutions.Com">Support@SrimadSolutions.Com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-6 col-xs-12">
                    <div class="info-inner">
                        <h3 class="upper-title">Working Hours</h3>
                        <div class="lower">
                            <ul class="list">
                                <li class="clearfix"><strong>Monday</strong><div class="data">09:00am - 06:00pm</div></li>
                                <li class="clearfix"><strong>Tuesday </strong><div class="data">09:00am - 06:00pm</div></li>
                                <li class="clearfix"><strong>Wednesday </strong><div class="data">09:00am - 06:00pm</div></li>
                                <li class="clearfix"><strong>Thursday </strong><div class="data">09:00am - 06:00pm</div></li>
                                <li class="clearfix"><strong>Friday	</strong><div class="data">09:00am - 06:00pm</div></li>
                                <li class="clearfix"><strong>Saturday </strong><div class="data">09:00am - 06:00pm</div></li>
                                <li class="clearfix"><strong>Sunday	</strong><div class="data">CLOSED</div></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-6 col-xs-12">
                    <div class="info-inner">
                        <h3 class="upper-title">Branches</h3>
                        <div class="lower">
                            <ul class="list">
                            
                                <li class="clearfix"><strong>America </strong><div class="data">Exton,PA </div></li>
                                <li class="clearfix"><strong>India </strong><div class="data">Gujarat, Maharashtra</div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Map Section-->
    <section class="map-section">
    	<!--Map Container-->
        <div class="map-container">
            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="13"
                data-lat="40.050446"
                data-lng="-75.660598"			  
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Office"
                data-content="301 N Severgn dr exton PA 19341<br><a href='mailto:info@shrimadsolutions.com'>info@shrimadsolutions.com</a>"	style="height: 500px;">
            </div>
            
        </div>
    </section>
    
    <!--Contact Section-->
    <section class="contact-section style-two">
    	<div class="auto-container medium-container">
        	
            <div class="sec-title text-center">
            	<h2>Send Your Message</h2>
                <div class="text">Please reach out to us for any query.</div>
            </div>
            <div class="form-column column">
                <div class="default-form-style contact-form">
                
                    <form method="post" action="sendemail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Your Name <sup>*</sup></div>
                                <input type="text" name="username" value="" placeholder="">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Your E-Mail <sup>*</sup></div>
                                <input type="email" name="email" value="" placeholder="">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Phone Number</div>
                                <input type="text" name="phone" value="" placeholder="" required>
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Subject</div>
                                <input type="text" name="subject" value="" placeholder="">
                            </div>
                            
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                            	<div class="field-label">Message <sup>*</sup></div>
                                <textarea name="message" placeholder=""></textarea>
                            </div>
                        
                        </div>
                        <div class="text-center"><button type="submit" class="theme-btn btn-style-four">Send Message</button></div>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </section>
    
    <?php include ('footer.php'); ?>
        
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="txt">M</span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/map-script.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>
