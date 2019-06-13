<?php
include("connect.php");

$maban=$_POST['maban'];
$tenban=$_POST['tenban'];
$tinhtrangban=$_POST['tinhtrangban'];

$query="INSERT INTO `banghe` (`maban`, `tenban`, `tinhtrangban`) VALUES ('$maban', '$tenban', '$tinhtrangban')";
if (mysqli_query($con,$query)){
    echo "success";
}else{
    echo "error";
}

?>