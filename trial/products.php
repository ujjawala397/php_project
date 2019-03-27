<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  
  <title>Shop From Us</title> 
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="products.css">

  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity= 
  "sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style_slider.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <a href="#about">About</a>
    <a  style="float: right;" class="fas fa-shopping-cart fa-5x"> Cart </a>
    
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fas fa-bars"></i>
    </a>
  </div>











<div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">1 / 3</div>
  <img src="mass5.jpg" style="width:100%" height="600px">
  
</div>

<div class="mySlides">
  <div class="numbertext">2 / 3</div>
  <img src="mass11.jpg" style="width:100%" height="600px">
  
</div>
<div class="mySlides">
  <div class="numbertext">3 / 3</div>
  <img src="mass6.png" style="width:100%" height="600px">
  
</div>
<div class="mySlides">
  <div class="numbertext">3 / 3</div>
  <img src="mass12.jpg" style="width:100%" height="600px">
  
</div>
<div class="mySlides">
  <div class="numbertext">3 / 3</div>
  <img src="mass7.png" style="width:100%" height="600px">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 3</div>
  <img src="mass13.jpg" style="width:100%" height="600px">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>




<table class="table table-hover" style="font-size: 25px;">
  <thead style="text-align: center;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody style="text-align: center;">
    <tr>
      <th scope="row">1</th>
      <td>Corriandar</td>
      <td ><img src="corriandar.jpg" height="150px" width="50%"></td>
      <td>12/-</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Red Chilly</td>
      <td><img src="chilly.jpg" height="200px" width="50%"></td>
      <td>12/-</td>
    </tr>
    <tr>
      <th scope="row">3</th>
     <td>Black Pepper</td>
      <td><img src="kaali.jpg" height="200px" width="50%" ></td>
      <td>12/-</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Corriandar</td>
      <td ><img src="corriandar.jpg" height="150px" width="50%"></td>
      <td>12/-</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Red Chilly</td>
      <td><img src="chilly.jpg" height="200px" width="50%"></td>
      <td>12/-</td>
    </tr>
    <tr>
      <th scope="row">6</th>
     <td>Black Pepper</td>
      <td><img src="kaali.jpg" height="220px" width="50%" ></td>
      <td>12/-</td>
    </tr>
  </tbody>
</table>
<div class="col-sm-12">
   <img src="mass14.jpg" width="100%" height="auto">
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