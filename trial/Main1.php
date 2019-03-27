<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  
  <title>LOGIN & REGISTER</title> 
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style_anil.css">
  <link rel="stylesheet" type="text/css" href="button.css">
  
  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity= 
  "sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="javascript.js"></script>
 
</head>

<body>
  <div class="container-fluid  r1">
    <div class="col-sm-4 col-md-4 col-xs-4 col-lg-4"><img src="#" alt="Logo here"></div>
    <div class="col-sm-8 col-md-8 col-xs-8 col-lg-8"><span style="color:orange; font-size:60px;">Juju</span> <span class="over" style="font-size: 60px">Spices</span></div>
  </div>
    

    <div class="topnav" id="myTopnav">
    <a href="main1.php" class="active">Home</a>
    <a href="logout.php" class="login">Logout
    <?php
     echo $_SESSION['mail'];
    ?>  
    </a>
    <a href="contact_us.php">Contact</a>
    <a href="about.php">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fas fa-bars"></i>
    </a>
  </div>

  <div class="container-fluid c3 col-sm-12 col-md-12 col-xs-12 col-lg-12">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>



</script>
  <div class="container-fluid" >

<div id="id01" class="modal">
  <form class="modal-content animate" action="login.php" method="GET" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="wall.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter E-Mail" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>





<div class="container-fluid" >
<div id="id02" class="modal">
  <form class="modal-content animate" action="register.php" method="GET">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Full name</b></label>
      <input type="text" name="name" placeholder="Enter Your Name" required="Please Enter Name"><br>
      <label for="email"><b>E-mail</b></label>
      <input type="email" name="email" placeholder="Enter E-mail" required="Please Enter E-mail"><br>
      <label for="text"><b>Phone number</b></label>
      <input type="number" name="number" placeholder="Enter Phone Number" required="Please Enter Your Number"><br>
      
      <label for="psw"><b>Password</b></label>
      <input type="password" name="pass" placeholder="Enter password" required="Please set your Password"><br>
      <label for="psw"><b>Confirm Password</b></label>
      
      <input type="password" name="pass1" placeholder="Confirm password" required="Please verify you password"><br>      
      <button type="submit">Sign Up</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>




<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    <div class="box col-sm-4" style="height: auto;"><span onclick="document.getElementById('id01').style.display='block'"> Login</span></div>
    <div class="col-sm-4" style="height: auto;">

    </div>
    <div class="box1 col-sm-4" style="height: auto;" ><span onclick="document.getElementById('id02').style.display='block'">Register Now</span></div><br><br>
    </div>
  </div>
</div>



<div class="col-sm-12">
  <img src="mass13.jpg" width="102.4%" height="600px" style="margin-left: -15px;">
</div>

<table class="table table-dark">
  <thead>
    <tr style="font-size: 30px;">
      <th scope="col">#</th>
      <th scope="col">About</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <tr style="font-size: 20px">
      <th scope="row"></th>
      <td>Makes your<br>
          Food tastier</td>
      <td>+91-9412131680<br>
        <i class="fab fa-instagram fa-2x"></i> 
        <i class="fab fa-facebook fa-2x"></i>
        <i class="fab fa-whatsapp fa-2x"></i>

        <br>

      </td>
      <td><i class="fas fa-map-marker-alt fa-3x"></i><br>Dal Mandi Pul<br>
        Saharanpur<br>Uttar Pradesh</td>
    </tr>
    
  </tbody>
</table>

</body>
</html>
