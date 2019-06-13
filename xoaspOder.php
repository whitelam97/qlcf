<?php
include("connect.php");
$idpc=$_POST['idpc'];

$query="DELETE FROM `phache` WHERE `phache`.`idpc` = '$idpc'";

if (mysqli_query($con,$query)){
    echo "success";
}else{
    echo "error";
}
?>