<?php
include("connect.php");

$manv=$_POST['manv'];
$tennv=$_POST['tennv'];
$tk=$_POST['tk'];
$mk=$_POST['mk'];
$congviec=$_POST['congviec'];

$query="INSERT INTO `nhanvien` (`manv`, `tennv`, `tk`, `mk`, `congviec`) VALUES ('$manv', '$tennv', '$tk', '$mk', '$congviec');";

if (mysqli_query($con,$query)){
    echo "success";
}else{
    echo "error";
}

?>