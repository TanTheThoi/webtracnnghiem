<?php
    include "admin/Models/connect.php";
    $idMonHoc = $_GET['idMonHoc']; 
    $data = new Questions;
    $sql = "SELECT * FROM tbl_cau_hoi WHERE mon_hoc = '$idMonHoc' ORDER BY RAND() LIMIT 10";
    $conn=$data->getConn();
    $result = mysqli_query($conn, $sql);
    $data1 = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $data1[] = $row;
            }

            
    echo json_encode($data1, JSON_UNESCAPED_UNICODE);
?>