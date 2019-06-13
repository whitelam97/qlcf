<?php
include ("connect.php");

$sql="SELECT * FROM `nhanvien` ";

$r = mysqli_query($con, $sql);

$tkb = array();
while ($row = mysqli_fetch_assoc($r)){
    array_push($tkb, new selectnhanvien(
        $row['manv'],
        $row['tennv'],
        $row['tk'],
        $row['mk'],
        $row['congviec']
    ));
}
echo json_encode($tkb,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

mysqli_close($con);

class selectnhanvien{
    var $manv;
    var $tennv;
    var $tk;
    var $mk;
    var $congviec;

    /**
     * selectnhanvien constructor.
     * @param $manv
     * @param $tennv
     * @param $tk
     * @param $mk
     * @param $congviec
     */
    public function selectnhanvien($manv, $tennv, $tk, $mk, $congviec)
    {
        $this->manv = $manv;
        $this->tennv = $tennv;
        $this->tk = $tk;
        $this->mk = $mk;
        $this->congviec = $congviec;
    }


}

?>
