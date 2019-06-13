<?php
include("connect.php");
$idpc=$_POST['idpc'];

$query="UPDATE `phache` SET `dalam` = '1' WHERE `phache`.`idpc` ='$idpc'";

if (mysqli_query($con,$query)){
    echo "success";
}else{
    echo "error";
}
?>