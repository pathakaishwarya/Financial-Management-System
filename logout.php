<?php
              

              $host="localhost";
              $user="root";
              $pass="";
              $db="client";

             

         $con= mysqli_connect($host,$user,$pass,$db);
        

			  $i=15;
		$name='none';
		$pass='none';
		
             $loki = "UPDATE `inn` SET `uname`='$name',`pass`='$pass' WHERE id='$i'";
              $l=mysqli_query($con,$loki);
			  
			  if($l)
			  {
				  Header("location:index.php");
			  }
			  else
			  {
Header("location:index.php");
				  
			  }
?>