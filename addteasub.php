<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>SIGN UP</title>
</head>
<style>
    body{
        background-color: white;
    }
   
</style>
</head>
<body>
<?php
 $servername='localhost';
 $username='root';
 $pass='';
 $dbname='schooll';
 if (isset($_POST['name'])) {
$namee =$_POST['name'];


    $con = new mysqli($servername, $username, $pass, $dbname);
$sql = "INSERT INTO subject (sname) VALUES ( '$namee')";
$rs = mysqli_query($con,$sql);

 }
 
?>
<div class="container">
    <h2>ADD SUBJECT</h2>
    <form method="POST">
    <div class="form-group">
        <form onsubmit="myfunction()">
        <label for="first"> name</label>
        <input type="text" class="form-control" id="first" placeholder=" name" name="name" required>
      </div>
      
      <button type="submit"  class="btn btn-primary"  >add</button>
      
    </form>

  </div>

</body>
</html>
