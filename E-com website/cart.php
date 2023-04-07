<?php
 session_start();
include("partials/getprodutfunction.php");
include("partials/function.php");
 
		
		 if(!isset($_SESSION['login'])){
           if( $_SESSION['login'] == false){
			session_unset();
			session_destroy();
			header('location:index.php');
		   }
		}
?>
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

	
		<?php include("partials/nav.php");?>

	<!----cart details--->
	<div class="small-container cart-page">
		<table>
			<tr>
				<th>Products</th>
				<th>Quantity</th>
				<th>Subtotal</th>
			</tr>
			<?php
			$cid = getUserId($_SESSION['name']);
			$id = $cid;
			// echo $id."<br>";
			 $data = getCartItem($id);
			 $item = mysqli_num_rows($data);
			 $subtotal = 0;
			if($item == 0){
				echo "<h1>Please add Product in cart!</h1>";
				
			}
			else{
			 while($row = mysqli_fetch_assoc($data)){
				$pid = $row['P_id'];
				$img=$row['Image'];
				$pname=$row['P_name'];
				$price=$row['Price'];
				$quantity=1;
				// $total = $quantity * $price;
				$total = $quantity * $price;
				$subtotal = $subtotal + $total;
				// print_r($row);
			 ?>
				

<tr>
    <td>
        <div class="cart-info">
		<img src="pictures/<?php echo $img;?>"></img>
		<div>
			<p><?php echo $pname;?></p>
			<small><?php echo $price;?></small>
			<br>
			<a href="partials/cartMange.php?pid=<?php echo $pid;?>&remove=1" id="remove" style="color:red;">Remove</a>
		</div>
	</div>
</td>
<td><input type="number" value="1" min="1" ></td>
 <td style="text-align:right;">₹<?php echo $total;?></td> 
</tr><?php } }?>
			 </table>	
<div class="total-price">
	<table>
		<tr>
			<td>Subtotal</td>
			<td>₹<?php echo $subtotal;?></td>
		</tr>
		<tr>
			<td>Tax</td>
			<td>₹50</td>
		</tr>
		<tr>
			<td>Total</td>
			<td>₹<?php echo $subtotal+50;?></td>
		</tr>
	</table>
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