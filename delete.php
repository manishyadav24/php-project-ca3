<?php
if(isset($_GET['blogid']))
{
   $conn=mysqli_connect('localhost','root','','prosper') or die("Connection Failed:" .mysqli_connect_error());


$id=  $_GET['blogid'];

$sql="DELETE FROM `blog` WHERE id=$id";

$query=mysqli_query($conn, $sql);

if($query){header('Location: view.php');}
else{echo 'error occured';}
}

?>