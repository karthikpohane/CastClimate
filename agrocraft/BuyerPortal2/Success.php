  <?php
     include("../Functions/functions.php");
     ?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Success Product Added</title>

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
<link href="https://fonts.googleapis.com/css?family=Cormorant+Infant&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>
       <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
  </head>
  <style>
       .myfooter {
            background-color: #292b2c;

            color: goldenrod;
            margin-top: 15px;
       }

       .aligncenter {
            text-align: center;
       }

       a {
            color: green;
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

       body {
            margin: 0;
            padding: 0px;
            font-family: sans-serif;
       }

       * {
            box-sizing: border-box;
       }

       .table {
            width: 100%;
            border-collapse: collapse;
       }

       .table td,
       .table th {
            padding: 10px 10px;
            border: 1px solid #ddd;
            text-align: center;
            font-size: 16px;
       }

       .table th {
            background-color: #292b2c;
            color: goldenrod;
       }

       .table tbody tr:nth-child(even) {
            background-color: #f5f5f5;
       }

       .goback {
            /* text-align:none; */
            width: 20%;
            /* margin-left:10%; */
            margin-right: -7%;
            margin-left: 0%
       }

       .placeorder {
            /* text-align:none; */
            width: 20%;
            margin-right: -3.5%;
       }

       .hey {
            width: 50%;
       }

       @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .table thead {
                 display: none;
            }

            .hey {
                 width: 100%;
            }

            .table,
            .table tbody,
            .table tr,
            .table td {
                 display: block;
                 width: 100%;
            }

            .table tr {
                 margin-bottom: 15px;
            }

            .table td {
                 text-align: right;
                 padding-left: 50%;
                 text-align: right;
                 position: relative;
            }

            .table td::before {
                 content: attr(data-label);
                 position: absolute;
                 left: 0;
                 width: 50%;
                 padding-left: 15px;
                 font-size: 15px;
                 font-weight: bold;
                 text-align: left;
            }

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
            .goback {
                 text-align: center;
                 width: 50%;
                 margin-left: 25%;

                 /* margin-left:10%; */
                 margin-right: 0%;
            }

            .placeorder {
                 width: auto;
                 margin-bottom: -10%;
                 margin-top: 10%;
                 margin-left: 22%;
            }

            .payment {
                 width: 90%;
                 margin-left: 20%;

            }

            .text {
                 text-align: center;
            }
       }

       .form-actions {
            margin: 0;
            background-color: transparent;
            text-align: center;
       }
       :root{
     --bg-color: #222327;
     --text-color: #ffffff;
     --main-color: #29fd53;
     
 }

	.logo i{
        color: var(--main-color);
        font-size: 28px;
        margin-right: 3px;
        align-items: center;
        width: 100%;
        height: 60px;
        max-width: 1200px;
        margin: 0 auto;
        
    }
	#alogo{
        text-decoration: none;
        color:var(--text-color);
        font-size: 1.2rem;
    }
    
    #alogo:hover{
        color: var(--main-color);
    }

    .logo #alogo{
        font-size: 1.75rem;
        font-weight: bold;
    }
    header{
        position: relative;
        padding: 2rem 2rem;
    }
  </style>

  <body>





  <nav class="navbar navbar-expand-xl ">

<div class=" flex-row-reverse left ">

    <div class="p-2">
        <div class="icon2">
            <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
            <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
        </div>
    </div>
    <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px;'></i></div>
    <a class="float-left" href="bhome.php">
         Cast-Climate
    </a>
</div>
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;margin-right:-9%;font-size:28px;"></i></span>
</button>
<header>
		<div class="logo">
			<i class="ri-leaf-fill"></i><a id="alogo" href="bhome.php">Cast-Climate</a></div>
	</header>
<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <div class="input-group mb-1 ml-2 searchbox">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
        </div>
        <form action="SearchResult.php" method="get" enctype="multipart/form-data">
            <input type="text" class="form-control " id="inlineFormInputGroup" name="search" placeholder="Search for fruits,vegetables or crops " style="width:500px;">
        </form>
    </div>
    
    <div class="list-group moblists">

        <?php
        if (isset($_SESSION['phonenumber'])) {
            echo "<a href='BuyerProfile.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
            echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Transactions</a>";
            echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
        } else {
            echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Login</a>";
        }
        ?>

    </div>
</div>




<div class=" flex-row-reverse right ">
    <div class="p-2 cart">
        <div class="icon2">
            <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green">&#61562;</i></a>
            <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
        </div>
    </div>
    <div class="dropdown p-2 settings ">
        <button class="btn  dropdown-toggle text-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php getUsername(); ?>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php
            if (isset($_SESSION['phonenumber'])) {
                echo "<a href='BuyerProfile2.php' class='dropdown-item  ' style='padding-right:-20px;'>Profile</a>";
                echo "<a href='Transaction.php' class='dropdown-item ' style='padding-right:-20px;'>Transactions</a>";
                echo "<a href='..//auth/BuyerLogin.php' class='dropdown-item ' style='padding-right:-20px;'>Logout</a>";
            } else {
                echo "<a href='../auth/BuyerLogin.php' class='dropdown-item ' style='padding-right:-20px;'>Login</a>";
            }
            ?>
        </div>
    </div>


    <div class="text-success  login">Login</div>
</div>

</nav>



       <br>
       <div class="card">
            <h4 class="card-header text-success text-center font-weight-bold">Success</h4>
            <div class="card-body">
                 <h4 class="card-title text-success text-center font-weight-bold">Product Successfully Purchased</h4>
                 <h5 class="card-text text-center">Thankyou For Shopping With Us.</h5>
                 <br>
                 <div class="form-actions">
                      <a href="bhome.php" class="btn btn-success btn-lg ">Go To Home</a>
                 </div>
            </div>
       </div>

       <br><br><br>






       <br>
       <br><br><br><br><br><br><br><br><br><br><br><br>
       <section id="footer" class="myfooter">
            <div class="container">
                 <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-0dec">
                              <div class="u-clearfix u-sheet u-sheet-1">
                              <center>
               <p class="footer_p"> Copyright 2022-2023 by Refsnes Data. All Rights Reserved. <br>Clast-climate
               </p>
      </div>
                              </center></footer>
            </div>
  </body>

  </html>