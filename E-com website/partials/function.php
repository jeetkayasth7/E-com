<?php

function getUserId($name){
    global $conn;
    $sql1 = "SELECT C_id from customer where C_name = '$name';";
    $res1 = mysqli_query($conn,$sql1);
    $res1 = mysqli_fetch_assoc($res1);
    return (int)$res1['C_id'];  
   }
?>