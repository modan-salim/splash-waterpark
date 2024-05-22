<?php
 session_start();
?>














<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/Tickets10.css">
    <link rel="stylesheet" href="assets/css/unpkg.com_aos@2.3.1_dist_aos.css">
    <script src="assets/js/unpkg.com_aos@2.3.1_dist_aos.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</head>

<body>
     <!-- <?php
     if(isset($_SESSION["userdetails"]))
     {
        echo 'welcome'." ".$val['username'];
     } 
    ?> -->



    <!-- <div class="header" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="logo">
            <img src="assets/images/logo.png">
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Attraction</a></li>
                <li class="active"><a href="Tickets.php">Ticket</a></li>
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
                <li><a href="login.php">login</a></li>
                <li><a href="signup.php">signup</a></li>
                <li><a href="logout.php">logout</a></li>



            </ul>
        </div>

    </div> -->
    <?php 
     include 'mainheader.php';
?>


    <div class="price">

        <div  class="sub-price" >
            <h2>Splash Wonderful</h2>
            <h3>Monday to sunday Rate</h3><br>
            <span>₹ 1000.00</span><br>
            <h3>Per Person</h3>
            <h4>Include:</h4>
            <ul>
                <li>Entry Ticket <i class="fa fa-check"></i> </li>
                <li>All rides <i class="fa fa-check"></i> </li>
                <li>Guest Facility <i class="fa fa-check"></i></li>
                <li>GST & Other taxes<i class="fa fa-check"></i></li>
            </ul>

             <h4>Not Include:</h4>
            <ul>
                <li>Food & Beverages<i class="fa fa-times" style="color:red;margin-left:5px;"></i> </li>
                <li>Locker room <i class="fa fa-times" style="color:red;margin-left:5px;"></i> </li>
                <li>Costume <i class="fa fa-times" style="color:red;margin-left:5px;"></i> </li>

            </ul> 
            <br><br>
            <a href="booking.php" id="b">Book Now</a>
            <a href="Tickets.php" id="b1">Book Now</a>
            <a href="Tickets.php" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="2000" id="t1">Top To Go</a>
            


        </div>

        <div class="sub-price">
            <h2>Splash Wonderful</h2>
            <h3>Monday to sunday rate</h3><br>
            <span>₹ 1500.00</span><br>
            <h3>Per Person</h3>
            <h4>Include:</h4>
            <ul>
                <li>Entry Ticket <i class="fa fa-check"></i> </li>
                <li>All rides <i class="fa fa-check"></i> </li>
                <li>Guest Facility<i class="fa fa-check"></i> </li>
                <li>GST & Other taxes <i class="fa fa-check"></i></li>
            </ul>

            <h4>Also Include:</h4>
            <ul>
                <li>Food & Beverages <i class="fa fa-check"></i></li>
                <li>Locker room <i class="fa fa-check"></i> </li>
                <li>Costume <i class="fa fa-check"></i> </li>

            </ul>
            <br><br>
            <a href="booking1.php" id="b">Book Now</a>
           


         </div> 




    </div>
    <div class="accordianh1">

        <h1>FAQ</h1>
    </div>

     <div class="accordian">

        <div class="accordian-tab" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500" onclick="disp(this)">

            <lable for="toggole1" class="lbl">What are the park timings? <i class="fa fa-plus"></i> </lable>
            <div class="content">
                <ul>

                    <li> On weekdays & Holidays: 9:00 AM to 05:00 PM</li>
                    <li> Park is open all 365 days a year</li>
                </ul>
            </div>

        </div>
        <div class="accordian-tab" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500" onclick="disp(this)">

            <lable for="toggole2" class="lbl">What are the ticket rates and what it includes? <i class="fa fa-plus"></i> </i> </lable>
            <div class="content">
                <p>Rs. 1000 Monday to Sunday (Inclusive GST & taxes) and not include locker ,costume,food & baverage in this price</p><br>
                <p>Rs. 1500 Monday to sunday (Inclusive GST & taxes) and also include locker ,costume,food & baverage in this price</p>
                <ul>
                    <li>Ticket Rates are same for Adults & Kids (above 3 feet of height)</li> 
                    <li>Please check our “Book Now” page for rates</li>
                    <li>The ticket charges include Entry to the park and usage of all the Water Park Rides</li>
                    <li>Locker, Costume, Food & Beverage are available in package of 1500 rupees and not available in package of 1000 ruppes</li>
                </ul>
            </div>
        </div>
        <div class="accordian-tab" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500" onclick="disp(this)">

            <lable for="toggole3" class="lbl">What is the age criteria for kids and adults? <i class="fa fa-plus"></i> </lable>
            <div class="content">
                <ul>
                    <li>We consider height as the only criteria to charge for Adult or Child</li>
                    <li>Children above the height of 3 Ft will be considered as adults.</li>
                    <li>Children below the height of 3 Ft are free to enter along with their parents / guardians</li>
                </ul>
            </div>
        </div>
        <div class="accordian-tab" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500" onclick="disp(this)">

            <lable for="toggole4" class="lbl">What are criteria for kids' rides? Are all rides for kids? <i class="fa fa-plus"></i> </lable>
            <div class="content">
                <ul>
                    <li>We have rides specifically designed for kids, Height is criteria for any kids to enjoy rides.</li>
                    <li>Visit Kids ride here (link in attraction page with kids rides)</li>
            </div>
        </div>
        <div class="accordian-tab" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500" onclick="disp(this)">


            <lable for="toggole5" class="lbl">Is locker price included in fees? <i class="fa fa-plus"></i> </lable>
            <div class="content">
                <ul>
                    <li> No, Lockers in the changing rooms are charged extra, Rs. 200 per locker (Inclusive of all taxes.)</li>
                    <li>Refundable Deposit of Rs. 100 is compulsory</li>
            </div>

        </div>

        <div class="accordian-tab" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500" onclick="disp(this)">

            <lable for="toggole6" class="lbl">Do you provide accommodation and hotel services? <i class="fa fa-plus"></i> </lable>
            <div class="content">
                <ul>
                    <li>Yes,splash retreat (add hyperlink of resort page), The luxury resort has 71 stylish rooms with excellent scenic views. The contemporary rooms are divided into categories such as 27 Hotel Rooms, 14 Mughal Cottages, 4 Deluxe Cottages, 2 Suite Rooms and 24 Cottage Rooms.</li>
                    <li>A few complimentary amenities includes Kids Play area, Fitness area, Swimming pool, Breakfast, Wi-Fi, water bottles while chargeable ones are laundry services and swimming/water park costumes.</li>
                    <li>For more details contact on 9099080090/80</li>
            </div>

        </div>


        <div class="accordian-tab" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500" onclick="disp(this)">


            <lable for="toggole7" class="lbl">Is outside food allowed? <i class="fa fa-plus"></i> </lable>


            <div class="content" >
                <ul>
                    <li>No, but you can enjoy range of cuisine at our 3 Restaurant inside water park as well multi cuisine dine in at Retreat’s Cascade</li>
            </div>

        </div>


        <div class="accordian-tab" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500" onclick="disp(this)">


            <lable for="toggole8" class="lbl">Can we consume Alcohol/ Tobacco/ Non Veg? <i class="fa fa-plus"></i> </lable>

            <div class="content">
                <ul>
                    <li>No, consuming narcotics and alcohol is prohibited in state of Gujarat,splash water world resort do not encourage such practices.</li>

            </div>


        </div>


        <div class="accordian-tab"  data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500" onclick="disp(this)">


            <lable for="toggole9" class="lbl">Can we use our own floatation devices for our toddlers? <i class="fa fa-plus"></i> </lable>

            <div class="content">
                <ul>
                    <li>Yes, you can also buy it from our merchandise store inside water park.</li>

            </div>

        </div>

        <div class="accordian-tab" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500" onclick="disp(this)">




            <lable for="toggole10" class="lbl">Do I still have to pay if I’m not going to get in the water? <i class="fa fa-plus"></i> </lable>

            <div class="content">
                <ul>
                    <li>Yes, Water park entry tickets include ride fees and other amenities. You can not enter the park without tickets.</li>
                    <li>Senior citizens and people who don’t wish to use rides can stay at our resort room on a chargeable basis.</li>
                    <li>For room booking please contact on 9099080090/80</li>


            </div>

        </div>
    </div> 

    <!-- <script>
          const accordianitems =   document.querySelectorAll(".accordian-tab");

          accordianitems.forEach(item =>
           {
             const title = item.querySelectorAll(".lbl");
             const content = item.querySelectorAll(".content");

             title.addEventListener('click', () => 
              {
                 item.classList.toggle('active');
              });

           });
    </script>  -->





    
<div class="review" style="position:relative;">
    <?php
    include 'connection.php';
    $feedback="select * from feedback order by rand() limit 3"; 
    $result=mysqli_query($conn,$feedback);
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
                <div class="sub-review">
                     
                <img src="assets/images/user2.png"  style="position:absolute;top:25;left:150; height: 60px; width:60px;"></img>
<h2 class="name" style="text-align:center; position:relative; top:100;"> <?php echo $row['name']; ?></h2>

<!-- <?php echo $row['email']; ?> -->
<p><?php echo $row['message']; ?></p>
</div>

        <?php
    }

?>
</div>

   


    
   



    
    <script>
        AOS.init();

        function disp(lbl) {
            content = lbl.getElementsByClassName("content")[0];
            if (content.style.display == "block")
                content.style.display = "none";
            // $(".content").first().fadeOut("1000");

            else
                content.style.display = "block";
            // $(".content").first().fadeIn("1000");

        }
    </script>

</script>
    <?php

include 'footermain.php';
?>
</body>

</html>



