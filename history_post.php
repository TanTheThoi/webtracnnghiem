<?php
    session_start();
    include "admin/Models/connect.php";
    $id = $_SESSION['id'];
    $thoiGian = $_POST['thoiGianLam'];
    $diem = $_POST['diem'];
    $mon = $_POST['mon'];
    if($mon =="toan"){
        $mon = "Toán";
    }
    if($mon =="van"){
        $mon = "Văn";
    }
    if($mon =="anh"){
        $mon = "Tiếng Anh";
    }
    $data = new Questions;
    
    
    $conn=$data->getConn();

    $sql = "INSERT INTO tbl_history(thoi_gian, diem, idSV, mon) VALUES ('$thoiGian', '$diem', '$id', '$mon')";
    $result = mysqli_query($conn, $sql);
    
    
?>