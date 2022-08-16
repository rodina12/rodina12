<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>update</title>
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
 
 $servername='localhost';
 $username='root';
 $pass='';
 $dbname='schooll';
 $namee;
 $email;
 $phone;
 $password;
 $address;
 $subjectID;
$conn = new mysqli($servername, $username, $pass, $dbname);

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    
    
    $sqll= "SELECT * from `users` where userID ='$id'";
    $rs = mysqli_query($conn,$sqll);
    $row=mysqli_fetch_assoc($rs);
    $namee=$row['name'];
    
    $email =$row['email'];
    $phone =$row['phone'];
    $password =$row['passwordd'];
    $address =$row['address'];
    $subjectID =$row['subjectID'];
    if(isset($_POST['update'])){
    $sql="UPDATE `users` SET name='$_POST[name]',email='$_POST[email]',phone='$_POST[phone]', address='$_POST[address]', passwordd='$_POST[pwd]', subjectID='$_POST[sub]' where userID ='$_POST[id]'";
    $rss = mysqli_query($conn,$sql);
    header("Location:teachers.php");
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
        <li  ><a style="font-size: x-large;" href="#" onclick="hom()" ><i class="fa fa-home" aria-hidden="true" style='margin-right:16px' ></i>Home</a></li>
                  <li><a style="font-size: xx-large;" href="#" onclick="tea()"><i class="fa fa-user" aria-hidden="true" style='margin-right:16px'></i>teachers</a></li>
                  </ul>
<ul class="nav navbar-nav navbar-right">
          <li class="logoutt" ><a style="font-size: x-large;" href="#" onclick="logout()"><i class="fa fa-sign-out" aria-hidden="true"style='margin-right:16px'></i>log out</a></li>
          
        </ul>  
    </nav>
    

</div>



<div class="container">
  <h2>UPDATE TEACHERS</h2>
    <form method="POST">
    <div class="form-group">
        <form onsubmit="myfunction()">
        <label for="first">id</label>
        <input type="num" class="form-control" id="id" placeholder=" id" name="id" value="<?php echo "$id";?>">
      </div>
    <div class="form-group">
    
        <label for="first"> name</label>
        <input type="text" class="form-control"  id="first" placeholder=" name" name="name" value="<?php echo "$namee";?>">
      </div>
      <div class="form-group">
       
       <label for="email">Email</label>
       <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo "$email";?>" required>
     </div>
      <div class="form-group">
        <label for="phone">Mobile number</label>
        <input type="tel" class="form-control" id="phone" placeholder="Mobile number" name="phone" value="<?php echo "$phone";?>" required>
      </div>
      <div class="form-group">
        <label for="address">address</label>
        <input type="text" class="form-control" id="address" placeholder="address" name="address" value="<?php echo "$address";?>" required>
      </div>
    
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo " $password";?>" required>
      </div>
      <div class="form-group">
      <label for="sub">subject</label>

      <?php
       $servername='localhost';
       $username='root';
       $pass='';
       $dbname='schooll';
       $rows[] = null;
       
           $con = new mysqli($servername, $username, $pass, $dbname);
      $sqll= "select * from subject";
      $result = mysqli_query($con,$sqll);
    

    
  
  echo "<select name='sub'>";
  
 
  while($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['subjectID'] . "'>" . $row['sname'] . "</option>";
}

  echo "</select>";

      ?> 
</div>
      
      <button type="submit" name="update" class="btn btn-primary"  >update</button>
      
    </form>

  </div>
  <script> 
       
       
       function hom(){
         window.location.href = 'http://localhost/php/managerafter.php#';
       }
    
       function logout(){
         window.location.href = ' http://localhost/php/before.php#';
       }
     
       function tea(){
         window.location.href = '   http://localhost/php/teachers.php';
       }


     </script> 
</body>
</html>
