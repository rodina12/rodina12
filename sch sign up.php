<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>SIGN UP</title>
</head>
<style>
    body{
            background-color: white;
        }
      
        .modal {
  position: fixed;
  padding-top: 100px;
  left: 0;
  top: 0;
}
.modal-content {
  margin: auto;
  display: block;}
  body{
            background-color: white;
        }
		li.logoutt{
			margin-left:250px;
		}

		nav{float:right;}

		ul li{
		display: inline-block; padding:10px;
		font-size:20px; font-family:raleway;
		}

		ul li:hover{
		color:orange;
  
		}
   
</style>
</head>
<body>
<?php
$name='mysql:host=localhost;dbname=schooll';
$username='root';
$pass='';
if (isset($_POST['name'])) {
$namee =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$password =$_POST['pwd'];
$address =$_POST['address'];

try {

$con = new PDO($name,$username ,$pass);
$sql = "INSERT INTO users (name, email, address, passwordd, phone ,rolesID) VALUES ( '$namee','$email',' $address', '$password','$phone','3')";
$con->exec($sql);

}
catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}



}

?>
  <div class="container">

<nav class="navbar navbar-default ">
       
    <nav class="navbar navbar-inverse navbar-fixed-top" >
        <ul class="nav navbar-nav">
          <div class="navbar-header">
          <img style="width: 100px;" src="https://thumbs.dreamstime.com/b/education-people-school-logo-design-template-education-people-school-logo-design-template-117344868.jpg">
          </div>
         

                                
        </ul>
        <ul class="nav navbar-nav">
                <li ><a style="font-size: x-large;" href="#" onclick="hom()" ><i class="fa fa-home" aria-hidden="true" style='margin-right:16px' ></i>Home</a></li>
                      
                       
                       
                      <li><a style="font-size: x-large;" href="#" onclick="login()"><i class="fa fa-sign-out" aria-hidden="true"style='margin-right:16px'></i>Log in</a></li>
                      <li><a style="font-size: x-large;" href="#" onclick="sign()"><i class="fa fa-sign-out" aria-hidden="true"style='margin-right:16px'></i>Sign up</a></li>
                      <li><a style="font-size: x-large;" href="#" onclick="ser()"><i class="fa fa-info-circle" aria-hidden="true" style='margin-right:16px'></i>about</a></li>
<li><a style="font-size: x-large;" href="#" onclick="gal()"><i class="fa fa-photo" aria-hidden="true" style='margin-right:16px'></i>Gallery</a></li>
   
                </ul> 
  
    </nav>
    

</div>


<div class="container">
    <h2>SIGN UP</h2>
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

     
      <button type="submit"  class="btn btn-primary"  >SIGN UP</button>
      <button type="submit"  class="btn btn-primary"  onclick="clickk()" >LOG IN</button>
    </form>


         
  
      
        </div>
     
        
      <script> 
      
      function hom(){
        window.location.href = ' http://localhost/php/before.php#';
      }
      function ser(){
          window.location.href = 'http://localhost/php/schabout.php';
        }
        function login(){
          window.location.href = ' http://localhost/php/sch%20login.php';
        }
       
       
        function gal(){
          window.location.href = ' http://localhost/php/sch%20gallary.php';
        }
        function sign(){
          window.location.href = ' http://localhost/php/sch%20sign%20up.php';
        }

      </script> 
  <script> 
      function clickk() {
        window.location.href = 'http://localhost/php/sch%20login.php';
        }

 </script>
</body>
</html>
