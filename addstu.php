<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>add</title>
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
  $email =$_POST['email'];
  $phone =$_POST['phone'];
  $password =$_POST['pwd'];
  $address =$_POST['address'];
 
  
      $con = new mysqli($servername, $username, $pass, $dbname);
  $sql = "INSERT INTO users (name, email, address, passwordd, phone ,rolesID) VALUES ( '$namee','$email',' $address', '$password','$phone',3)";
  
  
  $rs = mysqli_query($con,$sql);
}






?>
<div class="container">
    <h2>ADD STUDENT</h2>
    <form method="POST">
    <div class="form-group">
        <form onsubmit="myfunction()">
        <label for="first"> name</label>
        <input type="text" class="form-control" id="first" placeholder=" name" name="name" required>
      </div>
      <div class="form-group">
       
       <label for="email">Email</label>
       <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
     </div>
      <div class="form-group">
        <label for="phone">Mobile number</label>
        <input type="tel" class="form-control" id="phone" placeholder="Mobile number" name="phone" required>
      </div>
      <div class="form-group">
        <label for="address">address</label>
        <input type="text" class="form-control" id="address" placeholder="address" name="address" required>
      </div>
    
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      </div>

      <button type="submit"  class="btn btn-primary"  >add</button>
      
    </form>

  </div>

</body>
</html>
