<?php
include("connect.php");

$masp=$_POST['masp'];
$tensp=$_POST['tensp'];
$giasp=$_POST['giasp'];


$query="INSERT INTO `sanpham` (`masp`, `tensp`, `giasp`) VALUES ('$masp', '$tensp', '$giasp')";

if (mysqli_query($con,$query)){
    echo "success";
}else{
    echo "error";
}

?>