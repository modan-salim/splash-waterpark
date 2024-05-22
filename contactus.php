
<?php
 session_start();
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="assets/js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link type="text/css" rel="stylesheet" href="assets/css/contactus13.css">

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
                <li><a href="">Park Facilities</a>

                    <ul class="drop-down  drop">
                        <li class="dp dro"><a href="">Dining & Food court</a></li>
                        <li class="dp dro"><a href="">Guest Facilities</a></li>
                        <li class="dp dro"><a href="parkmap.php">Park Map</a></li>
                        <li class="dp dro"><a href="rulesandregulation.php">Rules & Regulation</a></li>
                    </ul>

                </li>
                <li><a href="">Gallery</a></li>
                <li class="active"><a href="contactus.php">Contact us</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="signup.php">signup</a></li>


            </ul>
        </div>

    </div> -->

    <?php
      include 'mainheader.php';
     ?> 

    <div class="map">


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.329259578788!2d72.42384072183897!3d22.965758889765407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9a5bf30132bd%3A0xd18b3f446f86f8e7!2sSplash%20The%20Fun%20World!5e0!3m2!1sen!2sin!4v1689920809491!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <a href="Tickets.php" id="b1">Book Now</a>

        <a href="contactus.php" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="2000" id="t1">Top To Go</a>


    </div>



    <div class="contactus">
        <div class="contactdetails">

            <span class="title">Contact Details</span><br><br>

            <span class="area">Ahmedabad-Mehsana Highway, Mehsana, Gujarat,<br> India</span><br>

            <a href="mailto:milanpatadiya2004@gmail.com">info@gmail.com</a><br><br>


            <i class="fa fa-phone"></i><span class="number">+91 90990 80080</span><br><br>
            <i class="fa fa-phone"></i><span class="number">+91 90990 80090</span><br>



        </div>
        <form name="myform" class="form1" id="formDemo" method="GET" action="submit.php">
            <div class="field0">
            <h1>Contactus Form</h1>
        </div>

            <div class="field1">
                <input type="text" id="t1" name="name" class="input_field" placeholder="Name">


                <i class="fa fa-user"></i>


                <!-- <input type="text" id="t2" name="email" class="input_field" placeholder="Email Address"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$  ">
            

              <i class="fa fa-inbox"></i> -->
            </div>


            <div class="field2">
                <input type="text" id="t2" name="email" class="input_field" placeholder="Email Address" "><b><span class=" message"></span></b>


                <i class="fa fa-inbox"></i>

                <!-- <input type="text" id="t3" name="phone" class="input_field" placeholder="Phone"   pattern="[0-9]{10}" maxlength="10" title="please enter only 10 digits">
            

              <i class="fa fa-phone"></i> -->


                <!-- <input type="text" id="t4" name="subject"class="input_field" placeholder="Subject">
            

              <i class="fa fa-info"></i> -->
            </div>


            <div class="field3">
                <input type="text" id="t3" name="phone" class="input_field" placeholder="Phone" title="please enter only 10 digits"><b><span class="message"></span></b>


                <i class="fa fa-phone"></i>
                <!-- <input type="text"name="subject" id="t5" class="input_field" placeholder="Subject" >
            

              <i class="fa fa-info"></i> -->

            </div>

            <div class="field">
                <input type="text" name="subject" id="t5" class="input_field" placeholder="Subject">


                <i class="fa fa-info"></i>
            </div>


            <div class="field4">

                <input type="submit" name="submit" value="Get in Touch" id="t7">
                <input type="checkbox" name="checkbox" id="t6" class="input_field"><span class="val">I agree that my data is <span class="edit">collected and stored.</span></span>
              




            </div><br><br><br>



        </form>
    </div>








    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>



    <script>
        AOS.init();
        $(document).ready(function() {


            $('#formDemo').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        minlength: 10


                    },
                    checkbox:{
                         required:true
                    }
                },
                messages: {
                    name: {
                        required: "Please enter Your name!",
                        minlength: "please enter atleast 3 character!"
                    },
                    email: {
                        required: "Please enter email!",
                        email: "your email address is not valid!"
                    },
                    phone: {
                        required: "Please enter phone",
                        minlength: "please enter only 10 digits!"

                    },
                    checkbox:{
                         required:"Please accept the terms of our Privacy Policy."
                    }
                },
                errorClass: "message",
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>












<?php
 include 'footermain.php';
 ?>






</body>

</html>