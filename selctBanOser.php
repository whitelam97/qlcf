<?php

if($_SERVER['REQUEST_METHOD']=='GET') {

    $maban = $_GET['maban'];

    include("connect.php");


    $sql = "SELECT * FROM `phache`,sanpham WHERE maban='$maban' AND sanpham.masp=phache.masp and phache.tinhtrang=0";

    $r = mysqli_query($con, $sql);
    $result = array();
        while ($row = mysqli_fetch_array($r)) {
            array_push($result, new selctBanOser(
                 $row['masp'],
                $row['tensp'],
                $row['giasp'],
                $row['idpc']
            ));
        }
        echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);


    mysqli_close($con);
}
class selctBanOser{
    var $masp;
    var $tensp;
    var $giasp;
    var $idpc;

    /**
     * selctBanOser constructor.
     * @param $masp
     * @param $tensp
     * @param $giasp
     * @param $idpc
     */
    public function selctBanOser($masp, $tensp, $giasp, $idpc)
    {
        $this->masp = $masp;
        $this->tensp = $tensp;
        $this->giasp = $giasp;
        $this->idpc = $idpc;
    }


}
?>


