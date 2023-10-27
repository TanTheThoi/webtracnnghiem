<?php
    session_start();
   
    if($_SESSION['user']==''){
      
        header('Location: login.php');
    } else if($_SESSION['user']!='admin'){
      
        header('Location: index.php');
    } 
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Quản lý ngân hàng câu hỏi</title>
    <style>
        #header{
            display: flex;
            justify-content: space-between;
        }
        #btn_logout{
            width: 50px;
            height: 50px;
            font-size: 28px;
            line-height: 50px;
        }
        #btn_logout:hover{
            cursor: pointer;
        }
        
    </style>
</head>

<body>
    <header>
        <div class="header" id="header">
            <h3>Quản lý ngân hàng câu hỏi</h3>
            <a href="../destroy_session.php" id="logout">
            <i class="fa fa-sign-out" id="btn_logout" aria-hidden="true"></i>
            </a>    
        </div>

    </header>
    <div class="col-sm-12">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Tìm kiếm" id="txtSearch" />
            <div class="input-group-btn">
                <button class="btn btn-primary" type="submit" id="btnSearch">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Câu hỏi</th>
                <th scope="col">Lựa chọn</th>

            </tr>
        </thead>
        <tbody id="questions">
            <button id="btn-question" type="" class="btn-add btn-success">+</button>
        </tbody>
    </table>

    <footer>
        <nav aria-label="Page navigation example">
            <ul class="pagination" id="pagination">
            </ul>
        </nav>
    </footer>

</body>

</html>
<?php include "Views/addQuestions.php";?>
<script type="text/javascript">
var page = 1;
$(document).ready(function() {
    $('#btnSearch').click();
})
//hiển thị bảng thêm câu hỏi
$("#btn-question").click(function() {
    $('#add-questions').modal();
    $('#txtQuestionId').val('');
    $('#txaQuestion').val('');
    $('#txaOptionA').val('');
    $('#txaOptionB').val('');
    $('#txaOptionC').val('');
    $('#txaOptionD').val('');
    $('#rdOptionA').prop('checked', false);
    $('#rdOptionB').prop('checked', false);
    $('#rdOptionC').prop('checked', false);
    $('#rdOptionD').prop('checked', false);
    $('#toan').prop('checked', false);
    $('#anh').prop('checked', false);
    $('#van').prop('checked', false);

    $('#txaQuestion').attr('readonly', false);
    $('#txaOptionA').attr('readonly', false);
    $('#txaOptionB').attr('readonly', false);
    $('#txaOptionC').attr('readonly', false);
    $('#txaOptionD').attr('readonly', false);

    $('#rdOptionA').attr('disabled', false);
    $('#rdOptionB').attr('disabled', false);
    $('#rdOptionC').attr('disabled', false);
    $('#rdOptionD').attr('disabled', false);

    $('#toan').attr('disabled', false);
    $('#anh').attr('disabled', false);
    $('#van').attr('disabled', false);
    $('#btnSubmit').show();

    // $('#txaQuestion').attr('readonly', false);
    // $('#txaOptionA').attr('readonly', false);
    // $('#txaOptionB').attr('readonly', false);
    // $('#txaOptionC').attr('readonly', false);
    // $('#txaOptionD').attr('readonly', false);

    // $('#rdOptionA').attr('disabled', false);
    // $('#rdOptionB').attr('disabled', false);
    // $('#rdOptionC').attr('disabled', false);
    // $('#rdOptionD').attr('disabled', false);
    
});




//Phần thêm, sửa, xóa
//hiển thị thông tin câu hỏi
$(document).on('click', "button[name = 'view']", function() {


    var trid = $(this).closest('tr').attr('id');

    getDetail(trid);

    $('#txaQuestion').attr('readonly', 'readonly');
    $('#txaOptionA').attr('readonly', 'readonly');
    $('#txaOptionB').attr('readonly', 'readonly');
    $('#txaOptionC').attr('readonly', 'readonly');
    $('#txaOptionD').attr('readonly', 'readonly');

    $('#rdOptionA').attr('disabled', 'readonly');
    $('#rdOptionB').attr('disabled', 'readonly');
    $('#rdOptionC').attr('disabled', 'readonly');
    $('#rdOptionD').attr('disabled', 'readonly');

    $('#toan').attr('disabled', 'readonly');
    $('#anh').attr('disabled', 'readonly');
    $('#van').attr('disabled', 'readonly');

    $('#btnSubmit').hide();
});

