<?php

    include("connect.php");

    $sql = "SELECT maban FROM `banghe`";

    $r = mysqli_query($con, $sql);
    $result = array();
        while ($row = mysqli_fetch_array($r)) {
            array_push($result, array(
                "maban" => $row['maban']
            ));
        }
        echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    mysqli_close($con);

?>


