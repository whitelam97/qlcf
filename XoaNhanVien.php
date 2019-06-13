<?php
include("connect.php");
$manv=$_POST['manv'];
$query="DELETE FROM `nhanvien` WHERE `nhanvien`.`manv` ='$manv'";

if (mysqli_query($con,$query)){
    echo "success";
}else{
    echo "error";
}
?>