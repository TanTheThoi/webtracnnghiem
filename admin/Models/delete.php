<?php 
    include('connect.php');

    try {
        $id = $_POST['id'];
        $sql = "DELETE FROM tbl_cau_hoi WHERE id = '".$id."'";
        $data = new Questions;
        $conn = $data->getConn();
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Xoa thanh cong";
        }else{
            echo "Xoa khong thanh cong";
        }
    }catch(Exception $e){
        echo "khong xoa dc".$e;
    }
?>