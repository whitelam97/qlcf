<?php
include("connect.php");
$maban=$_POST['maban'];
$query="DELETE FROM `banghe` WHERE `banghe`.`maban` = '$maban'";
if (mysqli_query($con,$query)){
    echo "success";
}else{
    echo "error";
}
?>