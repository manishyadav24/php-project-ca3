<?php
if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['submit']))
{
   $conn=mysqli_connect('localhost','root','','prosper') or die("Connection Failed:" .mysqli_connect_error());

   if(isset($_POST['title'])&&
      isset($_POST['content']))
    {

      $title=  $_POST['title'];
      $content= $_POST['content'];

$sql="INSERT INTO blog(title, content)
VALUES ('$title', '$content')";

$query=mysqli_query($conn, $sql);

if($query){header('Location: ../view.php');}
else{echo 'error occured';}
}
}
?>