<?php 
session_start();
 include("partials/getprodutfunction.php");
//  db_connect();
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
	
    
    <?php include('partials/nav.php');
		if(isset($_GET['login'])){
			echo '<script>
			 alert("Please login");
			 window.location.href = "products.php";
			</script>';
		}
	
	?>
	
	
	<div class="small-container1">
	<h1 class="title">Featured Products</h1>	
   <?php
   $data = getFeturedProduct();
   $counter =0;
//    echo mysqli_num_rows($data);
	  while($row = mysqli_fetch_assoc($data)){
		if($counter == 0){
			echo '<div class="row">';
		}
		$pname=$row['P_name'];
		$img=$row['Image'];
		$price=$row['Price'];
		$pid=$row['P_id'];
		echo '<div class="col-4">';?>
		<a href="product.php?id=<?php echo $pid;?>"><img src="pictures/<?php echo $img; ?>" width="250px" height="350px"></img></a>
		<h4><?php echo $pname; ?></h4>
		<p>$<?php echo $price; ?></p>				
	</div>
	<?php
		$counter++;
		if($counter == 4){
			echo "</div>";
			$counter = 0;
		}
		 
		
	}
	
	 
   
  ?>
      <!-- for($i=0;$i<) -->
		<!-- <div class="row">
		<div class="col-4">
				<img src="pictures/p9.jpg"></img>
				<h4>Dairy of Premium Paper with Black Marker</h4>
				<p>₹220</p>				
			</div>
			<div class="col-4">
				<img src="pictures/p10.jpg"></img>
				<h4>Fine Tip Marker-Black</h4>
				<p>₹40</p>
			</div>
			<div class="col-4">
				<img src="pictures/p11.jpg"></img>
				<h4>Yellow Pages With Straight Line 1-Ream</h4>
				<p>₹180</p>				
			</div>
			<div class="col-4">
				<img src="pictures/p12.jpg"></img>
				<h4>Pack Of 8 A4-Reams</h4>
				<p>₹1450</p>
			</div>
		</div>
	</div> -->
	<!-- <div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="pictures/p13.jpg" class="offer-img"></img>
				</div>
				<div class="col-2">
					<p>Exclusively available on Dunder Mifflin</p>
					<h1>Rotating Penstand</h1>
					<small>Pen stands are what make a study table, without a penstand it will be just another table at home. With the love 
					of stationary growing in present times we at MFPA understand your desire to keep your beloved stationary safe and on display.</small>
					<br><a href="single_product1.html" class="btn">Buy Now &#8594;</a>
				</div>
			</div>
		</div>
	</div> -->
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
	<div class="small-container1">
	<h1 class="title">PRODUCT CATEGORY</h1>
		
	<?php
	  $data = getCategory();
	  $cname;
	  $counter =0;
	  while($row = mysqli_fetch_assoc($data)){
		if($counter == 0){
			echo '<div class="row" id="category">';
		}
		$cid = $row['Ctg_id'];
		$cname = $row['Ctg_name'];
		$cimg;
	

	  echo '
		<div class="col-4">
				<a href="category.php"><img src="pictures/p1.jpg"></img></a>
				<h4>'.$cname.'</h4>
				<p>Category id:'.$cid.'</p>				
			</div>';
			$counter++;
			if($counter == 4){
				echo "</div>";
			}
			
	  }
		?>
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