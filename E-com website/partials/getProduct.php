<?php
   require "config.php";
    $conn = db_connect();
  
    $error = "Failed to fetch";
    if(isset($_GET['id'])){
        global $conn;

    $pid = $_GET['id'];
    $sql = "select * from products where P_id = $pid";
    // $sql = "select * from products";
    $res = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($res);
    echo print_r($data);
    if($res){
        $msg="Product not found";
    }
    $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo print_r($data);
    exit(json_encode($data));
}
elseif(isset($_GET['iscategory']) && $_GET['iscategory'] == true){
    $sql = "select *  from category";
    $res = mysqli_query($conn,$sql);
       $data = mysqli_fetch_assoc($res);
       echo print_r($data);
       if(!$res){
           $msg="Faild to fetch category";
        }
        $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
        echo print_r($data);
        exit(json_encode($data));
    }
    elseif(isset($_GET['categoryid'])){
        $cid = $_GET['categoryid'];
        $sql = "select * from products where P_category = $cid";
        $res = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($res);
        echo print_r($data);
        if(mysqli_num_rows($res) < 1){
            $msg="Failed to fetch category vice";
        }
        $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
        echo print_r($data);
        exit(json_encode($data));
    }


 
?>