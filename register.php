<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <style>
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        font-family: sans-serif;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        overflow: hidden
    }

    #btnSubmit:hover {
        background: yellow;
    }

    @media screen and (max-width: 600px) {
        body {
            background-size: cover fixed
        }
    }

    #particles-js {
        height: 100%
    }

    .loginBox {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 350px;
        min-height: 200px;
        background: #000000;
        border-radius: 10px;
        padding: 40px;
        box-sizing: border-box
    }

    .user {
        margin: 0 auto;
        display: block;
        margin-bottom: 20px
    }

    h3 {
        margin: 0;
        padding: 0 0 20px;
        color: #59238F;
        text-align: center
    }

    .loginBox input {
        width: 100%;
        margin-bottom: 20px
    }

    .loginBox input[type="text"],
    .loginBox input[type="password"] {
        border: none;
        border-bottom: 2px solid #262626;
        outline: none;
        height: 40px;
        color: #fff;
        background: transparent;
        font-size: 16px;
        padding-left: 20px;
        box-sizing: border-box
    }

    .loginBox input[type="text"]:hover,
    .loginBox input[type="password"]:hover {
        color: #42F3FA;
        border: 1px solid #42F3FA;
        box-shadow: 0 0 5px rgba(0, 255, 0, .3), 0 0 10px rgba(0, 255, 0, .2), 0 0 15px rgba(0, 255, 0, .1), 0 2px 0 black
    }

    .loginBox input[type="text"]:focus,
    .loginBox input[type="password"]:focus {
        border-bottom: 2px solid #42F3FA
    }

    .inputBox {
        position: relative
    }

    .inputBox span {
        position: absolute;
        top: 10px;
        color: #262626
    }

    .loginBox input[type="submit"] {
        border: none;
        outline: none;
        height: 40px;
        font-size: 16px;
        background: #59238F;
        color: #fff;
        border-radius: 20px;
        cursor: pointer
    }

    .loginBox a {
        color: #262626;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
        text-align: center;
        display: block
    }

    a:hover {
        color: #00ffff
    }

    p {
        color: #0000ff
    }
    </style>
</head>

<body>
    <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Đăng nhập</h3>
        <div class="inputBox">
            <input id="username" type="text" name="Username" placeholder="Tên đăng nhập">
            <p id="checkAccount" style="color:red">Bạn chưa nhập tài khoản</p>
            <p id="shortAccount" style="color:red">Tài khoản phải trên 8 kí tự</p>
            <p id="exsistAccount" style="color:red">Tài khoản đã tồn tại</p>
            <input id="password" type="password" name="Password" placeholder="Mật khẩu">
            <p id="checkPassword" style="color:red">Bạn chưa nhập mật khẩu</p>
            <p id="shortPassword" style="color:red">Mật khẩu phải trên 8 kí tự</p>
            <input id="repassword" type="password" name="Password" placeholder="Nhập lại mật khẩu">
            <p id="checkRePassword" style="color:red">Bạn chưa nhập lại mật khẩu</p>
            <p id="checkSame" style="color:red">Mật khẩu không trùng khớp</p>
        </div>
        <input type="submit" id="btnSubmit" name="" value="Đăng ký">
        <a href="#">Quên mật khẩu<br> </a>
        <div class="text-center">
            <p style="color: #59238F;" id="signUp">
                <a href="login.php">Đăng nhập</a>
            </p>
        </div>

    </div>
</body>

<script>
$(document).ready(function() {
    $('#checkAccount').hide();
    $('#checkPassword').hide();
    $('#checkSame').hide();
    $('#shortAccount').hide();
    $('#shortPassword').hide();
    $('#checkRePassword').hide();
    $('#exsistAccount').hide();

});
  
$('#btnSubmit').click(function() {
    var username = $("#username").val();
    var password = $('#password').val();
    var repassword = $('#repassword').val();
    if (username == "" || password == "" || repassword == "") {
        if (username == "") {
            $('#checkAccount').show();
        } else {
            $('#checkAccount').hide();
        }
        if (password == "") {
            $('#checkPassword').show();

        } else {
            $('#checkPassword').hide();
        }

        if (repassword == "") {
            $('#checkRePassword').show();

        } else {
            $('#checkRePassword').hide();
        }

    } else if (username.length < 8 || password.length < 8) {
        if (username.length < 8) {
            $('#shortAccount').show();
        } else {
            $('#shortAccount').hide();
        }
        if (password.length < 8) {
            $('#shortPassword').show();

        } else {
            $('#shortPassword').hide();
        }
    } else if (password != repassword) {
        $('#checkSame').show();

    } else {
        $('#checkAccount').hide();
        $('#checkPassword').hide();
        $.ajax({
            url: 'register_handle.php',
            type: 'post',
            data: {
                username: username,
                password: password
            },
            success: function(respond) {
                console.log(respond);
                if (respond == 0) {
                    $('#exsistAccount').show();

                } else {
                    window.location = 'login.php';
                }


            },
        })

    }
});
</script>

</html>

<?php

?>