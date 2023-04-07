<?php 
require "partials/config.php";
$showalert = false;
$register = false;
$error = false;
$msg;
$conn = db_connect();
if(isset($_POST["Register"])){
    $name = $_POST['u_name'];
    $password = $_POST['n_pass'];
    $cpassword = $_POST['c_pass'];
    $email = $_POST['u_email']; 

$sql =  "SELECT * FROM `customer` where `Email` = '$email'";

$sql = mysqli_query($conn,$sql);
$num = mysqli_num_rows($sql);
if($num == 1){
    $showalert = true;
    $msg = "User Already Registered!";
	
}
else{
    if($password == $cpassword){
        $hasspass = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `customer`(`C_name`,`Password`,`Email`) VALUES('$name','$hasspass','$email')";
        $sql = mysqli_query($conn,$sql); 
        $register= true;
        $msg= "$name Registered successfully!";
       
    }
    else{
        $error = true;
        $msg = "Please match the password with confirm password!";
	
   
    }
  

}} 

if (isset($_POST["submit"])) {
	$email = $_POST['u_name'];
	$password = $_POST['u_pass'];
	// echo "GENERATED HASH".password_hash($password,PASSWORD_DEFAULT)."<br>";
	$sql =  "SELECT * FROM customer where Email ='$email'";
	$sql = mysqli_query($conn,$sql);
	//number of rows return by sql query with the help of mysqli_num_rows($answer)--this function return no of rows affetcted by query;
	$num = mysqli_num_rows($sql);
	//  echo "$num";
	if($num == 1){
		
		while($row = mysqli_fetch_assoc($sql)){
			//  echo "<br>dATABASE HASH".$row['password']."<br>";
			if(password_verify($password,$row['Password'])){
				// echo "true";
				session_start();
				$name = $row['C_name'];
				// echo $name;
				$_SESSION['login'] = true;
				$_SESSION['name'] = $name;
			  header('location:index.php');

		}
		else{
		    $error = true;
			$msg = "Invalid Credentials!";
		}	
	
	  }
	}
	 else{
		$showalert = true;
		$msg = "Entered Email id doesn't exists!";
  }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dunder Mifflin Website Design</title>
	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="stylesheet" href="css/alerts.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

	<div class="container">
		
	
    
    <?php include("partials/nav.php");
	 	//alerts
		if($showalert == true){
			echo '<label>
			<input type="checkbox" class="alertCheckbox" autocomplete="off" />
			<div class="alert warning">
			  <span class="alertClose">X</span>
			  <span class="alertText">'.$msg.'
				  <br class="clear"/></span>
			</div>
		  </label>';
		}

		if($register == true){
			echo '<label>
			<input type="checkbox" class="alertCheckbox" autocomplete="off" />
			<div class="alert success">
			  <span class="alertClose">X</span>
			  <span class="alertText">'.$msg.'
				  <br class="clear"/></span>
			</div>
		  </label>';	
		}

		if($error == true){
			echo '<label>
			<input type="checkbox" class="alertCheckbox" autocomplete="off" />
			<div class="alert error">
			  <span class="alertClose">X</span>
			  <span class="alertText">'.$msg.'
				  <br class="clear"/></span>
			</div>
		  </label>';
		}

	?>
   

	<div class="account-page">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="pictures/stationary.jpg" width="100%"></img>
			</div>
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn" method="post">
						<span onclick="login()">Login</span>
						<span onclick="register()">Register</span>
						<hr id="indicator">
					</div>
					
					<form id="LoginForm" name="loginform" method="POST">
						<input type="email" placeholder="Username" name="u_name">
						<input type="password" placeholder="Password" name="u_pass">
						<input type="submit" class="btn" name="submit" value="Login me">
						
					</form>
					<form id="RegForm" name="regform" method="POST">
						<input type="text" placeholder="Username" name="u_name">
						<input type="email" placeholder="Email" name="u_email">
						<input type="password" placeholder="Password" name="n_pass">
						<input type="password" placeholder="Password" name="c_pass">
						<input type="submit" class="btn" name="Register" value="Register me">
					</form>
					
				</div>
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
	<script>
	var LoginForm = document.getElementById("LoginForm");
	var RegForm = document.getElementById("RegForm");
	var indicator = document.getElementById("indicator");
	
	function register(){
	
		RegForm.style.transform = "translateX(0px)";
		LoginForm.style.transform = "translateX(0px)";
		indicator.style.transform = "translateX(100px)";
	}
	function login(){
	
		RegForm.style.transform = "translateX(300px)";
		LoginForm.style.transform = "translateX(300px)";
		indicator.style.transform = "translateX(0px)";
	}
	</script>
</body>
