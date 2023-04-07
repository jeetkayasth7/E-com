<?php 
 include("partials/config.php");
session_start();

 if(isset($_SESSION['login']) == false){
	session_unset();
 }
 
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Dunder Mifflin Website Design</title>
	
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="stylesheet" href="css/alerts.css">
	
	
</head>
<body>
	
	<div class="container">	
		
		
		<?php include("partials/nav.php");
			if(isset($_SESSION['login'])){
				echo '<label>
				<input type="checkbox" class="alertCheckbox" autocomplete="off" />
				<div class="alert success">
				  <span class="alertClose">X</span>
				  <span class="alertText">Welcome,'.$_SESSION['name'].' You logged in successfully!
					  <br class="clear"/></span>
				</div>
			  </label>';
			}
		?>
		
		
		<div class="row">
			<div class="col-2">
				<h1>One stop destination to all <br>your stationary needs!! </h1>
				<a href="products.php" class="btn">Explore Now &#8594;</a>
			</div>
			<div class="col-2">
				<img src="pictures/stationary.jpg" width="555px"></img>
		</div>
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
	<!-- <script>
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
	</script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>

</html>