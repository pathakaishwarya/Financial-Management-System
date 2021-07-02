<?php
if(isset($_POST['sub']))
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="client";

   

$con= mysql_connect($host,$user,$pass,$db);


  $name=$_POST['name'];
    $email=$_POST['mail'];
   

    
$q = " update clientinfo set id=$id, username='$username', password='$password' where id=$id  ";

$con= mysql_connect($host,$user,$pass,$db);

$query = mysql_query($con,$q);

    if($ins)
{				  
 $message = "You Have Successfully Subscribe";
       echo "<script type='text/javascript'>alert('$message');</script>";

}
    
    
 

header('location:services.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="col-lg-6 m-auto">

<form method="post">

<br><br><div class="card">

<div class="card-header bg-dark">
<h1 class="text-white text-center">  Update Operation </h1>
</div><br>

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
</body>
</html>