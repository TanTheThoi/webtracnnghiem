<?php
    include "connect.php";
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM tbl_cau_hoi WHERE id = '".$id."'";
    //$sql = "SELECT * FROM tbl_cau_hoi WHERE id = 1";
    $data = new Questions;

    $conn = $data->getConn();

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);

    echo json_encode($row, JSON_UNESCAPED_UNICODE);
?>