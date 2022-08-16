<?php
 
 $servername='localhost';
 $username='root';
 $pass='';
 $dbname='schooll';
$con = new mysqli($servername, $username, $pass, $dbname);
 
    $id=$_GET["id"];
$sql=mysqli_query($con,"DELETE FROM `users` WHERE `userid`=$id");
header("Location:student.php");
?>