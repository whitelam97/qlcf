<?php
include("connect.php");

$masp=$_POST['masp'];
$manv=$_POST['manv'];
$maban=$_POST['maban'];
$tinhtrang=$_POST['tinhtrang'];


$query="INSERT INTO `phache` (`idpc`, `manv`, `masp`, `maban`, `tinhtrang`,`dalam`) VALUES (NULL, '$manv', '$masp', '$maban', '$tinhtrang','0')";

if (mysqli_query($con,$query)){
    echo "success";
}else{
    echo "error";
}

?>