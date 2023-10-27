<?php
    session_start();
    include "admin/Models/connect.php";
    $id = $_SESSION['id'];
    $data = new Questions;
    
    $conn=$data->getConn();

    $sql = "SELECT * FROM tbl_history WHERE idSV = '$id'";
    $results = $data->getDataFromDatabase($sql);
    
    
?>