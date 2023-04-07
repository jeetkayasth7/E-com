<?php 
session_start();
 include("partials/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Dunder Mifflin Website Design</title>
	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
	
</head>
<body>
	
	
	<div class="container">

  
	<?php include('partials/nav.php');?>
    
  
	
	
	<div class="small-container">
	<h1 class="title">Contact Us</h1>
	<div class="row">
		<div class="col1">
			<h3>Manager: Micheal Scott</h3>
			<br>
			<p>1725 Slough Ave,</p>
			<p>Scarnton Business Park,</p>
			<p>Scranton, PA </p>
			<p>18505-7427</p>
			<br>
			<p>Email: dundermifflin@yahoo.com</p>
			<br>
			<h4>Disclaimer: </h4>
			<p>This website is solely made for education purpose only. All rights reserved to NBC universal studio. </p>
		</div>
	</div>
	</div>
	<div class="small-container">
		<h1 class="title">Our Offline Partner</h1>
		<div class="col2">
			<h3>Shop:1</h3>
			<br>
			<p>1725 Slough Ave,</p>
			<p>Scarnton Business Park,</p>
			<p>Scranton, PA </p>
			<p>18505-7427</p>
			<br>

			
			<p>Contact:77777777</p>
		</div>
		<div class="col2">
			<h3>Shop:2</h3>
			<br>
			<p>1725 Slough Ave,</p>
			<p>Scarnton Business Park,</p>
			<p>Scranton, PA </p>
			<p>18505-7427</p>
			
			<br>
			<p>Contact:77777777</p>
		</div>
		<div class="col2">
			<h3>Shop:3</h3>
			<br>
			<p>1725 Slough Ave,</p>
			<p>Scarnton Business Park,</p>
			<p>Scranton, PA </p>
			<p>18505-7427</p>
			<br>
			
			<p>Contact:77777777</p>
		</div>
		</div>
		</div>
	<h1 class="title">Follow us on</h1>
	<div class="brands">
		<div class="small-container">
			<div class="row">
						<div class="col-5">
							<a href="http://www.facebook.com"><img src="pictures/fb.png"></img></a>
						</div>
						<div class="col-5">
							<a href="http://www.twitter.com"><img src="pictures/twitter.png"></img></a>
						</div>
						<div class="col-5">
							<a href="http://www.youtube.com"><img src="pictures/yt.png"></img></a>
						</div>
						<div class="col-5">
							<a href="http://www.instagram.com"><img src="pictures/insta.jpg"></img></a>
						</div>
						<div class="col-5">
							<a href="http://www.linkedin.com"><img src="pictures/li.png"></img></a>
						</div>				
			</div>
		</div>
	</div>
	
	<?php include("partials/footer.php");?>
<!----JS for toggle menu---->
	<script>
		var MenuItems = document.getElementById("MenuItems");
		MenuItems.style.maxHeight = "0px";
		function menutoggle(){
			if(MenuItems.style.maxHeight == "0px")
			{
				MenuItems.style.maxHeight = "200px";
			}
			else
			{
				MenuItems.style.maxHeight = "0px";
			}
		}
	</script>
</body>