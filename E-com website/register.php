<?php 
include("partials/config.php");
$conn = db_connect();
if(isset($_POST["Register"])){
    $name = $_POST['u_name'];
    $password = $_POST['n_pass'];
    $cpassword = $_POST['c_pass'];
    $email = $_POST['u_email']; 

$sql =  "SELECT * FROM `customer` where `Email` ='$email'";

$sql = mysqli_query($conn,$sql);
$num = mysqli_num_rows($sql);
if($num == 1){
   $showAlert = true;
   header('location:account.php');
    
}
else{
    if($password == $cpassword){
        $hasspass = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `customer`(`C_name`,`Password`,`Email`) VALUES('$name','$hasspass','$email')";
        $sql = mysqli_query($conn,$sql);
        $showsuccess = true;
        header('location:account.php');
    }
    else{
        $showerror = true;
    }
}
}   ?>