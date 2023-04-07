<?php
include('cartfunction.php');
include('function.php');
session_start();
    if(isset($_GET['toadd'])){
      $pid = $_GET['pid'];
      if($_SESSION['login'] == false){
        header('location:..\product.php?id=$pid&login=true');
      }
      
      $cid = getUserId($_SESSION['name']);
      $exist = productexist((int)$_GET['pid'],$cid);
      if($exist){
        $showexist = true;
        header('location:..\product.php?id=$pid&exist=true');
      }
      else{
      $flag = addToCart($_GET['pid'],$cid);
      if($flag == true){
        $showsuccess = true;
        header('location:..\product.php?id='.$_GET['pid']);
      }
      else{
        $showalert = true;
      }
    }
  }
    elseif(isset($_GET['remove'])){
        $cid = getUserId($_SESSION['name']);
        $exist = productexist((int)$_GET['pid'],$cid);
        if($exist){
          $flag = RemoveToCart($_GET['pid'],$cid);
          if($flag == true){
            header('location:..\cart.php');
          }
        }
        else{
           echo "fail to remove";
        }
    }
?>