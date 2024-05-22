<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="assets/css/unpkg.com_aos@2.3.1_dist_aos.css">
    <script src="assets/js/unpkg.com_aos@2.3.1_dist_aos.js"></script>
<link type="text/css" rel="stylesheet"  href="assets/css/header1.css">

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








echo '<div class="header" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="logo">
            <img src="assets/images/logo.png">

        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Attrection.php">Attraction</a></li>
                <li><a href="Tickets.php">Ticket</a></li>
                <li><a href="">Park Facilities</a>

                    <ul class="drop-down  drop">
                        <li class="dp dro"><a href="foodcourt.php">Dining & Food court</a></li>
                        <li   class="dp dro"><a href="gest.php">Guest Facilities</a></li>
                        <li   class="dp dro"><a href="parkmap.php">Park Map</a></li>
                        <li   class="dp dro"><a href="rulesandregulation.php">Rules & Regulation</a></li>
                    </ul>

                </li>
                <li  ><a href="gallary.php">Gallery</a></li>
                <li ><a href="contactus.php">Contact us</a></li>
                <li ><a href="feedback.php">Feedback</a></li>';

                // <!-- <li><a href="login.php">login</a></li> -->
                if(!$loggedin)
                {
               echo ' <li><a href="signup.php">signup</a></li>';
                }
                if($loggedin)
                {
                   echo '<li><a href="logout.php">logout</a></li>';
                }



          echo '  </ul>
        </div>

    </div>';
    ?>
    <script>
        AOS.init();
    </script>
</body>
</html>

