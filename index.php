<!Doctype html>
<html>
<head>
	<title>Tatian Restaurant</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/menuactive.js"></script>
	<script type="text/javascript" src="js/togglelink.js"></script>
	<script type="text/javascript" src="js/sendbooking.js"></script>

</head>
<body>


	<!-- Header Start -->
	<?php include('header.php'); ?>
	<div id="menutop"></div>
	<!-- Header Ends -->

	<!-- Banner Start -->
	<div id="banner">
		<div class="trans-2"></div>	
		<div id="banner-content">
				<div id="bannercontentalign">
			<div>
					<h1 class="first">Tatian Restaurant</h1>
					<h2 class="second">extraordinary food house</h2>
					<div id="morelink">
						<div id="more">
							<a href="#homeboxes">
								<span>more</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner Ends -->

    <div id="homeboxes">
    	<div class="wrapper">
    		<div id="frontbox1">
    			<h3>We are Tatian</h3>
    			<img src="layout/tatiancook.jpg">
    			<p>Tatian is the worlds firstclass restaurant for extraordinary and special guests, we serve food with quality and taste. Lets enjoy Tatian.</p>
    			<a class="readmore one" href="about.php">read more</a>
    		</div>
    		<div id="frontbox2">
    			<h3>Our healthy food</h3>
    			<img src="layout/tatianhealthy.jpg">
    			<p>We have been awarded for our healthy food in Australia many times come and join us, we will lead you to a better future.</p>
    			<a class="readmore two" href="menu.php">read more</a>
    		</div>
    		<div id="frontbox3">
    			<h3>Booking</h3>				
				<div class="form-style" id="contact_form">
					<div id="contact_results"></div>
					<div id="contact_body">
					    <input type="text" onfocus="if(this.value == 'Your name'){this.value = '';}" onblur="if(this.value == ''){this.value = 'Your name';}" name="name" value="Your name" id="name" required="true">
					    <input type="text" onfocus="if(this.value == 'Date for reservation'){this.value = '';}" onblur="if(this.value == ''){this.value = 'Date for reservation';}" name="date" value="Date for reservation" id="subject" required="true">	
					    <input type="email" onfocus="if(this.value == 'Your email'){this.value = '';}" onblur="if(this.value == ''){this.value = 'Your email';}" name="email" value="Your email" required="true">				    			    
					    <input type="text" onfocus="if(this.value == 'Seats'){this.value = '';}" onblur="if(this.value == ''){this.value = 'Seats';}" name="seats" id="seats" value="Seats" required="true"></textarea>
					    <input type="submit" id="submit_btn" class="submit three" value="Submit">
					</div>
				</div>
    		</div>
    	</div>
    </div>

	<div id="foodicons">
		<div class="wellwrapper">
			<div id="lettuceicon"></div>
				<div class="downline"></div>

			<div id="glassicon"></div>
				<div class="upline"></div>

			<div id="fruiticon"></div>
				<div class="downline"></div>

			<div id="warmplateicon"></div>
				<div class="upline"></div>

			<div id="desserticon"></div>
		</div>
		<div id="foodiconstitle">
			<h3>The W of the connecting icons stands for well done</h3>
		</div>
	</div>

	<div class="squareboxes">
		<div class="wrapper">
			<div class="box1">
				<div><img src="layout/quote.png"></div>
				<h3>Awesome Food</h3>
				<p>
					I always get the food from here and it is always amazing. Very good food especially after a long morning drive into Melbourne.
				</p>
			</div>
			<div class="box2">
				<div><img src="layout/quote.png"></div>
				<h3>Wonderful Place</h3>
				<p>
					My family likes Tatian so much that we are regulars. Not cheap food and that’s the point. Good quality meat and food everyone likes.
				</p>
			</div>
			<div class="box3"> 
				<div><img src="layout/quote.png"></div>
				<h3>I Recommend It</h3>
				<p>
					A great meal at a good price. I sat outside and enjoyed the food and friendly staff. Enjoy a wide selection of food and drink. Highly recommend.
				</p>
			</div>
	    </div>
	</div>

	<div id="motto">
		<div class="trans-1"></div>
		<div id="mottocontent">
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<h3>
				Visit Tatian and dive into another world of tasty and healthy food
			</h3>
		</div>
	</div>

	<!-- Here comes the Footer -->

	<div id="footer">
		<div class="wrapper">
			<div id="footbox1">
				<h4>About Us</h4>
				<p>
					We are a restaurant located in Melbourne, Australia. We’ve won a ton of awards and have been featured in all of the food magazines.
				</p>
			</div>
			<div id="footbox2">
				<h4>Opening Hours</h4>
				<p>
					    <span class="weekdays">Mon</span>Fri<br>
                        11:30am - 15pm<br>
                        18:30am - 21pm<br><br>
                        <span class="weekdays">Sat</span>Sun<br>
                        11:45am - 16pm<br>
                        18:45am - 22pm
                </p>
			</div>
			<div id="footbox3">
				<h4>Contact Us</h4>
				<p>
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					
					<span class="address">Tatian Restaurant, Alis Street</span> 
					<span class="melbourne">Melbourne, Australia.</span>
				</p>
				<p>
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<span class="email">restaurant@thetatian.com</span>
				</p>
				<p>
					<i class="fa fa-phone" aria-hidden="true"></i>
					<span class="call">+92 962 111 000</span>
				</p>
			</div>
			<div id="footbox4">
				<h4>Stay Social</h4>
				<i class="fa fa-facebook"></i>
				<i class="fa fa-twitter"></i>
			</div>
		</div>
	</div>

	<?php include('footend.php'); ?>
	<!-- Here comes the end -->

</body>
</html>