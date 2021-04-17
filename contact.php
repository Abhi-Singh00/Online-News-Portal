<?php

include('connection.php');

if(isset($_POST['submit'])){
     $name = $_POST['cName'];
     $email = $_POST['cEmail'];
	 $website = $_POST['cWebsite'];
	 $message = $_POST['cMessage'];
	 

     $q = "INSERT INTO `contact_form`(`name`,`email`,`website`, `message`) VALUES ('$name','$email','$website','$message')";

     $query = mysqli_query($con, $q);
	 
	  if(isset($_POST['subscribe'])){
     $email1 = $_POST['dEmail'];
     
	 

     $q1 = "INSERT INTO `unsubscribed_users`(`email`) VALUES ('$email1')";

     $query1 = mysqli_query($con, $q1);
	 
}
	 
}

?>




<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Contact Page - Abstract</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">        

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="index.php">Author</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					<li><a href="index.php" title="">Home</a></li>									
					
					<li class="has-children">
						<a href="single-standard.php" title="">Blog</a>
						
					</li>
					<li><a href="about.html" title="">About</a></li>	
					<li class="current"><a href="contact.php" title="">Contact</a></li>										
				</ul>
			</nav> <!-- end main-nav-wrap -->

			<div class="search-wrap">
				
				<form role="search" method="get" class="search-form" action="#">
					<label>
						<span class="hide-content">Search for:</span>
						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
					</label>
					<input type="submit" class="search-submit" value="Search">
				</form>

				<a href="#" id="close-search" class="close-btn">Close</a>

			</div> <!-- end search wrap -->	

			<div class="triggers">
				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
				<a class="menu-toggle" href="#"><span>Menu</span></a>
			</div> <!-- end triggers -->	
   		
   	</div>     		
   	
   </header> <!-- end header -->


   <!-- content
   ================================================== -->
   <section id="content-wrap" class="site-page">
   	<div class="row">
   		<div class="col-twelve">

   			<section>  

   				<div class="content-media">
						<div id="map-wrap">
			   			<div id="map-container"></div>
					      <div id="map-zoom-in"></div>
							<div id="map-zoom-out"></div>
			   		</div>  
					</div>

					<div class="primary-content">

						<h1 class="entry-title add-bottom">Get In Touch With Us.</h1>	
                        <p>By Subscribing our news portal.
						<div class="row">
							<div class="col-six tab-full">
								<h4>Where to Find Us</h4>

					  			<p>
					         Thakur Complex <br>
							 Kandivali East <br>
							 Mumbai, Maharashtra							 
							 </p>

							</div>

							<div class="col-six tab-full">
								<h4>Contact Info</h4>

				   			<p>abhisinghraj000@gmail.com<br>
							   	ishaanshinde@gmail.com <br>
								ompancholi212@gmail.com<br>
							   	Phone: 7045292065			     
							   </p>

							</div>

						</div>
						<p><b>You can give your feedback below :</b></p> 

						<form name="cForm" id="cForm" method="post" action="">
	  					   <fieldset>

	                     <div class="form-field">
	  						      <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
	                     </div>

	                     <div class="form-field">
	  						      <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
	                     </div>

	                     <div class="form-field">
	  						      <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website"  value="">
	                     </div>

	                     <div class="message form-field">
	                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
	                     </div>

	                     <button type="submit" class="submit button-primary full-width-on-mobile" name="submit">Submit</button>

	  					   </fieldset>
  				      </form> <!-- end form -->

				</section>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->		
   </section> <!-- end content -->

   
   <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            

	            <h4>About Our Site</h4>

	               <p>
		          	This Website is made for providing all types of news in one panel. This portal covers different sectors of news like politics, sports and educations etc. We will trying to spread all types of news to more people in less time.  
		          	</p>

		      </div> <!-- end footer-info -->

	      	<div class="col-two tab-1-3 mob-1-2 site-links">

	      		<h4>Site Links</h4>

	      		<ul>
	      			<li><a href="#">About Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>

	      	</div> <!-- end site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Social</h4>

	      		<ul>
	      			<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Google+</a></li>
						<li><a href="#">Instagram</a></li>
					</ul>
	      	           	
	      	</div> <!-- end social links --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">

	      		<h4>Subscribe</h4>

	      		<p>Keep yourself updated. Subscribe to our newsportal.</p>

	      		<div class="subscribe-form">
	      	
	      			<form name="dForm" id="dForm" method="post" action="">
	  					   <fieldset>

	                     <div class="form-field">
	  						      <input name="dEmail" type="text" id="dEmail" class="full-width" placeholder="Type &amp; press enter" required="" value="">
	                     </div>
			   			<input type="submit" name="subscribe" >
		   	
		   				<label for="dEmail" class="subscribe-message"></label>
						 </fieldset>
						</form>

	      		</div>	          		
	      	           	
	      	</div> <!-- end subscribe -->         

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Singh Brothers</span> 
		         	<span>Design by <a href="http://www.styleshout.com/">AIO</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div>

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="http://maps.google.com/maps/api/js?v=3.13&amp;sensor=false"></script>
   <script src="js/main.js"></script>  

</body>

</html>