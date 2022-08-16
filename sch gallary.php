<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Gallary</title>
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
                      
                       
                       
                      <li><a style="font-size: x-large;" href="#" onclick="login()"><i class="fa fa-sign-out" aria-hidden="true"style='margin-right:16px'></i>Log in</a></li>
                      <li><a style="font-size: x-large;" href="#" onclick="sign()"><i class="fa fa-sign-out" aria-hidden="true"style='margin-right:16px'></i>Sign up</a></li>
                      <li><a style="font-size: x-large;" href="#" onclick="ser()"><i class="fa fa-info-circle" aria-hidden="true" style='margin-right:16px'></i>about</a></li>
<li><a style="font-size: x-large;" href="#" onclick="gal()"><i class="fa fa-photo" aria-hidden="true" style='margin-right:16px'></i>Gallery</a></li>
   
                </ul> 
        </nav>
        
   
    </div>
<body>
    <div class="container m-20 ">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 style="font-style: oblique; color: brown;">GALLERY</h2>
                
            </div>
        </div>
    </div>
      <div class="container m-20 ">
        <div class="row">
            <div class="col-md-4 col-lg-4" >
              <img id="first" src="https://ingridkuhn.com/themes/littleones_html/img/gallery8.jpg" style="width: 400px;">
              
<div id="M" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="i">
    
  </div>
            </div>
            <div class="col-md-4 col-lg-4" >
              <img id="sec" src="https://ingridkuhn.com/themes/littleones_html/img/gallery6.jpg" style="width: 400px;margin-left: 20px;">
              <div id="M" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="i">
                
              </div>
            </div>
            <div class="col-md-4 col-lg-4" >
              <img id="third" src="https://ingridkuhn.com/themes/littleones_html/img/gallery7.jpg" style="width: 400px;margin-left: 40px;">
              <div id="M" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="i">
                
              </div>
            </div>
        </div>
      </div>
      <div class="container m-20 ">
        <div class="row">
            <div class="col-md-4 col-lg-4" >
              <img id="four" src="https://ingridkuhn.com/themes/littleones_html/img/gallery4.jpg" style="width: 400px;">
              <div id="M" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="i">
                
              </div>
            </div>
            <div class="col-md-4 col-lg-4" >
              <img id="five" src="https://ingridkuhn.com/themes/littleones_html/img/gallery2.jpg" style="width: 400px;margin-left: 20px;">
              <div id="M" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="i">
                
              </div>
            </div>
            <div class="col-md-4 col-lg-4" >
              <img id="six" src="https://ingridkuhn.com/themes/littleones_html/img/gallery1.jpg" style="width: 400px;margin-left: 40px;">
              <div id="M" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="i">
                
              </div>
            </div>
        </div>
      </div>
      <script>
    
    function hom(){
            window.location.href = ' http://localhost/php/before.php';
          }
          function login(){
          window.location.href = ' http://localhost/php/sch%20login.php';
        }
       
        function gal(){
          window.location.href = ' http://localhost/php/sch%20gallary.php';
        }
        function ser(){
          window.location.href = 'http://localhost/php/schabout.php';
        }
        function sign(){
          window.location.href = ' http://localhost/php/sch%20sign%20up.php';
        }
    
          var x = document.getElementById("M");


var y = document.getElementById("first");
var z = document.getElementById("i");

y.onclick = function(){
  x.style.display = "block";
  z.src = this.src;

}
var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
 x.style.display = "none";
}

var x=document.getElementById("M");
var y=document.getElementById("sec");
var z=document.getElementById("i");
y.onclick = function(){
  x.style.display = "block";
  z.src = this.src;

}
var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
 x.style.display = "none";
}

var x=document.getElementById("M");
var y=document.getElementById("third");
var z=document.getElementById("i");
y.onclick = function(){
  x.style.display = "block";
  z.src = this.src;

}
var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
 x.style.display = "none";
}

var x=document.getElementById("M");
var y=document.getElementById("four");
var z=document.getElementById("i");
y.onclick = function(){
  x.style.display = "block";
  z.src = this.src;

}
var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
 x.style.display = "none";
}


var x=document.getElementById("M");
var y=document.getElementById("five");
var z=document.getElementById("i");
y.onclick = function(){
  x.style.display = "block";
  z.src = this.src;

}
var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
 x.style.display = "none";
}


var x=document.getElementById("M");
var y=document.getElementById("six");
var z=document.getElementById("i");
y.onclick = function(){
  x.style.display = "block";
  z.src = this.src;

}
var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
 x.style.display = "none";
}




      </script> 
</body>
</html>