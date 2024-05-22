




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link type="text/css" rel="stylesheet" href="assets/css/index3.css">

<link rel="icon" type="image/x-icon" href="assets/images/logo.png">
  </head>
  <body>

  <?php
    
   
    if(isset($_SESSION['userdetails']))
    {
          $loggedin=true;
    }
    else{
         $loggedin=false;
    }




?>



<!-- echo ' -->
<div class="header" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="logo">
            <img src="assets/images/logo.png">

        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Attraction</a></li>
                <li><a href="Tickets.php">Ticket</a></li>
                <li><a href="">Park Facilities</a>

                    <ul class="drop-down  drop">
                        <li class="dp dro"><a href="">Dining & Food court</a></li>
                        <li class="dp dro"><a href="">Guest Facilities</a></li>
                        <li class="dp dro"><a href="parkmap.php">Park Map</a></li>
                        <li class="dp dro"><a href="rulesandregulation.php">Rules & Regulation</a></li>
                    </ul>

                </li>
                <li><a href="">Gallery</a></li>
                <li><a href="contactus.php">Contact us</a></li>
                <li><a href="feedback.php">Feedback</a></li>';
<?php
                // <!-- <li><a href="login.php">login</a></li> -->
                if(!$loggedin)
                {
               echo ' <li><a href="signup.php">signup</a></li>';
                }
                if($loggedin)
                {
                   echo '<li><a href="logout.php">logout</a></li>';
                }?>



          <!-- echo '   -->
        </ul>
        </div>

    </div>';
    ?>
    <script>
        AOS.init();
    </script>
</body>
</html>



   
  
  

