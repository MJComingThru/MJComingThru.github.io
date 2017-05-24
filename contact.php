<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trinity Christian Fellowship Church</title>
		<link href="tcf.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> -->
        <link rel="stylesheet" type="text/css" href="css/animate.css"> <!-- For the animation themselves -->
        <script src="js/wow.min.js"></script>
        <script src="js/tcf.js"></script>
    <script>
        // for animations throughout
    new WOW().init();
    </script>
	</head>
<body>
<!-- Beginning of header -->

<header>
<div class="wow slideInLeft"> <!-- Beginning animation -->

        <a href="index.html" id="logo"></a>
</div> <!-- End of animation -->
        <nav> 
            <div id="menu-icon"> <!-- Menu icon for mobile view -->
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="overlay__content" id="nav"> 
                <li id="menu1"><a href="index.html"> Home </a></li>
                <li id="menu2"><a href="about.html"> About Us </a></li>
                <li id="menu3"><a href="services.html"> Services </a></li>
                <li id="menu4"><a href="events.html"> Events </a></li>
                <li id="menu5"><a href="contact.php" class="current"> Contact </a></li>
            </ul>
        </nav>

<!-- End of header -->
  
<div class="clearfix"></div> <!-- Invisible horizontal rule -->
</header>    
<div id="inner-wrapper"> <!-- Beginning of Inner Wrapper --> 

<!-- Beginning of main body section -->
<div class="body-inner">
<div class="main-body">
<!-- Beginning of Contact Form -->
<div class="form-split"> 
<section class="one-half">
    <form action="contact.php" method="post">
        <label>
            <input type="text" name="name" autocomplete="off">
        </label><br>
        <label>
            <input type="text" name="email" autocomplete="off">
        </label><br>
        <label>
            <textarea name="message" rows="8"></textarea>
        </label><br>
        <input type="submit" name="submit" value="Send">
    </form>
</section>
<section class="one-half contact-details">
    <h3><strong>PHONE </strong></h3>
        <p > 314-773-2484</p><br>
    <h3><strong>EMAIL</strong></h3>
        <p> trinityfgc@aol.com</p><br>
    <h3><strong>ADDRESS</strong> </h3>
        <p> St. Louis, Missouri</p>
</section>
</div>         
<!-- End of Contact Form -->
    <div class="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3117.9397013340567!2d-90.23274748465825!3d38.60425807961689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d8b47b95bbfae5%3A0xf914450b18c8e5ba!2s2906+Magnolia+Ave%2C+St.+Louis%2C+MO+63118!5e0!3m2!1sen!2sus!4v1495526935892"></iframe>
    </div>  
    
    
    
</div>
    
<div class="clearfix"></div> <!-- Invisible horizontal rule -->

</div> <!-- End of selection for bkgrnd -->
</div>
<!-- End of main body section -->


    

    
<!-- Beginning of Footer -->
    
<footer>

   <div id="footer-inner"> <!-- Class made to make styling easier -->
        <section class="one-third" id="footer-third"> <!-- ID is for the divider lines from the css -->
            <h3><a href="contact.html"> Contact Us </a></h3>
                <p class="footercontact">
                    <strong class="phone">314-773-2484</strong><br>
                    2906 Magnolia Ave <br>
                    St. Louis, Missouri </p>
       </section>

        <section class="one-third" id="footer-third">
            <h3> Quick Links </h3>
            <br>
                <h5>
                    <a href="index.html"> Home </a> -
                    <a href="about.html"> About Our Pastor </a> - 
                    <a href="services.html"> Prayer Line </a>
    
                </h5> 
        </section>
       
        <section class="one-third" id="footer-third-last">
            <h3> Find Us On Facebook </h3>
                <div class="social">
                    <a href="https://www.facebook.com/Trinity-Christian-Fellowship-Church-A-Full-Gospel-Church-178063778957960/" target="_blank"><i class="fa fa-facebook"></i></a>
                </div>
            <!-- target="_blank" opens in new tab --> 
       </section>
       
       
    </div> 
    
</footer>
    
<footer class="second"> <!-- For section below for copyright, terms and conditions, etc. -->
    <p> &copy; TCF 2017 | All Rights Reserved | Powered by <a href="https://www.twitter.com/MJComingThru" target="_blank"> Apollo </a></p>
</footer>
<!-- End of Footer -->



</body>
</html>