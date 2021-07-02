<?php

if(isset($_POST['done']))
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="client";

   

$con= mysql_connect($host,$user,$pass,$db);


    $name=$_POST['name'];
    $email=$_POST['mail'];

$id = $_GET['id'];

$q = " DELETE FROM `clientinfo` WHERE id = $id ";

mysql_query($con, $q);

header('location:services.php');
}
?>