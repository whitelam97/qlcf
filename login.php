<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $tk  = $_GET['tk'];
    $mk = $_GET['mk'];

    include ("connect.php");



    $sql="SELECT * FROM `nhanvien` WHERE tk='$tk' AND mk='$mk'";

    $r = mysqli_query($con,$sql);
    $res = mysqli_fetch_array($r);
    $result = array();
    if(sizeof($res)>0){
        array_push($result,array(
                "manv"=>$res['manv'],
                "tennv"=>$res['tennv'],
                "tk"=>$res['tk'],
                "mk"=>$res['mk'],
                "congviec"=>$res['congviec'],
            )
        );

        echo json_encode(array("login"=>$result),JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);


    }else {

        array_push($result,array(
                "login"=>"error",
            )
        );

        echo json_encode(array("login"=>$result));
    }

    mysqli_close($con);

}


?>

