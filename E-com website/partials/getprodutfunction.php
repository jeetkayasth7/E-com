<?php
    include("config.php");
    $conn = db_connect();

    function getFeturedProduct(){
        global $conn;
        $sql = "select * from products order by date_added DESC LIMIT 10";
        $sql_res = mysqli_query($conn,$sql);
        return $sql_res;
    }

    function getCategory(){
       global $conn;
       $sql = "select * from category";
        $sql_res = mysqli_query($conn,$sql);
        return $sql_res;
    }

   function getProductByID($pid){
    global $conn;
    $sql = "select * from products where P_id = $pid";
    // $sql = "select * from products";
    $res = mysqli_query($conn,$sql);
    return $res;
   }

   function getProductByCategory($cid){
    global $conn;
    $sql = "select * from products where P_category = $cid";
    $res = mysqli_query($conn,$sql);
    return $res;
   }

   function getSimillarProduct($pid,$cid){
    global $conn;
    $sql = "select  *  from products where  P_id IN(SELECT P_id from products where P_category = $cid AND NOT(P_id=$pid)) LIMIT 5";
    $res = mysqli_query($conn,$sql);
    return $res;
   }

   function getCartItem($cid){
    global $conn;
    $sql = "select DISTINCTROW products.Image,products.P_name,products.P_id,products.Price,cart_detail.quantity from products,cart_detail ,customer where products.P_id IN(SELECT DISTINCT cart_detail.p_id FROM category WHERE cart_detail.c_id= $cid);";
    $res = mysqli_query($conn,$sql);
    return $res;
   }


function printdata($data){
    while ($row = mysqli_fetch_assoc($data)) {
        # code...
        echo $row['P_id'].":".$row['P_name']."<br>";
    }

 }    
?>