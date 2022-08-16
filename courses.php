
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>courses</title>
    <style>
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
        <li><a style="font-size: x-large;" href="#" onclick="ser()"><i class="fa fa-info-circle" aria-hidden="true" style='margin-right:16px'></i>about</a></li>
<li><a style="font-size: x-large;" href="#" onclick="gal()"><i class="fa fa-photo" aria-hidden="true" style='margin-right:16px'></i>Gallery</a></li>

<li><a style="font-size: x-large;" href="#" onclick="course()"><i class="fa fa-book" aria-hidden="true" style='margin-right:16px'></i>My courses</a></li>

<li><a style="font-size: x-large;" href="#"onclick="parents()" ><i class="fa fa-user" aria-hidden="true" style='margin-right:16px'></i>parents</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
          <li class="logoutt" ><a style="font-size: x-large;" href="#" onclick="logout()"><i class="fa fa-sign-out" aria-hidden="true"style='margin-right:16px'></i>log out</a></li>
          
        </ul> 
  
    </nav>
    

</div>
    <body>
    <div class="container">
    <table class="table table-hover" >
    <tr>
        <th>student name</th>
        <th>subject name</th>
     
  </tr>
    <?php


$servername='localhost';
$username='root';
$pass='';
$dbname='schooll';

 
 $con = new mysqli($servername, $username, $pass, $dbname);

 
 $sql="SELECT substu.subjectID, users.name, subject.sname
 FROM substu
 INNER JOIN users ON substu.userID = users.userID
 INNER JOIN subject ON substu.subjectID = subject.subjectID";


 $rs = mysqli_query($con,$sql);
  $num=mysqli_num_rows($rs);
  if($num>0){
      while($result=mysqli_fetch_assoc($rs)){
          echo " <tr>
          <th>".$result['name']."</th>
          <th>".$result['sname']."</th>
          
          </tr>";
   
          }
      
    }
    
  else{
      echo"no data found";
  }

  
  ?>
</table>

    <script>
    
    function ser(){
          window.location.href = 'http://localhost/php/aboutafter.php';
        }
       
        function hom(){
          window.location.href = ' http://localhost/php/after.php';
        }
        function gal(){
          window.location.href = ' http://localhost/php/schgallaryafter.php';
        }
        function logout(){
          window.location.href = ' http://localhost/php/before.php#';
        }
        function parents(){
          window.location.href = ' http://localhost/php/parents.php';
        }
        function course(){
          window.location.href = ' http://localhost/php/courses.php';
        }
      
  </script> 
        </body>
</html>