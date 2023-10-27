<?php include "../Models/connect.php";
  $index = 1;
  $search = $_GET['search'];
  $page = $_GET['page'];
  $sql = "SELECT * FROM tbl_cau_hoi WHERE cau_hoi like '%".$search."%' limit 10 offset ".($page-1)*10;
  $data = new Questions();
  $questionDatas = $data->getDataFromDatabase($sql);
  $data1 ='';
  if (!empty($questionDatas)) {
    foreach ($questionDatas as $data) {

      $data1.='<tr id='.$data['id'].'>';
      $data1.='<th scope="row">' . $index . ' ' . '</th>';
      $data1.="<td style='text-overflow: ellipsis;
      max-width: 500px; white-space: nowrap; 
      overflow: hidden;'>" . $data['cau_hoi'] . "</td>";
      
      $data1.='<td><button type="" class=" btn btn-info btn-sm-12" name="view">Xem</button>&nbsp;';
      //$data1.='<td><input type="button" name="view" id="" class=" btn btn-info btn-sm-12" value="xem">&nbsp;';
      $data1.='<button type="" class=" btn btn-warning btn-sm-12" name = "update" style="color:white">Sửa</button>&nbsp;';
      $data1.='<button type="" class=" btn btn-danger btn-sm-12" name="delete">Xóa</button></td>';

      $data1.="</tr>";
      
      $index++;
    }
    echo($data1);
        }
        ?>