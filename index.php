<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CampusPlacify</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/font.css"> -->
    <link rel="stylesheet" type="text/css" href="css/reg.css">
    <?php include_once 'includes/head.php' ?>
</head>

<style>
        body {
            margin: 0;
            position: relative;
        }

        body::before {
            content: "";
            background-image: url('images/img6.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: -1; /* Place the pseudo-element behind the content */
            opacity: 0.2; /* Adjust the opacity as needed */
        }

        /* Add your other styles here */
    </style>

<body>

    <!--<img src="images/homeback1.png" id="img1">-->
    <div style="position: absolute; margin-left:59%; margin-top:100px;">
    <img src="images/campusPlacify_logo.png" width="430px" style="z-index: 1;">
    </div>
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 160px; margin-left: 10px;">
    	<h1 style="margin-left: 20px; font-size: 45px;"><br> <b>Campus-Placify</b> <br>Makes Placement Management <br> Effortless!</h1> <br>
        <!-- <img src="images/logo1.png" width="550px"> -->
    </div>
    <div id="users" style="z-index: 1; position: relative; margin-top: 110vh;">
            <h1 align="center"><u>USERS</u></h1> <br> <br>
            <!--<a href="login.php" class="btn btn-outline-light my-2 my-sm-0" style="border-radius: 50px; border-width: 2px; font-weight: bold;" id="loginnav">LOGIN</a>-->
        <div class="container">
        <div class="card-group">
          <div class="card" style="width: 400px; background: none; border: none;" align="center">
            <img src="images/admin1.svg" class="card-img-top" alt="..." style="width: 400px;">
            <div class="card-body">
              <h2 class="card-title" align="center"><a href="login.php">Admin</a></h5>
              <p class="card-text"><small class="text-muted">TPO Co-Ordinator</small></p>
            </div>
          </div>
          <div class="card" style="width: 400px; background: none; border: none;" align="center">
            <img src="images/student1.svg" class="card-img-top" alt="..." style="width: 410px; margin-top: 10px;"> <br> 
            <div class="card-body">
              <h2 class="card-title" align="center"><a href="login.php">User</a></h5>
              <p class="card-text"><small class="text-muted">Student</small></p>
            </div>
          </div>
        </div>
        </div>
      </div>
      
      <div id="contact" style="z-index: 1; position: absolute; margin-left:2%; margin-top: 30vh;">
            <div class="form-row">
             <div class="form-group" style="margin-left:50px; margin-top: 200px;"> 
                <h1>Contact Us</h1>
                <p class="lead">&nbsp;<i class="fas fa-mobile"></i>&nbsp; (+91) 9093967157</p>
                <p class="lead">&nbsp;<i class="fas fa-at"></i>&nbsp; campusplacify@gmail.com</p>
              </div>
              <div class="form-group" >
              <img src="images/img8.jpg" alt="..." style="width: 600px; margin-left: 50%; margin-top: -15%;">
              </div>
            </div>
    </div>
    <?php include_once 'includes/footer.php' ?>
</body>
</html>