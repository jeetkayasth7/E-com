<?php 
session_start();
 include("partials/config.php");
 db_connect();
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
</head>
<body>
	
	
	<div class="container">

    
   
	<?php include('partials/nav.php');?>


	
	
	<div class="small-container">
	<h1 class="title">About Us</h1>
	<div class="row">
		<div class="col-2">
			<img src="pictures/logo2.jpg"></img>
		</div>
		<div class="col-2">
			<p>Dunder Mifflin Paper Company, Inc. (Stock Symbol DMI) is a fictional paper company in the television series The Office. The Scranton, Pennsylvania Branch of Dunder Mifflin serves as the main setting for the series.
The company was founded by Robert Dunder and Robert Mifflin in 1949, where they supplied metal brackets. Eventually, the company started selling paper and opened several branches across the Northeastern United States.
In 2009, the company went bankrupt, and was bought by printer company Sabre. In 2012, Sabre was dissolved and the company became Dunder Mifflin once again.
		</p>
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