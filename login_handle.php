
<?php
session_start();
include "admin/Models/connect.php";
    
        $username = $_GET['username'];
        $password = $_GET['password'];
        $password_md5 = md5($password);
        
        
            $data = new Questions;
            $sql = "SELECT * FROM tbl_user WHERE user = '$username' AND password = '$password_md5'";
            $conn = $data->getConn();
            $result = mysqli_query($conn, $sql);
            //$data->getDataFromDatabase($sql);
            $row = mysqli_fetch_array($result);
            
            if($result->num_rows==0){
                
                echo json_encode(array());

            }else{
                $id = $row['id'];
                $_SESSION['id'] = $id;
                $_SESSION['user'] = $username;
                $_SESSION['login'] = true;
                
                echo json_encode($row, JSON_UNESCAPED_UNICODE);
                
                
            }
            
            
        
    
?>