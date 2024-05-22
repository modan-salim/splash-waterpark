<?php
// error_reporting(0);
include("connection.php");
$sql="SELECT *FROM attrec";
$result=mysqli_query($conn,$sql);
// print_r($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attrection</title>

  
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="attraction2.css">
</head>
<body>
<?php 
include 'mainheader.php';
?>
 <!-- <div class="header" data-aos="fade-right" data-aos-offset="300"
     data-aos-easing="ease-in-sine">
            <div class="logo">
                 <img src="assets/images/logo.png">

            </div>    
            <div class="menu">
                <ul>
                     <li><a href="">Home</a></li>
                     <li class="active"><a href="">Attraction</a></li>
                     <li><a href="">Ticket</a></li>
                     <li><a href="">Park Facilities</a>
                       
                        <ul class="drop-down  drop">
                             <li class="dp dro"><a href="foodcourt.php">Dining & Food court</a></li>
                             <li class="dp dro"><a href="gest.php">Guest Facilities</a></li>
                             <li class="dp dro"><a href="">Park Map</a></li>
                             <li class="dp dro"><a href="">Rules & Regulation</a></li>
                        </ul>   
                       
                    </li>
                     <li><a href="">Gallery</a></li>
                     <li><a href="">Contact us</a></li>


                </ul>
            </div>   
</div>  -->

     <section>
        <div class="text">
            <h1>ATTRACTION</h1>
        
        </div>

        <a href="Tickets.php" id="t1">Book Now</a>
        <a href="attrection.php"  id="b1">Top To Go</a>
       
   
                <!-- <div class="col-md-4">
                <img  class="aatect" src="assets/images/img3.png">
                <p>
                TORNADO
                </p>
                </div>
                <div class="col-md-4">
                <img  class="aatect" src="assets/images/img4.png">
                <p>
                TUMBLE JUMBLE
                </p>
                </div>
                <div class="col-md-4">
                <img class="aatect" src="assets/images/img5.png">
                <p>
                BUBBA TUB
                </p>
                </div>
                <div class="col-md-4">
                <img  class="aatect" src="assets/images/img8.png">
                <p>
                Whizzard
                </p>
                </div>
                <div class="col-md-4">
                <img  class="aatect" src="assets/images/img9.png">
                <p>
                TSUNAMI BAY
                </p>
                </div>
                <div class="col-md-4">
                <img  class="aatect" src="assets/images/img8.jpeg">
                <p>
                BOOMBASTIC
                
                </p>
                </div>
                <div class="col-md-4">
                <img  class="aatect" src="assets/images/img9.jpeg">
                <p>
                Space Shot
                </p>
                </div>
                <div class="col-md-4">
                <img  class="aatect" src="assets/images/kids-1.png">
                <p>
                KIDS COMPLEX

                </p>
                </div>
                <div class="col-md-4">
                <img  class="aatect" src="assets/images/fun.png">
                <p>
                FUN ISLAND

                </p>
                </div>
                <div class="col-md-4">
                <img  class="aatect" src="assets/images/lazy-river.png">
                <p>
                THRILL & CHILL CREEK

                </p>
        </div>
        </div>
     </div> -->
        <div class="element">
        <?php
           while($info=$result->fetch_assoc())
           {
            ?>
            <div class="sub-element"data-aos="fade-up" >
          
            <a  href="#"> <img src="assets/images/<?php echo $info['images']; ?>" alt=""></a>
            
               <p>
               <?php echo"{$info['name']}"?>
               </p>
           </div>
           <?php
           }
           ?> 

               
           
               <!-- <div class="sub-element"> 
            <a  href="fun2.php">  <img src="assets/images/img3" alt=""></a>
                <p>
                 TORNADO
                </p>
             </div> 
            <div class="sub-element">
            <a  href="fun3.php">  <img src="assets/images/img4" alt=""></a>
                <p>
                TUMBLE JUMBLE
                </p>
            </div>
            <div class="sub-element">
                <a  href="fun4.php"> <img src="assets/images/img5" alt=""> </a>
                <p>
                MANTA & BUBBA TUB
                </p>
            </div>
            <div class="sub-element">
            <a  href="fun5.php"> <img src="assets/images/img6" alt=""></a>
               <p>
                Whizzard
                </p>
            </div>
            <div class="sub-element">
            <a  href="fun6.php"> <img src="assets/images/Wavepool (1)" alt=""></a>
                <p>
                TSUNAMI BAY
                </p>
            </div>
            <div class="sub-element">
                <a href="fun7.php"><img src="assets/images/img8" alt=""></a>
                <p>
                BOOMBASTIC
                </p>
            </div>
            <div class="sub-element">
               <a href="fun8.php"> <img src="assets/images/img9" alt=""></a>
                <p>
                Space 
                </p>
            </div>
            <div class="sub-element">
                <a href="fun9.php"><img src="assets/images/kids-1" alt=""></a>
                <p>
                KIDS COMPLEX
                </p>
            </div>
            <div class="sub-element">
               <a href="fun10.php"> <img src="assets/images/lazy-river" alt=""></a>
                <p>
                KIDS COMPLEX
                </p>
            </div>
            <div class="sub-element">
                <a href="fun11.php "><img src="assets/images/fun" alt=""></a>
                <p>
                FUN ISLAND
                </p>
            </div> -->
            
           </section> 

      
  
     
          <div class="secondbox" data-aos="fade-up">
            <div class="text">
                <p>You can't Buy Happiness,But You Can Go TO The<br> Splash WaterPark, And That's Kind Of The Same Thing <i><img width="75" height="75" src="assets/icon/bablo1.png" alt="external-water-slide-theme-park-flaticons-lineal-color-flat-icons"/></i><i><img width="75" height="75" src="assets/icon/bablo2.png" alt="external-enjoy-lifestyles-flaticons-lineal-color-flat-icons"/></i>

</i></p>
            </div>
            <!-- <img src="assets/images/1.png" alt="" srcset=""> -->
         </div>

        
        
<?php
include 'footermain.php';
?>
    <!-- <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>  -->
    <script src="main3.js"></script>
    <script>
        AOS.init();
     </script>  
 

</body>
</html>