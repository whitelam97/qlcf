<?php



include("connect.php");


$sql = "SELECT * FROM `phache`,sanpham,nhanvien WHERE sanpham.masp=phache.masp and phache.tinhtrang=1 AND phache.manv=nhanvien.manv";

$r = mysqli_query($con, $sql);
$result = array();
while ($row = mysqli_fetch_array($r)) {
    array_push($result, new selectThongKe(
        $row['manv'],
        $row['tensp'],
        $row['giasp']

    ));
}
echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);


mysqli_close($con);

class selectThongKe{
    var $manv;
    var $tensp;
    var $giasp;


    public function selectThongKe($manv, $tensp, $giasp)
    {
        $this->manv = $manv;
        $this->tensp = $tensp;
        $this->giasp = $giasp;
    }


}
?>


