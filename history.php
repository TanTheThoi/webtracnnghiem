<?php 
  include 'history_get.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

    <style>
    .table {
        width: 50%;
        margin-right: auto;

        margin-left: auto;
    }
    header >div{
      display: flex;
      justify-content: space-between;
    }
    
    #return{
      width: 50px;
      height: 50px;
      margin: 20px;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch sử</title>
    <header>
      <div>
      <h1>Lịch sử thi</h1>
      <button class="btn btn-danger" id="return">X</button>
      </div>
      
    </header>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Môn học</th>
                <th scope="col">Thời gian</th>
                <th scope="col">Điểm</th>
            </tr>
        </thead>
        <tbody>
            <?php
$data1 ='';
$index = 1;
  if (!empty($results)) {
    foreach ($results as $result) {
      
      $data1.='<tr>';
      $data1.='<td>'.$index.'</td>';
      $data1.='<td>'.$result['mon'].'</td>';
      $data1.='<td>'.$result['thoi_gian'].'</td>';
      $data1.='<td>'.$result['diem'].'</td>';
      $data1.='</tr>';

      $index++;
    }
    echo($data1);
  }
  

?>
        </tbody>
    </table>
</body>
<script>
  $('#return').click(function(){
    window.location.href = "index.php";
  })
</script>
</html>