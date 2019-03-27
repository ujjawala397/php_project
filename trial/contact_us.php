<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>

   <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="products.css">

  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity= 
  "sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style_slider.css">


<style>
	
.parallax {
  /* The image used */
  background-image: url('about2.jpg');

  /* Full height */
  height: 70%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}



</style>
 
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
    <a  style="float: right;" class="fas fa-shopping-cart fa-5x"> Cart </a>
    
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fas fa-bars"></i>
    </a>
  </div>

<div class="parallax"></div>






<!--Section: Contact v.2-->
<section class="container-fluid"  style="background-color: #1a1a1a;color: white">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Any Query</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="contact.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" required="">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control" required="">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" required="">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required=""></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p><a  href="https://goo.gl/maps/hFvaVdNqvwB2"> Dal Mandi Pul, Saharanpur, Uttar Pradesh</a></p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+91 9412131680</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>jujuspices1@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>




<div class="col-sm-12">
   <img src="mass5.jpg" width="100%" height="auto">
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