//sửa câu hỏi
$(document).on('click', "button[name = 'update']", function() {

    readData($('txtSearch').val());
    var trid = $(this).closest('tr').attr('id');

    getDetail(trid);

    $('#txaQuestion').attr('readonly', false);
    $('#txaOptionA').attr('readonly', false);
    $('#txaOptionB').attr('readonly', false);
    $('#txaOptionC').attr('readonly', false);
    $('#txaOptionD').attr('readonly', false);

    $('#rdOptionA').attr('disabled', false);
    $('#rdOptionB').attr('disabled', false);
    $('#rdOptionC').attr('disabled', false);
    $('#rdOptionD').attr('disabled', false);

    $('#toan').attr('disabled', false);
    $('#anh').attr('disabled', false);
    $('#van').attr('disabled', false);

    $('#txtQuestionId').val(trid);

    $('#btnSubmit').show();


});
//Xóa câu hỏi
$(document).on('click', "button[name = 'delete']", function() {

    var trid = $(this).closest('tr').attr('id');

    if (confirm("Ban co chac chan muon xoa cau hoi nay?") == true) {
        $.ajax({
            url: "Models/delete.php",
            type: "post",
            data: {
                id: trid
            },
            success: function(data) {
                readData($('#txtSearch').val());
            }
        });
    }

});
//Kết thúc phần thêm sửa xóa

$('#btnSearch').click(function() {
    let search = $('#txtSearch').val().trim();
    readData(search);
    Pagination(search);
})



function readData(search) {
    $.ajax({
        url: "Views/view.php",
        type: 'get',
        data: {
            search: search,
            page: page
        },
        success: function(data) {
            $('#questions').empty();
            $('#questions').append(data);
        }
    })
}

$('#txtSearch').on('keypress', function(e) {
    if (e.which === 13) {
        $('#btnSearch').click();
    }
});
//lấy dữ liệu từ nút mà người dùng ấn vào
function getDetail(id) {
    $.ajax({
        url: "Models/detail.php",
        type: 'get',
        data: {
            id: id
        },
        success: function(data) {


            var obj = jQuery.parseJSON(data);
            //console.log(obj);
            $('#add-questions').modal();
            $('#txaQuestion').val(obj['cau_hoi']);
            $('#txaOptionA').val(obj['dapanA']);
            $('#txaOptionB').val(obj['dapanB']);
            $('#txaOptionC').val(obj['dapanC']);
            $('#txaOptionD').val(obj['dapanD']);

            switch (obj['cautraloi']) {
                case "A":
                    $('#rdOptionA').prop('checked', true);
                    break;
                case "B":
                    $('#rdOptionB').prop('checked', true);
                    break;
                case "C":
                    $('#rdOptionC').prop('checked', true);
                    break;
                case "D":
                    $('#rdOptionD').prop('checked', true);
                    break;
            }

            switch (obj['mon_hoc']) {
                case "toan":
                    $('#toan').prop('checked', true);
                    break;
                case "anh":
                    $('#anh').prop('checked', true);
                    break;
                case "van":
                    $('#van').prop('checked', true);
                    break;
                
            }
        }
    })
}

$("#pagination").on("click", "li a", function(event) {
    event.preventDefault();
    page = $(this).text();
    readData($('#txtSearch').val());
});

function Pagination(search) {
    $.ajax({
        url: 'Models/pagination.php',
        type: 'get',
        data: {
            search: search
        },
        success: function(data) {

            if (data <= 1) {
                $('#pagination').hide();
            } else {
                $('#pagination').show();
                $('#pagination').empty();
                let pagi = '';
                for (i = 1; i <= data; i++) {
                    pagi += '<li class="page-item" ><a class="page-link" href="#">' + i + '</a></li>';
                }
                $('#pagination').append(pagi);
            }
        }
    });
}

//fix loi kieu nua mua do k fix duoc
$('.btnCancel').click(function() {
    readData($('#txtSearch').val());
});
$('.close').click(function() {
    readData($('#txtSearch').val());
});


</script>