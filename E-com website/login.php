<?php
require "partials/config.php";
$conn = db_connect();

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["submit"])) {
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
             echo $name;
			  $_SESSION['login'] = true;
			  $_SESSION['name'] = $name;
			  header('location:index.php');

		}
		else{
			$showerror = true;
			
		}
		
	
	  }
	}
	 else{
	$showalert = true;
  }
} 
?>