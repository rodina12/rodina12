<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>select</title>
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

 

if (isset($_POST['btn'])) {
  if($_POST['stu'])
  {
  $stu =$_POST['stu'];
  $sub =$_POST['sub'];
 
  
      $con = new mysqli($servername, $username, $pass, $dbname);
  $sql = "INSERT INTO substu (userID,subjectID) VALUES ( '$stu','$sub')";
  
  
  $rs = mysqli_query($con,$sql);
  }
  else
    echo "please select subject";
}





?>
<div class="container">
    <h2>select</h2>
    <form method="POST">
    <div class="form-group">
        <form onsubmit="myfunction()">
        <label for="subject"> subject</label>
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
 
  
  
    echo "<option selected value='" . $row['subjectID'] . "'>" . $row['sname'] . "</option>";
    
   
  } 

  echo "</select>";

      ?> 
 <label for="student"> student</label>
<?php
       $servername='localhost';
       $username='root';
       $pass='';
       $dbname='schooll';
       $rowss[] = null;
       
           $con = new mysqli($servername, $username, $pass, $dbname);
      $sqlltea= "select * from users where rolesID=3";
      $results = mysqli_query($con,$sqlltea);
      echo "<select name='stu'>";

      while($row = $results->fetch_assoc()) {
  

    echo "<option selected value='" . $row['userID'] . "'>" . $row['name'] . "</option>";
}

  echo "</select>";

      ?> 
 


</div>
      <button type="submit" name="btn" class="btn btn-primary"  >save</button>
      
    </form>

  </div>

</body>
</html>
