 <?php
include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber'];
$sql = "select * from farmerregistration where farmer_phone = '$sessphonenumber' ";
$run_query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run_query)) {
    $name = $row['farmer_name'];
    $phone = $row['farmer_phone'];
    $address = $row['farmer_address'];
    $pan = $row['farmer_pan'];
    $bank = $row['farmer_bank'];
    $state = $row['farmer_state'];
    $district = $row['farmer_district'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
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

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
<body><style>
     #staticEmail{
        text-align:center;
         border-style:solid;
        border-color:black;
        /* background-color:#ff5500;*/
        width:30%;
        font-size:20px;
        color:black; 
    } 
    .text {
        background-color: black;
        color: gold;
        font-size:18px;
    }
    input{
        text-align:center;
        /* border-style:solid;
        border-color:black; */
        background-color:#ff5500;
        width:50%;
        color:red;
    }
    .text {
        min-width: 180px !important;
        display: inline-block !important
    }

    .inp {
        width: 10%;
    }

    .s {
        width: 50%;
        margin-left: 25%;
        margin-right: 25%;
        margin-top:0%;
        margin-bottom:4%;
    
    }
    
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
    .s {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }
        .text {
        min-width: 150px !important;
        display: inline-block !important
    }}:root{
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
        color: #000;;
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
    <header>
		<div class="logo">
			<i class="ri-leaf-fill"></i><a id="alogo" href="farmerHomePage.php">Cast-Climate</a></div>
	</header>
<div class="container" >
    <br>
    <div class="text-center"><h2><b>Your Profile</h2></b></div>
        <div class="form">
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-user mr-2"></i>Full name</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $name?>">
            </div>
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-phone-alt mr-2"></i>Phone No.</span>
                </div>
                <input type="phonenumber" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" <?php echo $phone ?>">
            </div>
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-home mr-2"></i>Address</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $address ?>">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-globe-americas mr-2"></i>State</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" <?php echo $state ?>">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-globe-americas mr-2"></i>District</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" <?php echo $district ?>">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-pencil-alt mr-2"></i>Pan No.</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="  <?php echo $pan ?>">
            </div> 
            <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-university mr-2"></i>Account No.</span>
                </div>
                <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $bank ?> ">
            </div> 
           
            <!-- <div class="input-group mt-4 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="far fa-envelope mr-2"></i>Email id </span>
                </div>
                <input type="email" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" ">
            </div>  -->
        </div>
        <!-- <a href="Editprofile.php">
        <button type="button" class="btn text-center d-flex mx-auto btn-lg" style="background-color:#292b2c;color:goldenrod">Edit Profile</button></a>
    </div> -->
</body>
</html>