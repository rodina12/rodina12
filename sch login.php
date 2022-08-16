<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>login</title>
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
<form  method="POST">
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
        <h2>LOGIN</h2>
        
          <div class="form-group">
            <form onsubmit="myfunction()">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email1" required>
          </div>
          <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
          </div>
          <button type="submit"  class="btn btn-primary" name="btnlogin">LOGIN</button>
         
        </form>
      </div>
      
          <?php
          
 
 if(isset($_POST["btnlogin"])){
 
$servername='localhost';
$username='root';
$pass='';
$dbname='schooll';

 
 $con = new mysqli($servername, $username, $pass, $dbname);
 
if(isset($_POST['email1']))
{
   $email =$_POST['email1'];
   $password =$_POST['pswd'];
 
   $sql = "select * from users where email='".$email."'AND  passwordd='".$password."'"; 
   $rs = mysqli_query($con,$sql);
   $num=mysqli_num_rows($rs);
   if($num>0){
    
         while( $row  = mysqli_fetch_array($rs))
         {
         
           if($row["rolesID"] ==1 )
           
             header("Location:managerafter.php");
           
         
           
         elseif($row["rolesID"]==2)
           
           header("Location:teacherafter.php");
         
       
       elseif($row["rolesID"]==3)
           
         header("Location:after.php");
       
 
       }
  }

  
   else

    echo"incorrect password";
   
} 
 }
 ?>


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
</body>
</html>