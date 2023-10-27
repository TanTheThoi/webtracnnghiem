 <?php include "connect.php"; 
    
    //gán dữ liệu được post sang từ addQuestion
    $question = $_POST['question'];
    $option_a = $_POST['option_a'];
    $option_b = $_POST['option_b'];
    $option_c = $_POST['option_c'];
    $option_d = $_POST['option_d'];
    $answer = $_POST['answer'];
    $subject = $_POST['subject'];

    
    
    $sql = "insert into tbl_cau_hoi(cau_hoi, dapanA, dapanB, dapanC, dapanD, cautraloi, mon_hoc)
    values('$question','$option_a','$option_b','$option_c','$option_d','$answer', '$subject')";

    // echo($sql);

    // $sql = "insert into tbl_cau_hoi(cau_hoi ,dapanA ,dapanB ,dapanC ,dapanD ,cautraloi) ";
	// $sql = $sql."values('".$question."','".$option_a."','".$option_b."','".$option_c."','".$option_d."','".$answer."')";
    $data = new Questions;
    $conn = $data->getConn();
    mysqli_query($conn, $sql);
    

?> 