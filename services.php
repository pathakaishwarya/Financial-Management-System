<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=devise-width, initial-scale=1">
<title>services</title>
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
            <a class="nav-link" href="index.php" >Finance</a>
        </li>

        <li class="nav-item">
             <a class="nav-link" href="market.php" >Market</a>
         </li>

        <li class="nav-item">
             <a class="nav-link" href="MutualFunds.php" >Mutual Funds</a>
         </li>

        <li class="nav-item">
            <a class="nav-link" href="about.php" >About Us</a>
         </li>

        <li class="nav-item active">
            <a class="nav-link" href="services.php" >Services</a>
         </li>
 <li class="nav-item">
            <a class="nav-link" href="profile.php" >Your Profile</a>
         </li>
		  <li class="nav-item">
            <a class="nav-link" href="logout.php" >logout</a>
         </li>
    </ul>        
    </div>
</div>
</nav>

<!--two column section-->
<div class="container-fluid padding">
<div class="row padding">
<div class="col-lg-6">
<h2>Significance of Finance</h2>
<p>Basically, finance represents money management and the process of acquiring needed funds.
 Finance also encompasses the oversight, creation, and study of money, banking, credit, investments, assets, and liabilities that make up financial systems. </p> 
<p> The flow of money throughout the financial system slows down or stops as a result. All facets of the global economy depend upon an orderly process of finance.</p>
<p>Capital markets provide the money to support business, and business provides the money to support individuals.Business finance refers to money and credit employed in business. It involves procurement and utilization of funds so that business firms may be able to carry out their operations effectively and efficiently. ... (ii) Business finance is needed in all types of organisations large or small, manufacturing or trading.</p>
<p>Firms need finance to: start up a business, eg pay for premises, new equipment and advertising. run the business, eg having enough cash to pay staff wages and suppliers on time. expand the business, eg having funds to pay for a new branch in a different city or country.</p>
<br>
<a href="#" class="btn btn-primary">Learn More</a>
</div>
<div class="col-lg-6">
<img src="img/8.jpg" class="img-fluid">
</div>
</div>
</div>
<hr class="my-4">


<div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Username </th>
 <th> Email </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php
  
  
 $q = "select * from clientinfo ";
 $con = mysqli_connect("localhost","root","","client");
 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['mail'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }

 ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

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