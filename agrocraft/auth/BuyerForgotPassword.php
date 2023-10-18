<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <style>
        h3 {
            background-color: transparent;
            font-family:  sans-serif;
            text-align: center;
            cursor: pointer;
            /* color: rgb(0, 61, 153); */
            color:black;
        }

        .box {
            color: rgb(6, 36, 7);
            width: 370px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            /* border-color: rgb(0, 172, 230); */
            border-color:black;
        }

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(../Images/Homepage/bg.jpg)center/cover no-repeat fixed;
            /* background-color: #f5f8fa; */
        }

        form {
            margin: 10px;
            padding: 20px;
            background-color: rgb(247, 248, 247);

        }

        .inp {
            padding: 5px;
            margin: 10px;
            /* border-color: rgb(0, 172, 230); */
            border-color:black;
            display: inline-block;
            border-radius: 16px;
            width:80%;
            text-align: center;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 17px;
         padding-left:5%;
         padding-right:5%;
            font-weight: bold;
            color: goldenrod;
            background-color:#292b2c;
            border-radius: 16px;
            border-color:black;
            width: auto;
        }
/* 
        input[type="submit"]:hover {
            background-color: rgb(0, 153, 255);
            outline: none;
            color: rgb(255, 255, 255);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(0, 57, 230);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;

        } */
        .myfooter {
        background-color: #292b2c;

        color: goldenrod;
        margin-top: 15px;
    }

    .aligncenter {
        text-align: center;
    }

    a {
        color: goldenrod;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    nav {
        background-color: #292b2c;
    }

    .navbar-custom {
        background-color: #292b2c;
    }

    /* change the brand and text color */
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text {
        background-color: #292b2c;
    }

    .navbar-custom .navbar-nav .nav-link {
        background-color: #292b2c;
    }

    .navbar-custom .nav-item.active .nav-link,
    .navbar-custom .nav-item:hover .nav-link {
        background-color: #292b2c;
    }


    .mybtn {
        border-color: green;
        border-style: solid;
    }


    .right {
        display: flex;
    }

    .left {
        display: none;
    }

    .cart {
        /* margin-left:10px; */
        margin-right: -9px;
    }

    .profile {
        margin-right: 2px;

    }

    .login {
        margin-right: -2px;
        margin-top: 12px;
        display: none;
    }

    .searchbox {
        width: 60%;
    }

    .lists {
        display: inline-block;
    }

    .moblists {
        display: none;
    }

    .logins {
        text-align: center;
        margin-right: -30%;
        margin-left: 35%;
    }

    /*Header */
    :root {
    --bg-color: #222327;
    --text-color: #ffffff;
    --main-color: #29fd53;

}

.logo i {
    color: var(--main-color);
    font-size: 28px;
    margin-right: 3px;
    align-items: center;
    width: 100%;
    height: 60px;
    max-width: 1200px;
    margin: 0 auto;

}

a {
    text-decoration: none;
    color: var(--text-color);
    font-size: 1.2rem;
}

a:hover {
    color: var(--main-color);
}

.logo a {
    font-size: 1.75rem;
    font-weight: bold;
}

header {
    position: relative;
    padding: 2rem 2rem 0rem 2rem;
    /* background-color: var(--bg-color); */
}



    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        /* .mycarousel {
            display: none;
        }

        .firstimage {
            height: auto;
            width: 90%;
        }

        .card {
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;

        }

        .col {
            margin-top: 20px;
        } */

        .right {
            display: none;
            background-color: #ff5500;
        }

        /* 
            .settings{
            margin-left:79%;
        } */
        .left {
            display: flex;
        }

        .moblogo {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: 35%;
            padding: 15px;
        }

        .searchbox {
            width: 95%;
            margin-right: 5%;
            margin-left: 0%;
        }

        .moblists {
            display: inline-block;
            text-align: center;
            width: 100%;
        }
        /* .pic{
        height:auto;
    } */
    
    /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */
    }
    </style>
</head>
<header>
<div class="logo"><i class="ri-leaf-fill"></i><a href="./BuyerLogin.php">Cast-Climate</a></div></center></a>
</header>

<body>


    <div class="box">
        <form action="BuyerForgotPassword.php" method="post">
            <h3>FORGOT PASSWORD</h3>
     
            <br>
            <input type="phonenumber"  class="inp" name="phonenumber" placeholder="Phone Number" required><br>
            <input type="text" class="inp" name="pan" placeholder="Pan Number" required><br>

            <input type="password" class="inp" name="password" placeholder="Password" required><br>
            <input type="password" class="inp" name="confirmpassword" placeholder="Confirm Password" required><br><br>
            <span style=" display:block;  margin-bottom: .75em; "></span>
        <br>
            <input type="submit" name="register" value="Update Password">
        </form>
    </div>
    
</body>

</html>

<?php
include("../Includes/db.php");
if (isset($_POST['register'])) {
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $pan = mysqli_real_escape_string($con, $_POST['pan']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    $query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_pan = '$pan'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);

    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '2345678910111211';
    $encryption_key = "DE";

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );

    if (strcmp($password, $confirmpassword) == 0) {
        if ($count_rows != 0) {
            $update_query = "update buyerregistration set buyer_password = '$encryption' 
                                    where buyer_phone = '$phonenumber' and buyer_pan = '$pan' ";

            $run_query = mysqli_query($con, $update_query);

            echo "<script>alert('Password Updated Successfully');</script>";
            echo "<script>window.open('BuyerLogin.php','_self')</script>";
        } else if ($count_rows == 0) {
            echo "<script>alert('Please Enter Valid Details');</script>";
        }
    } else {
        echo "<script>alert('Please Enter Valid Details');</script>";
    }
}

?>