<!DOCTYPE html>
<?php
          if(isset($_POST['register']))
          {
              $host="localhost";
              $user="root";
              $pass="";
              $db="client";

             

         $con= mysqli_connect($host,$user,$pass,$db);
        
		 
	          $name=$_POST['name'];
              $pass=$_POST['passs'];
			  $gen=$_POST['gender'];
              $email=$_POST['email'];
			  $phone=$_POST['phone'];
            
             
              $sql = "INSERT INTO `userreg` (`name`, `password`, `gender`, `email`, `phone`) VALUES ('$name', '$pass', '$gen', '$email', '$phone')";

            
              $ins=mysqli_query($con,$sql);
              if($ins)
			  {				  
     			header("location:index.php");
                
				 
			  }
              
              
            }
    ?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendors/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendors/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendors/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendors/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="csss/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3" >
                <div class="card-heading" style="background-image: url('imagess/bg-heading-03.jpg');"></div>
                <div class="card-body" >
                    <h2 class="title">Please Fill Registration Info</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="UserName" name="name" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Password" name="passs" required>
                            
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" required>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" name="register" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendors/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/datepicker/moment.min.js"></script>
    <script src="vendors/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="jss/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->