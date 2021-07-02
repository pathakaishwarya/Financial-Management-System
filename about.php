<!doctype html>
<?php
          if(isset($_POST['sub']))
          {
              $host="localhost";
              $user="root";
              $pass="";
              $db="client";

             

         $con= mysqli_connect($host,$user,$pass,$db);
        
		 
	          $name=$_POST['name'];
              $email=$_POST['mail'];
             

              $sql = "INSERT INTO  `clientinfo`  (`name`, `email`) VALUES ('$name', '$email')";
              $ins=mysqli_query($con,$sql);
              if($ins)
			  {				  
     			$message = "You Have Successfully Subscribe";
                 echo "<script type='text/javascript'>alert('$message');</script>";
				 
			  }
              
              
            }
        
    ?>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=devise-width, initial-scale=1">
            <title>About Us|Business Portal</title>
    <title>Privacy And Policy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
<link href="style.css" rel="stylesheet">
</head>

<body>

    <!--Navigation-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/6.jpg" width="30%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
    

        <li class="nav-item">
            <a class="nav-link" href="index.php" target="_blank">Finance</a>
        </li>

        <li class="nav-item">
             <a class="nav-link" href="market.php" target="_blank">Market</a>
         </li>

        <li class="nav-item">
             <a class="nav-link" href="MutualFunds.php" target="_blank">Mutual Funds</a>
         </li>

        <li class="nav-item active">
            <a class="nav-link" href="about.php" target="_blank">About Us</a>
         </li>

        <li class="nav-item">
            <a class="nav-link" href="services.php" target="_blank">Services</a>
         </li>

    </ul>        
    </div>
</div>
</nav>

        <!--welcome section-->
<div class="container-fluid padding">
        <div class="row welcome text-center">
        <div class="col-12">
        <h1 class="display-4">Built with ease.</h1>
        </div>
        <hr>
        <div class="col-12">
        <p class="lead">Welcome</p>
        </div>
        </div>
        </div>

        <div class="container-fluid padding">
                <div class="row welcome text-center">
                <div class="col-12">
   <h1>About Us</h1>
            <p>A business portal for young professionals.

           <p> We inform our readers – young professionals, founders, and students – about the latest career and business-related tips, trends and opportunities from around the world.</p>
            
            <p>We strive to become a leading source for young people when it comes down to searching for exciting international events, study programs, career opportunities as well as accelerating a career and starting a business.</p>
            
            <p>Our team is driven by the mission to help young professionals find life-changing business and career opportunities they are looking for.</p>
                
            <p>Whether you are looking for the latest market trends, tech innovations, upcoming networking events or funding opportunities to grow your venture, our content is designed to be practical. We designed a unique method to create content that serves our readers.</p>

            <p>We apply the latest approaches in content marketing and data science to produce the most relevant content, making Investopedia most relevant media company for business professionals, young and senior, starters and veterans.</p>
        </p>

    </div>
    </div>
    </div>

    <!--Tow column section-->
<div class="container-fluid padding">
        <div class="row padding">
        
        <div class="col-lg-6">
        <h2>Our Philosophy</h2>
        <h3>How can you get involved?</h3>

               <p>Join our free weekly newsletters and become a part of our growing community and follow us on social media. Make sure to share opportunities that you find interesting with your friends, and consider joining our Global Ambassador Programme.</p>
               
               <h3>Want to become an influencer?</h3> 
                
                <p>We welcome a diversity of backgrounds and opinions. Our writers and contributors come from diverse backgrounds and express different points of view on business and career-related topics that matter. You can apply to become an influencer on our platform by filling in this form.</p>
               
               <h3> Need help with reaching out to young talents?</h3>
                
                <p>If you represent a university looking for new highly qualified students, an event trying to get more attendees or an innovation hub or corporate accelerator scouting for promising start-ups, we understand your pain. Contact us via the services form and our team will get back to you shortly.</p>
        <br>
        </div>
        <div class="col-lg-6">
   <div id="mc_embed_signup_scroll">
<br>
<form method="post">
  <div class="container">

  <!--subscription page-->

    <h2>I would like to discuss:</h2>

  </div>
  <form  method="POST">

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Name" name="name" required>
    <input type="email" placeholder="Email address" name="mail" required>
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Advise
    </label>
  </div>

  <div class="container">
    <button type="submit" name="sub">Subscribe</button>
  </div>


</form>
        </div>
        </div>
        <hr class="my-4">
        </div>
             
        
        <!--connect-->
        <div class="container-fluid padding">
        <div class="row text-center padding">
        <div class="col-12">
        <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <img src="img/fb.png" width="2%">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <img src="img/insta.png" width="2%">
        <a href="#"><i class="fab fa-twitter"></i></a>
        <img src="img/twitter.png" width="2%">
        <a href="#"><i class="fab fa-youtube"></i></a>
        <img src="img/yotube_logo.png" width="2%">
        </div>
        </div>
        </div>
        
        <!--Footer-->
        <footer>
        <div class="container-fluid padding">
        <div class="row text-center">
        <div class="col-md-4">
        <img src="img/6.jpg" width="10%">
        <hr class="light">
        <p>Email</p>
        <p>Address</p>
        <p>City</p>
        </div>
        
        <div class="col-md-4">
        <hr class="light">
        <h5>Our Hours</h5>
        <hr class="light">
        <p>Monday: 9am-5pm</p>
        <p>Sturday: 9am-5pm</p>
        <p>Sunday: 9am-5pm</p>
        </div>
        
        <div class="col-md-4">
        <hr class="light">
        <h5>Service Area</h5>
        <hr class="light">
        <p>City, State, 00000</p>
        <p>City, State, 00000</p>
        <p>City, State, 00000</p>
        <p>City, State, 00000</p>
        </div>
        
        <div class="col-12">
        <hr class="light">
        <h5>&copy; webvibe.com<h5>
        </div>
        </div>
        </div>
        </footer>
</body>
</html>