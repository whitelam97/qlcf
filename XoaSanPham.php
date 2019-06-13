<?php
include("connect.php");
$masp=$_POST['masp'];

$query="DELETE FROM `sanpham` WHERE `sanpham`.`masp` = '$masp'";

if (mysqli_query($con,$query)){
    echo "success";
}else{
    echo "error";
}
?>