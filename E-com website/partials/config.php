<?php
 $login=false;
 $logout = false;
 $username;
$fail = false;
$signup = false;
$showalert = false;
$showerror = false;
$showsuccess = false;

 function db_connect(){
$servername = "localhost";
$username = "root";
$password = "";
$database = "project1";
$fail = false;
//to connect with database these parameters are essential.and we use mysqli_connect($servername,$username,$password);
$conn = mysqli_connect($servername,$username,$password,$database,3307);

if($conn){
    // echo "Connected with server successfully!";
//    echo "Connected with ".$database." successfully!";
   return $conn;
}
else{
    //to display any connection related error we use mysqli_connect_error();
    // echo "failed to Connected with server successfully!";
    //echo "failed to Connected with ".$database." successfully!";
    //echo "Error:".$conn.mysqli_connect_error();
    $fail = true;  
}
 }


       