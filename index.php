<?php
    session_start();

    
    
    if($_SESSION['user']==''){
      
        header('Location: login.php');
    }  
    if($_SESSION['user']=='admin'){
      
        header('Location: admin/index.php');
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


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thi trắc nghiệm</title>
    <style>
    body {
        font-family: 'Noto Sans', sans-serif;
        margin: 0;
        width: 100%;
        height: 100vh;
        background: #ffffff;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    header {
        width: 100%;
        background: #ffffff;
        height: 60px;
        line-height: 60px;
        border-bottom: 1px solid #dddddd;
    }

    .hamburger {
        background: none;
        position: absolute;
        top: 0;
        right: 0;
        line-height: 45px;
        padding: 5px 15px 0px 15px;
        color: #999;
        border: 0;
        font-size: 1.4em;
        font-weight: bold;
        cursor: pointer;
        outline: none;
        z-index: 10000000000000;
    }

    .cross {
        background: none;
        position: absolute;
        top: 0px;
        right: 0;
        padding: 7px 15px 0px 15px;
        color: #999;
        border: 0;
        font-size: 3em;
        line-height: 65px;
        font-weight: bold;
        cursor: pointer;
        outline: none;
        z-index: 10000000000000;
    }

    .menu {
        z-index: 1000000;
        font-weight: bold;
        font-size: 0.8em;
        width: 100%;
        background: #f1f1f1;
        position: absolute;
        text-align: center;
        font-size: 12px;
    }

    .menu ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
        list-style-image: none;
    }

    .menu li {
        display: block;
        padding: 15px 0 15px 0;
        border-bottom: #dddddd 1px solid;
    }

    .menu li:hover {
        display: block;
        background: #ffffff;
        padding: 15px 0 15px 0;
        border-bottom: #dddddd 1px solid;
    }

    .menu ul li a {
        text-decoration: none;
        margin: 0px;
        color: #666;
    }

    .menu ul li a:hover {
        color: #666;
        text-decoration: none;
    }

    .menu a {
        text-decoration: none;
        color: #666;
    }

    .menu a:hover {
        text-decoration: none;
        color: #666;
    }

    .glyphicon-home {
        color: white;
        font-size: 1.5em;
        margin-top: 5px;
        margin: 0 auto;
    }

    header {
        display: inline-block;
        font-size: 12px;
    }

    span {
        padding-left: 20px;
    }

    a {
        color: #336699;
    }
    </style>
</head>
<header>
    <button class="hamburger">&#9776;</button>
    <button class="cross">&#735;</button>
</header>

<body>
    <div class="menu">
        <ul>
            <a href="#">
                <li id="toan" class="mon">Toán</li>
            </a>
            <a href="#">
                <li id="van" class="mon">Văn</li>
            </a>
            <a href="#">
                <li id="anh" class="mon">Anh</li>
            </a>
            <a href="history.php" id="history">
                <li>Lịch sử thi</li>
            </a>
            <a href="destroy_session.php" id="logout">
                <li>Đăng xuất</li>
            </a>
        </ul>
    </div>
    <div class="container">
        <div class="panel-group">
            <div class="panel panel-warning">
                <div class="panel-heading">Thi trắc nghiệm môn: <span id="tenmonhoc" style="padding: 0px"></span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button class="btn btn-success" id="btnStart">Bắt đầu</button>
                        </div>
                        <div class="col-sm-12 text-right" id="countdown">
                            <div>Thời gian: <span id="time" style="padding: 0px"></span></div>
                        </div>
                    </div>
                    <div id="questions"></div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-warning" id="btnEnd">Kết thúc bài thi</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h4 id='mark' class="text-info"></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
var idMonHoc = "";
const savedId = localStorage.getItem('selectedId');

    if (savedId == null) {
        // Áp dụng logic cho id đã lưu ở đây (ví dụ: thêm lớp hoặc thực hiện hành động nào đó)
        
        idMonHoc = 'toan';
        $('#tenmonhoc').text("Toán");
    } else {

        idMonHoc = savedId;
        if (idMonHoc == 'toan') {
            $('#tenmonhoc').text("Toán");
        }

        if (idMonHoc == 'anh') {
            $('#tenmonhoc').text("Anh");
        }

        if (idMonHoc == 'van') {
            $('#tenmonhoc').text("Văn");
        }
    }
    console.log( savedId);
console.log(typeof idMonHoc);
$(document).ready(function() {
    $('#btnEnd').hide();
    $('#countdown').hide();

    $(".cross").hide();
    $(".menu").hide();
    $(".hamburger").click(function() {
        $(".menu").slideToggle("slow", function() {
            $(".hamburger").hide();
            $(".cross").show();
        });
    });



    $(".cross").click(function() {
        $(".menu").slideToggle("slow", function() {
            $(".cross").hide();
            $(".hamburger").show();
        });
    });
    
     //const savedId = localStorage.getItem('selectedId');
    //  console.log( savedId);
    // if (savedId == null) {
    //     // Áp dụng logic cho id đã lưu ở đây (ví dụ: thêm lớp hoặc thực hiện hành động nào đó)
    //     idMonHoc = 'toan';
    //     $('#tenmonhoc').text("Toán");
    // } else {

    //     idMonHoc = savedId;
    //     if (idMonHoc == 'toan') {
    //         $('#tenmonhoc').text("Toán");
    //     }

    //     if (idMonHoc == 'anh') {
    //         $('#tenmonhoc').text("Anh");
    //     }

    //     if (idMonHoc == 'van') {
    //         $('#tenmonhoc').text("Văn");
    //     }
    // }
});




