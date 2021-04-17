<?php

include('connection.php');

if(isset($_POST['subscribe'])){
     $email = $_POST['dEmail'];
     
	 

     $q = "INSERT INTO `unsubscribed_users`(`email`) VALUES ('$email')";

     $query = mysqli_query($con, $q);
	 
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
	<title>Abstract</title>
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
					<li class="current"><a href="index.php" title="">Home</a></li>									
					
					<li class="has-children">
						<a href="single-standard.php" title="">Blog</a>
						
					</li>
					<li><a href="about.html" title="">About</a></li>	
					<li><a href="contact.php" title="">Contact</a></li>										
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


   <!-- masonry
   ================================================== -->
   <section id="bricks">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

         	<div class="brick entry featured-grid animate-this">
         		<div class="entry-content">
         			<div id="featured-post-slider" class="flexslider">
			   			<ul class="slides">

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-1.jpg');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>October 21, 2020</li> 
												<li><a href="#">Ishaan Shinde</a></li>			
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.php" title="">"I Love Mavericks" Aisa kya abhishek?</a></h1> 
								   	</div> 				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-2.jpg');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>October 21, 2020</li>
												<li><a href="#">Abhishek Singh</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.php" title="">Website Manager</a></h1>
						   			</div>		   				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-3.jpg');;"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>October 25, 2020</li>
												<li><a href="#" class="author">Om Pancholi</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.php" title="">I am Interested to Design News Portal for different sectors of news</a></h1>
						   			</div>

				   				</div>
				   			</li> <!-- end slide -->

				   		</ul> <!-- end slides -->
				   	</div> <!-- end featured-post-slider -->        			
         		</div> <!-- end entry content -->         		
         	</div>

         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                   <a href="https://www.nytimes.com/2020/10/26/technology/driverless-cars.html#:~:text=The%20dream%20of%20computer%2Ddriven,driverless%20vehicles%20are%20getting%20real.&text=General%20Motors'%20driverless%20car%20company,test%20cars%20in%20San%20Francisco" class="thumb-link">
	             
	                  <img src="autonomous.png" alt="vehicle">             
                  
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">The New York Times</a> 
               				<a href="#">Automotive</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.php">Driverless Cars Go Humble to Get Real</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							The dream of computer-driven cars taking over the roads remains a fantasy. But slowly, and maybe more modestly than tech idealists imagined, driverless vehicles are getting real.						</div>
               </div>

        		</article> <!-- end article -->

            <article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="https://hbr.org/2020/10/tech-should-enable-change-not-drive-it#:~:text=Businesses%20that%20want%20to%20continue,rather%20than%20a%20driver%20of" class="thumb-link">
	                  <img src="tech.jpg" alt="abstract tech">                   
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Harvard Business Review</a> 
               				<a href="#">Technology</a>                			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.php">Tech Should Enable Change, Not Drive It</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							The world is changing in rapid, unprecedented ways, but one thing remains certain: as businesses look to embed lessons learned in recent months and to build enterprise resilience for the future, they are due for even more transformation.
						</div>
               </div>
               
        		</article> <!-- end article -->

            <!-- format audio here -->
            <article class="brick entry format-audio animate-this">

               <div class="entry-thumb">
                  <a href="https://www.downtoearth.org.in/news/food/good-food-seeds-of-health-73932" class="thumb-link">
	                  <img src="health.jpg" alt="food grain">                      
                  </a>

                  <div class="audio-wrap">
                  	<audio id="player" src="media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%" height="42" controls="controls"></audio>                  	
                  </div>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">DownToEarth Magazine</a> 
               				<a href="#">Health</a>                				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-audio.html">Good food: Seeds of health</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Farmers select the best seeds and store them for sowing in coming years, while scientists study them in hope of improving them in terms of taste, yield and disease resistance.
						</div>
               </div>
               
        		</article> <!-- /article -->

         	<article class="brick entry format-quote animate-this" >

               <div class="entry-thumb">                  
	               <blockquote>
	                 	<p>Intelligence is the ability to adapt to change.</p>

	                 	<cite>Stephen Hawking</cite> 
	               </blockquote>	          
               </div>   

        		</article> <!-- end article -->

         	<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="https://indianexpress.com/article/entertainment/bollywood/amitabh-bachchan-most-respected-celebrity-tiara-report-6884416/" class="thumb-link">
	                  <img src="Bachchan.jpg" alt="Amitabh-Bachchan">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">The indian Express</a> 
               				<a href="#">Entertainment</a>                				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.php">Amitabh Bachchan is the most respected celebrity, reveals new survey</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Former host and Bollywood star Ayushmann Khurrana is the celebrity India ‘identifies’ with the most, with an empathy score of 88.5. Vicky Kaushal and Kareena Kapoor Khan follow suit.
						</div>
               </div>
               
        		</article> <!-- end article -->

            <article class="brick entry animate-this" >

               <div class="entry-thumb">
                  <a href="https://www.cnbc.com/2020/10/25/chromebook-shipment-growth-accelerates-during-coronavirus-pandemic.html" class="thumb-link">
	                  <img src="chromebook.jpeg" alt="chromebook">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">CNBC</a> 
               				<a href="#">Google</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.php">Remote schooling in the pandemic has made Chromebooks a bigger force in the computer market</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							The coronavirus pandemic, which has forced kids across the country to attend school remotely, is helping Chromebooks push into the mainstream.

Chromebook laptops run Google’s Chrome OS operating system.
						</div>
               </div>
               
        		</article> <!-- end article -->        	

        		<article class="brick entry format-gallery group animate-this">

               <div class="entry-thumb">

                  <div class="post-slider flexslider">
							<ul class="slides">
								<li>
									<img src="images/thumbs/gallery/work1.jpg"> 
								</li>
								<li>
									<img src="images/thumbs/gallery/work2.jpg"> 
								</li>
								<li>
									<img src="images/thumbs/gallery/work3.jpg"> 
								</li>
							</ul>							
						</div> 

               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">India Today</a> 
               				<a href="#">Education</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-gallery.html">4 innovative careers in engineering you probably didn't think of</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Engineering remains a high-demand field, but there has been a vast change in the industry with a number of new career options available. Here are 4 innovative engineering careers in the digital world.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-link animate-this">

               <div class="entry-thumb">
                  <div class="link-wrap">
	                 	<p>Looking for affordable &amp; reliable web hosting? We recommend Dreamhost.</p>
	                 	<cite>
	                 		<a target="_blank" href="http://www.dreamhost.com/r.cgi?287326">http://www.dreamhost.com</a>
	                 	</cite>
	               </div>	
               </div>               
               
        		</article> <!-- end article -->


         	<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="" class="thumb-link">
	                  <img src="images/thumbs/diagonal-pattern.jpg" alt="Pattern">              
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">PRO ROBOTS</a> 
               				<a href="#">Robotics</a>                			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.php">Evolution of humanoid robots | From Leonardo da Vinci to Boston Dynamics</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							When did the first humanoid robots appear, and who created them? Amazing facts and the history of robotics. The whole history of robots in one video. 
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-video animate-this">

               <div class="entry-thumb video-image">
                  <a href="http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39" data-lity>
	                  <img src="images/thumbs/ottawa-bokeh.jpg" alt="bokeh">                   
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Nvidia</a> 
               				<a href="#">Gaming</a>               			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-video.html">NVIDIA RTX 30 Series official launch event</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Announcing the all-new GeForce RTX 30 Series graphics cards, NVIDIA's 2nd gen of RTX and greatest-ever generational leap.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="https://www.thestar.com.my/lifestyle/family/2020/10/27/listen-to-music-as-you-wfh-it-may-boost-productivity" class="thumb-link">
	                  <img src="wfh.jpg" alt="wfh">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">TheStar</a> 
               				<a href="#">Work From Home</a>
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.php">Listen to music as you WFH: it may boost productivity</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							While working from home can be an attractive option for some, not all employees look forward to it due to the less than optimal working environment at home. This is true, for example, for parents with young children who have to multitask to meet the needs of their chidlren and job.

For those who have no dedicated workspace at home, the frequent distractions, noise and technical problems with the computer and Internet can be stressful, and stress, when it accumulates, can have an adverse effect on their mental health.

Here's a possible solution: music.
						</div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="https://www.gsmarena.com/apple_iphone_12_in_for_review-news-45978.php" class="thumb-link">
	                  <img src="iphone.jpg" alt="iphone">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">GSMArena</a> 
               				<a href="#">Apple</a>                	
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.php">Apple iPhone 12 in for review</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							A new iPhone must be viewed through the lens of your current handset – how you see the iPhone 12 is quite different if you’re holding, say, an 11 Pro compared to how you see it compared to something like the XR or even older. And if you have an Android, Apple’s phones may be a preview of what’s to come in 2021.
						</div>
               </div>
               
        		</article> <!-- end article -->

         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->

   	<div class="row">
   		
   		<nav class="pagination">
		      <span class="page-numbers prev inactive">Prev</span>
		   	<span class="page-numbers current">1</span>
		   	<a href="#" class="page-numbers">2</a>
		      <a href="#" class="page-numbers">3</a>
		      <a href="#" class="page-numbers">4</a>
		      <a href="#" class="page-numbers">5</a>
		      <a href="#" class="page-numbers">6</a>
		      <a href="#" class="page-numbers">7</a>
		      <a href="#" class="page-numbers">8</a>
		      <a href="#" class="page-numbers">9</a>
		   	<a href="#" class="page-numbers next">Next</a>
	      </nav>

   	</div>

   </section> <!-- end bricks -->
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
   
   

   