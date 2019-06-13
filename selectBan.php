<?php
include ("connect.php");

$sql="SELECT * FROM `banghe` ";

$r = mysqli_query($con, $sql);

$tkb = array();
while ($row = mysqli_fetch_assoc($r)){
    array_push($tkb, new selectBan(
        $row['maban'],
        $row['tenban'],
        $row['tinhtrangban']
    ));
}
echo json_encode($tkb,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

mysqli_close($con);

class selectBan{
    var $maban;
    var $tenban;
    var $tinhtrangban;


    public function selectBan($maban, $tenban, $tinhtrangban)
    {
        $this->maban = $maban;
        $this->tenban = $tenban;
        $this->tinhtrangban = $tinhtrangban;
    }



}

?>