const menuItems = document.querySelectorAll('.menu .mon');

// Thêm sự kiện click listener cho các thẻ <li> có class "mon"
menuItems.forEach(item => {
    item.addEventListener('click', function() {
        // Lấy giá trị id của thẻ <li> được click
        const id = this.id;

        // Lưu id vào Local Storage
        localStorage.setItem('selectedId', id);

        location.reload();
    });
});

// Kiểm tra nếu đã có id được lưu trong Local Storage (khi trang được tải lại)



var intervalId;
var questions;
var timerId;

$('#btnStart').click(function() {
    var duration = 600;
    getQuestion(idMonHoc);
    $('#btnEnd').show();
    $(this).hide();
    $('#countdown').show();
    display = document.querySelector('#time');
    //startTimer(10, display, true);
    $('#mark').hide();
    startTimer(duration, display);
});




$('#btnEnd').click(function() {
    $(this).hide();
    var thoiGianLam = getTime();
    stopCountdown();
    $('#countdown').hide();
    checkAnswer();
    var laydiem = document.getElementById("mark").innerHTML;
    var diemlayra = laydiem.split(":");
    diem = diemlayra[1];
    
    postHistory(diem, thoiGianLam);
    $('#btnStart').show();
    $('#mark').show();
    
});

function getTime() {
    var timeElement = document.getElementById("time");
    var timeValue = timeElement.innerHTML;
    var timeArray = timeValue.split(":");
    var minute = parseInt(timeArray[0]);
    var second = parseInt(timeArray[1]);
    var time = minute * 60 + second;

    timeConLai = 600 - time;
    minutes = parseInt(timeConLai / 60, 10);
    seconds = parseInt(timeConLai % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;
    var thoiGianLam = minutes + ":" + seconds;
    return thoiGianLam;
}




function postHistory(diem, thoiGianLam) {
    $.ajax({
        url: 'history_post.php',
        type: 'post',
        data: {
            thoiGianLam: thoiGianLam,
            diem: diem,
            mon: idMonHoc
        },
        success: function(data) {
            
        }
    })
}

function checkAnswer() {
    var mark = 0;
    $('#questions div.row').each(function(k, v) {
        let id = $(v).find('h5').attr('id');
        let question = questions.find(x => x.id == id); //tìm câu hỏi trong mảng questions dựa vào id đã có ở trên
        let answer = question['cautraloi'];

        //bước 2: lấy đáp án của người dùng ~ thằng radio được check
        let choice = $(v).find('fieldset input[type="radio"]:checked').attr('class');

        if (choice == answer) {
            mark += 1; //mỗi câu đúng được cộng 2 điểm
        }

        //bước 3: đánh dấu đáp án đúng để người dùng đối chiếu

        $('#question_' + id + ' > fieldset > div > label.' + answer).css("background-color", "yellow");
    });
    $('#mark').show();
    $('#mark').text('Điểm của bạn là: ' + mark);
    return mark;
}




function getQuestion(idMonHoc) {
    $.ajax({
        url: 'questions.php',
        type: 'get',
        data: {
            idMonHoc: idMonHoc
        },
        success: function(data) {

            questions = jQuery.parseJSON(data);
            d = '';
            index = 1;
            $.each(questions, function(key, v) {
                d += '<div class="row questions_render" style = "margin-left:10px;" id="question_' +
                    v['id'] + '"> ';
                d += '<h5 style="font-weight:bold;" id="' + v['id'] +
                    '"> <span class="text-danger">Câu ' + index + ': </span>' + v['cau_hoi'] +
                    '</h5>';

                d += '<fieldset>';
                d += '<div class="radio col-md-12 ">';
                d += '<label class = "A"><input type="radio" class="A" name = "' + v['id'] +
                    '"><span class="text-danger">A: </span>' + v['dapanA'] + '</label>';
                d += '</div>';

                d += ' <div class="radio col-md-12">';
                d += '<label class = "B"><input type="radio" class="B" name = "' + v['id'] +
                    '"><span class="text-danger">B: </span>' + v['dapanB'] + '</label>';
                d += '</div>';

                d += '<div class="radio  col-md-12">';
                d += '<label class = "C"><input type="radio"  class="C" name = "' + v['id'] +
                    '"><span class="text-danger">C: </span>' + v['dapanC'] + '</label>';
                d += '</div>';

                d += '<div class="radio col-md-12">';
                d += '<label class = "D"><input type="radio" class="D" name = "' + v['id'] +
                    '"><span class="text-danger">D: </span>' + v['dapanD'] + '</label>';
                d += '</div>';
                d += '</fieldset>';
                d += '</div>';
                index++;
            });
            $('#questions').html(d);
        }
    })
}

//dem nguoc thoi gian khi ve 0 hien dap an va diem

function startTimer(duration, display) {
    var timer = duration,
        minutes, seconds;
    
        intervalId = setInterval(function() {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (timer <= 0) {
            checkAnswer();
            //showDiem =checkAnswer();
            //$('#mark').css("display", "block");
            clearInterval(intervalId);
                    
            
            $('#btnEnd').hide();
            $('#countdown').hide();
            
            var laydiem = document.getElementById("mark").innerHTML;
            var diemlayra = laydiem.split(":");
            diem = diemlayra[1];
            
            $('#btnStart').show();
            var thoiGianLam = getTime();
            postHistory(diem, thoiGianLam);

        } 
            --timer;
        
    }, 1000);
    } 
    function stopCountdown() {
            clearInterval(intervalId);    
        }
    

</script>

</html>