<?php
 session_start();
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rules and regulation</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link type="text/css" rel="stylesheet" href="assets/css/rulesandregulation4.css">


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


    <div class="rules">

        <a href="Tickets.php" id="b1">Book Now</a>
        <a href="rulesandregulation.php" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="2000" id="t1">Top To Go</a>

        <h2>Rules and Regulation</h2>

        <div class="title-content">

            <div class="title">
                <h3>GENERAL RULES AND REGULATIONS</h3>
            </div>
            <div class="content">
                <ul>
                    <li>All guests must adhere to the Water Park rules and regulations and follow instructions given by lifeguards and splash employees at all the times</li>
                    <li>All persons, bags and property may be subject to screening and security checks at the Water Park entrance</li>
                    <li>Appropriate swimwear must be worn at all the times whilst using the Water Park’s slides. If wearing inappropriate swimwear (underwear,</li>
                    <li>transparent swimwear, exposing swimwear, or non-swimming attire) You will be asked to change to an appropriate swimwear or attire</li>
                    <li>Toddlers entering the water must wear water proof diapers only</li>
                    <li>Guest with disabilities/Special needs must be supervised by a parent/guardian or caretaker</li>
                    <li>Diving, running, jumping, horse play and unruly behaviour are not permitted in the Water Park</li>
                    <li>Only lifejackets issued by splash Water Park are permitted and provided FREE of charge. Personal floatation devices are NOT allowed.</li>
                    <li>There are inherent risks in participating with the slides and attractions. You are the best judge of your limitations</li>
                    <li>Guests must meet our height, weight and health conditions as indicated on all our rides and attractions</li>
                    <li>Children below the age of 14 must be accompanied by an adult over the age of 18 whilst in the Water Park</li>
                    <li>Tickets cannot be exchanged, refunded, transferred or resold and are considered void if damaged in any way</li>
                    <li>Smoking is strictly prohibited including the use of e-cigarettes (except in designated smoking areas)</li>
                    <li>By entering the Water Park, guests grant splash Water Park the right to film, video, record or photograph them on park property for any reason</li>
                    <li>without payment or consideration. We reserve the right to view any recorded images captured by guests and delete footage if deemed inappropriate.</li>
                    <li>For safety reasons, pregnant women, persons with heart conditions and back problems, Physical and Mental illness should not ride the slides.</li>
                    <li>splash Water Park is not responsible for any lost, stolen or damaged belongings.</li>
                    <li>In case of any problem related to technical or electrical issue, we may close water slides.</li>
            </div>
        </div>

        <div class="title-content1">
            <div class="title1">
                <h4>THE FOLLOWING ITEMS CANNOT BE BROUGHT INSIDE THE WATER PARK</h4>
            </div>
            <div class="content1">
                <ul>
                    <li>Food & Drinks (Except baby food and medication)</li>
                    <li>Mats, lawn chairs and folding chairs</li>
                    <li>Glass bottles</li>
                    <li>Barbeques or grills</li>
                    <li>Tobacco, Alcohol and Drugs</li>
                    <li>splash Water Park reserves the right to deny</li>
                    <li>admission or remove guest from the Water Park. Full Terms and Conditions are available at admissions & on our website.</li>

            </div>
        </div>


    </div>



    <?php

include 'footermain.php';
?>



    <script>
        AOS.init();
    </script>




</body>

</html>