<?php

include("connect.php");

$sql = "SELECT * FROM `sanpham`";

$r = mysqli_query($con, $sql);
$result = array();

    while ($row = mysqli_fetch_array($r)) {
        array_push($result, array(
            "masp" => $row['masp'],
            "tensp" => $row['tensp']
        ));
    }
    echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

mysqli_close($con);

?>


