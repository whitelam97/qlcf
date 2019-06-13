<?php



    include("connect.php");


    $sql = "SELECT * FROM `phache`,sanpham WHERE sanpham.masp=phache.masp and phache.dalam=0";

    $r = mysqli_query($con, $sql);
    $result = array();
    while ($row = mysqli_fetch_array($r)) {
        array_push($result, new selectPhaChe(
            $row['maban'],
            $row['tensp'],
            $row['giasp'],
            $row['idpc']
        ));
    }
    echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);


    mysqli_close($con);

class selectPhaChe{
    var $maban;
    var $tensp;
    var $giasp;
    var $idpc;



    public function selectPhaChe($maban, $tensp, $giasp, $idpc)
    {
        $this->maban = $maban;
        $this->tensp = $tensp;
        $this->giasp = $giasp;
        $this->idpc = $idpc;
    }


}
?>


