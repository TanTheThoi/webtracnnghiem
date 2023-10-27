<?php
    include "connect.php";
    $search = $_GET['search'];

    $data = new Questions;
    $conn = $data->getConn();
    $sql = "SELECT * FROM tbl_cau_hoi where cau_hoi like '%".$search."%'";
	
    $result = mysqli_query($conn, $sql);
	$count = $result->num_rows;

	$pages = $count%10==0?$count/10:floor($count/10)+1;

	echo json_encode($pages,JSON_UNESCAPED_UNICODE);
?>