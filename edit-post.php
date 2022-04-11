<?php
if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['submit']))
{
   $conn=mysqli_connect('localhost','root','','prosper') or die("Connection Failed:" .mysqli_connect_error());


$id=  $_POST['blogid'];
$title=  $_POST['title'];
$content= $_POST['content'];

$sql="UPDATE blog SET title='$title',content='$content' WHERE id=$id";

$query=mysqli_query($conn, $sql);

if($query){header('Location: view.php');}
else{echo 'error occured';}
}

?>