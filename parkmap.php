
<?php
 session_start();
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/unpkg.com_aos@2.3.1_dist_aos.css">
    <script src="assets/js/unpkg.com_aos@2.3.1_dist_aos.js"></script>
    <link type="text/css" rel="stylesheet" href="assets/css/parkmap6.css">
</head>

<body>

    <!-- <div class="header" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="logo">
            <img src="assets/images/logo.png">

        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Attraction</a></li>
                <li><a href="Tickets.php">Ticket</a></li>
                <li class="active"><a href="">Park Facilities</a>

                    <ul class="drop-down  drop">
                        <li class="dp dro"><a href="">Dining & Food court</a></li>
                        <li class="dp dro"><a href="">Guest Facilities</a></li>
                        <li class="dp dro"><a href="parkmap.php">Park Map</a></li>
                        <li class="dp dro"><a href="rulesandregulation.php">Rules & Regulation</a></li>
                    </ul>

                </li>
                <li><a href="">Gallery</a></li>
                <li><a href="contactus.php">Contact us</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="signup.php">signup</a></li>


            </ul>
        </div>

    </div> -->

    <?php 
  include 'mainheader.php';
?>

    <div class="parkmap"><br><br><br><br><br>
        <h2>Park MAP</h2>
        <div class="parkmapimage">

            <img src="assets/images/parkmap1.jpg">

            <div class="park-logo">
                <img src="assets/images/logo.png">
            </div>

            <a href="tickets.php" id="b1">Book Now</a><br>

        </div>

        <a href="index.php" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700" id="t">Top To Go</a>

    </div>


 


    <script>
        AOS.init();
    </script>
       <?php
 include 'footermain.php';
 ?>
</body>

</html>