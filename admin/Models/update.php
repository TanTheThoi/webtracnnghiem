<?php include "connect.php";
    $id = $_POST['id'];
    $question = $_POST['question'];
    $option_a = $_POST['option_a'];
    $option_b = $_POST['option_b'];
    $option_c = $_POST['option_c'];
    $option_d = $_POST['option_d'];
    $answer = $_POST['answer'];
    $subject = $_POST['subject'];
    
    $sql = "UPDATE tbl_cau_hoi "; 
		$sql = $sql."SET cau_hoi ='".$question."',";
		$sql = $sql."dapanA ='".$option_a."',";
		$sql = $sql."dapanB ='".$option_b."',";
		$sql = $sql."dapanC ='".$option_c."',";
		$sql = $sql."dapanD ='".$option_d."',";
		$sql = $sql."cautraloi ='".$answer."',";
        $sql = $sql."mon_hoc = '".$subject."'";
		$sql = $sql."WHERE id = '".$id."'";
        

    
    $data = new Questions;

    $conn = $data->getConn();

    $result = mysqli_query($conn,$sql);

    if($result){
        echo("Thanh cong");
    }else{
        echo("That bai");
    }

?>