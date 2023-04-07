<?php
session_start();
  include("partials/getprodutfunction.php");
  $pname;
		$img;
		$price;
		$pid;
		$cid;
  if(isset($_GET['id'])){
	$data = getProductByID($_GET['id']);
	$row = mysqli_fetch_assoc($data);
		$pname=$row['P_name'];
		$img=$row['Image'];
		$price=$row['Price'];
		$pid=$row['P_id'];
		$cid=$row['P_category'];
		$desc=$row['P_desc'];
		$qty = $row['Stock'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <div class="container">
      
			<?php include('partials/nav.php');?>
    
       
        
    <div class="small-container single-product">
		<div class="row">
			<div class="col-2">
                <img src="pictures/<?php echo $img;?>" width="100%" id="pimg"></img></div>
			<div class="col-2">
			
				<p></p>
				<h1 id="pname"><?php echo $pname; ?></h1>
				<h4 id="price">₹<?php echo $price; ?></h4>	

				<input type="number" value=<?php echo $qty;?> readonly=true>
			
			<a href="partials/cartMange.php?pid=<?php echo $pid;?>&toadd='true'" class="btn">
			Add to cart</a>
				<h3>Product Detail</h3>
				<p class="desc"><?php echo $desc; ?></p>
				
			</div>
		</div>
	</div>
    <div class="small-container1">
	<h1 class="title">Simillar Products</h1>	
   <?php
   $data = getSimillarProduct($pid,$cid);
	 echo '<div class="row">';
	  while($row = mysqli_fetch_assoc($data)){
		
		$pname=$row['P_name'];
		$img=$row['Image'];
		$price=$row['Price'];
		$pid=$row['P_id'];
		echo '<div class="col-4">';?>
		<a href="product.php?id=<?php echo $pid;?>"><img src="pictures/<?php echo $img; ?>"></img></a>
		<h4><?php echo $pname; ?></h4>
		<p>$<?php echo $price; ?></p>				
	</div>
	<?php
	  }
	 echo "</div>";
  ?>

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
<script src="getdata.js"></script>
</html>