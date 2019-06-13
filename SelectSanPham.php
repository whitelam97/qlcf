<?php
include ("connect.php");

$sql="SELECT * FROM `sanpham` ";

$r = mysqli_query($con, $sql);

$tkb = array();
while ($row = mysqli_fetch_assoc($r)){
    array_push($tkb, new SelectSanPham(
        $row['masp'],
        $row['tensp'],
        $row['giasp']
    ));
}
echo json_encode($tkb,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

mysqli_close($con);

class SelectSanPham{
    var $masp;
    var $tensp;
    var $giasp;

    public function SelectSanPham($masp, $tensp, $giasp)
    {
        $this->masp = $masp;
        $this->tensp = $tensp;
        $this->giasp = $giasp;
    }


}

?>
