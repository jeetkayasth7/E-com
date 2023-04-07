<?php 
session_start();
 include("partials/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order place</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="stylesheet" href="css/alerts.css">
</head>
<body>
<?php include("partials/nav.php");?>
       <center><h1>Dear Customer, Your Order has been placed Successfully. Thank You!</h1></center>
        
    
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
</body>
</html>