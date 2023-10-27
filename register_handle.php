
<?php
session_start();
include "admin/Models/connect.php";
    
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);
        
            $data = new Questions;
            $checkAcount = "SELECT * FROM tbl_user WHERE user = '$username'";
            
            $conn = $data->getConn();
            $result = mysqli_query($conn, $checkAcount);
            if($result->num_rows>0){
                echo(0);
            }else{
            $sql = "INSERT INTO tbl_user (user, password) VALUES ('$username', '$password')";

            $result1 = mysqli_query($conn, $sql);
                echo(1);
            }
            //$data->getDataFromDatabase($sql);
   
?>