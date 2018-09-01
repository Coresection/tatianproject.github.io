<!Doctype html>
<html>
<head>
	<title>Tatian Restaurant - Contact</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/menuactive.js"></script>
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7v4Bh7ZVAE-8eAa5t9rbcsC4G0km7UUo&callback=initMap" type="text/javascript"></script>
	<script type="text/javascript" src="js/maps.js"></script>
	<script type="text/javascript" src="js/sendform.js"></script>

</head>
<body>


	<!-- Here comes the Header -->

	<?php include('header.php'); ?>

	<!-- here comes the menutitle -->

	<div id="menutop">
		<div class="wrapper">
			<div id="menutitle">
				<h2>Contact</h2>
			</div>
		</div>
	</div>

	<!-- here comes the content-->

	<div id="map"></div>

	<div id="contactarea">
		<div class="wrapper">
			<div id="contactform">
				<div class="form-style" id="contact_form">
						<div id="contact_results"></div>
    					<div id="contact_body">
				    <hr>
				    <label for="name">Name</label>
				    <input type="text" name="name" id="name" required="true">
				    <label for="subject">Subject</label>
				    <input type="text" name="subject" id="subject" required="true">	
				    <label for="email">Email</label>
				    <input type="email" name="email" required="true">				    			    
				    <label for="msg">Message</label>
				    <textarea name="message" id="message" required="true"></textarea>
				    <input type="submit" id="submit_btn" class="sendbtn" value="send inquiry">
				</div></div>
			</div>
			<div id="contactinfo">
				<p>
					<i class="fa fa-map-marker"></i><br />
					Tatian Restaurant<br />
					Behind Alis Street<br />
					Melbourne, Australia
				</p>
				<p><i class="fa fa-phone"></i><br/ >
					+92 333 765 53 35</p>
				<p><i class="fa fa-envelope"></i><br />
					restaurant@thetatian.com</p>
			</div>
		</div>
	</div>

	<!-- here comes the footer -->

	<?php include('footend.php'); ?>

</body>
</html>