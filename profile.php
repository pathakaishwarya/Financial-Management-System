<!DOCTYPE html>
<?php
          
          
              $host="localhost";
              $user="root";
              $pass="";
              $db="client";

             

         $con= mysqli_connect($host,$user,$pass,$db);
        
		 
	                        $i=15;
              $sql1 = "SELECT * FROM `inn` where id = '$i'";
			  $ser=mysqli_query($con,$sql1);
			  $dat=mysqli_fetch_array($ser);
              $un=$dat['uname'];

			  $sql2 = "SELECT * FROM `userreg` where name = '$un'";
              $geti=mysqli_query($con,$sql2);
              $data=mysqli_fetch_array($geti);
              $n=$data['name'];
              $p=$data['password'];
			  $g=$data['gender'];
			  $e=$data['email'];
			  $ph=$data['phone'];

                
             // $ins=mysqli_query($con,$sql);
              //if($ins)
			  //{				  
     			//header("location:index.php");
                
				 
			  //}
              
              
            
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
    <title>An InvestoPedia Creation</title>

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
                    <h2 class="title">Update Your Registration Info</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" name="name" value="<?php echo $n; ?>" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $p; ?>" name="passs" required>
                            
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected" ><?php echo $g; ?></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" value="<?php echo $e; ?>" name="email" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $ph; ?>" name="phone" required>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" name="up" type="submit">Update</button>
						
                        </div>
						 <div class="p-t-10">
                            <button align="center" class="btn btn--pill btn--green" name="del" type="submit">Delete</button>
						
                        </div>
						<?php
          if(isset($_POST['up']))
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
            
             $updatee = "UPDATE `userreg` SET `name`='$name',`password`='$pass',`gender`='$gen',`email`='$email',`phone`='$phone' WHERE name='$n'";
             $subbed=mysqli_query($con,$updatee);
                $i=15;
             $sqlq = "UPDATE `inn` SET `uname`='$name',`pass`='$pass' WHERE id='$i'";
              $up=mysqli_query($con,$sqlq);
            if($subbed)
			  {
				  
				  $message = "Details Updated Successfully";
                 echo "<script type='text/javascript'>alert('$message');</script>";
			  }			  
			  else
			  {				  
     			$message = "Failed To Update Details";
                 echo "<script type='text/javascript'>alert('$message');</script>";
				 
			  }
              
              
            }
    ?>
	
	<?php
          if(isset($_POST['del']))
          {
              $host="localhost";
              $user="root";
              $pass="";
              $db="client";

             

                $con= mysqli_connect($host,$user,$pass,$db);
         
                $ddq = "DELETE FROM `userreg` WHERE name='$n'";
              
			     $sqld=mysqli_query($con,$ddq);
                 if($sqld)
			      {
				  
				  $message = "Details Deleted Successfully";
                   echo "<script type='text/javascript'>alert('$message');</script>";
				   
				   sleep(6);
				   header("location:index.php");

			  }			  
			  else
			  {				  
     			$message = "Failed To Delete Details";
                 echo "<script type='text/javascript'>alert('$message');</script>";
				 
			  }
              
              
            }
    ?>
	<div class="text-center p-t-90">
						<a class="txt1" href="profile.php">
							Click  To view Updated Details
						</a>
					</div>
					
					<div class="text-center p-t-90">
						<a class="txt1" href="home1.php">
							Click To Return To Home Page 
						</a>
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