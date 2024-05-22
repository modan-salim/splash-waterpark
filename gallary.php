<?php
// error_reporting(0);
include("connection.php");
$sql="SELECT *FROM 	gallery";
$result=mysqli_query($conn,$sql);
// print_r($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gallary22.css">
    <link rel="stylesheet" href="assets/css/unpkg.com_aos@2.3.1_dist_aos.css">
    <script src="assets/js/unpkg.com_aos@2.3.1_dist_aos.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/index3.css"> -->
    <!-- <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">  -->
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
                     <li><a href="">Attraction</a></li>
                     <li><a href="">Ticket</a></li>
                     <li><a href="">Park Facilities</a>
                       
                        <ul class="drop-down  drop">
                             <li class="dp dro"><a href="foodcourt.php">Dining & Food court</a></li>
                             <li class="dp dro"><a href="gest.php">Guest Facilities</a></li>
                             <li class="dp dro"><a href="">Park Map</a></li>
                             <li class="dp dro"><a href="">Rules & Regulation</a></li>
                        </ul>   
                       
                    </li>
                     <li class="active"><a href="">Gallery</a></li>
                     <li><a href="">Contact us</a></li>


                </ul>
            </div>   
 
</div>    -->



<div class="heading"  data-aos="fade-up">
            <h1>Gallery</h1>
         </div>
        <a href="gallary.php" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="2000" id="b1">Top To Go</a>
        <a href="Tickets.php" id="t1">Book Now</a>

<section>
   <?php
   while($info=$result->fetch_assoc())
   {
    ?>
        <div class="gallery-item" >
    <img src="assets/images/<?php echo $info['images']; ?>" alt="">
  </div>
  <?php
   }
   ?>
  <!-- <div class="gallery-item">
    <img src="assets/images/tum.jpg">
  </div>
  <div class="gallery-item">
    <img src="assets/images/raindance.jpg">
  </div>
  <div class="gallery-item">
    <img src="assets/images/ride8.jpg">
  </div>
  <div class="gallery-item">
    <img src="assets/images/ride4.jpg" >
  </div>
  <div class="gallery-item">
    <img src="assets/images/ride5.jpg" alt="Image 6">
  </div>
  <div class="gallery-item">
    <img src="assets/images/ride7.jpg" alt="Image 6">
  </div>
  <div class="gallery-item">
    <img src="assets/images/bigthunder.jpg" alt="Image 6">
  </div>
  <div class="gallery-item">
    <img src="assets/images/ride12.jpg" alt="Image 6">
  </div>
  <div class="gallery-item">
    <img src="assets/images/ride11.jpg" alt="Image 6">
  </div>

  <div class="gallery-item">
    <img src="assets/images/ride14.jpg" alt="Image 6">
  </div>
  <div class="gallery-item">
    <img src="assets/images/ride55.jpeg" alt="Image 6">
  </div> -->
    
</section>

<!-- <div class="footer">

<!-- <img src="assets/images/img13.png"> -->
          <!-- <div class="logo">
          <img src="assets/images/logo.png">
          </div>
          <div class="menu">

        
                 <ul>
                     <li class="active"><a href="">Home</a></li>
                     <li><a href="">Attraction</a></li>
                     <li><a href="">Ticket</a></li>
                     <li><a href="">Park Facilities</a>
               
                          <ul class="drop-down  drop">
                               <li class="dp dro"><a href="">Dining & Food court</a></li>
                               <li class="dp dro"><a href="">Guest Facilities</a></li>
                               <li class="dp dro"><a href="">Park Map</a></li>
                               <li class="dp dro"><a href="">Rules & Regulation</a></li>
                          </ul>   
               
                      </li>
                      <li><a href="">Gallery</a></li>
                      <li><a href="">Contact us</a></li>


                 </ul>
      

          </div>

         <div class="address">

         <h4>Address –</h4>
        <span id="adspan">Ahmedabad-Mehsana Highway, Mehsana, Gujarat, India</span>
            
            </div>

             <div class="contact">

            <span>+91 90990 80080</span><br>
            <span> +91 90990 80090</span>
            
            </div>


            <p>Shankus Waterpark & Resort 2022. All Right Reserved.</p>


           <div class="social-icon">

              <ul>
                 <li class="f-icon"><a href=""><i class="fa fa-facebook" style="font-size:25px;padding:5px;"></i></a></li>
                 <li><a href=""><a href=""><i class="fa fa-youtube" style="font-size:25px;padding:3px;"></i></a></li>
                 <li><a href=""><i class="fa fa-instagram" style="font-size:25px;padding:3px;"></i></a></li>
              </ul>  
            
           </div>
            
 
        </div> --> 
<?php
 include 'footermain.php';
 ?>

    <script src="main.js"></script>


   
    <script>
        AOS.init();
     </script> 


</body> 




</html>