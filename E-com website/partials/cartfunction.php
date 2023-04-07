<?php
include("getprodutfunction.php");
function addToCart($pid,$cid){
    global $conn;
    $product1 = getProductById($pid);
    $product1 = mysqli_fetch_assoc($product1);
    $pname = $product1['P_name'];
    $price = $product1['Price'];
   
    // // $sql = "INSERT INTO `cart_detail` '$product['Discount']')";
    // $sql = "insert into cart_detail(`p_id`, `p_name`, `price`, `c_id`) VALUES ($pid, '$pname',$price, $cid)";
    // $res = mysqli_query($conn,$sql);
    echo "product add to cart";
    $sql = " INSERT INTO cart_detail(p_id,p_name,price,c_id) VALUES ($pid,'$pname',$price,$cid)";
    $res = mysqli_query($conn,$sql);
    if($res){
        return  true;
    }
    else{
        return false;
    }
}

function productexist($pid,$cid){
    global $conn;
    $sql = "select * from cart_detail where p_id = $pid AND c_id = $cid";
    $res = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($res);
    if($num == 1){
        return true;
    }
    return false;
}

function RemoveToCart($pid,$cid){
    global $conn;
    $sql = "DELETE FROM cart_detail WHERE p_id=$pid AND c_id =$cid";
    $res = mysqli_query($conn,$sql);
    if($res){
        return  true;
    }
    else{
        return false;
    }

}
?>