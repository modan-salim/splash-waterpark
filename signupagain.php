<?php

include 'header.php';

session_start();
if (isset($_POST['submit'])) {


  include 'connection.php';


  $username = $_POST['firstname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['confirmpassword'];


  // $data = "select * from signup where firstname= '$firstname' or email='$email' or  password='$password'";
  $emailvalidate = "select * from signup where email='$email'";
  $email_query = mysqli_query($conn, $emailvalidate);
  $emailcount = mysqli_num_rows($email_query);





  //  $row=mysqli_fetch_assoc( $email_query);
  //  print_r($row);
  if ($emailcount > 0) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
      <strong>Sorry</strong>&nbsp;&nbsp;this field is laready exits!! 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  } else {
    if ($username == "") {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
      <strong></strong>&nbsp;&nbsp; please enter username !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else if (strlen($username) < 2 || strlen($username) > 25) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
      <strong></strong>&nbsp;&nbsp;please write 1 to 25 !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else if ($email == "") {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
      <strong></strong>&nbsp;&nbsp; please enter email !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else if ($password == "") {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
      <strong></strong>&nbsp;&nbsp; please enter password !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else if (strlen($password) < 8 || strlen($password) > 15) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
      <strong></strong>&nbsp;&nbsp;please write password between 8 to 15 !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else if ($cpassword == "") {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
      <strong></strong>&nbsp;&nbsp; please enter confirm password !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else if (!($password == $cpassword)) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
      <strong></strong>&nbsp;&nbsp;confirm password is not match !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else {
      $insert = "INSERT INTO signup (username,email,password) VALUES ('$username','$email','$cpassword')";
      $insert_query = mysqli_query($conn, $insert);

      if ($insert_query) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" my-5>
          <strong></strong>&nbsp;&nbsp; sign up successfully!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        // header('refresh:2 , login.php');
      } else {
        echo "data is not inserted";
      }
    }
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="assets/css/unpkg.com_aos@2.3.1_dist_aos.css">
    <script src="assets/js/unpkg.com_aos@2.3.1_dist_aos.js"></script>
  <link type="text/css" rel="stylesheet" href="assets/css/signup1.css"> 
  <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

  <!-- <script>
         function validate()
   {
     
      var x= document.myform.firstname.value;
      var y= document.myform.email.value;
      var z= document.myform.password.value;
      var w= document.myform.confirmpassword.value;
   
      if(x=="")
      {
         alert('pls enter firtstname ');
         document.myform.firstname.focus();
         return false;
      }
      else if(x.value.length<2)
      {
         alert('pls enter your name greater then 2 chaeracter');
         document.myform.firstname.focus();
         return false;

      }

      if(y=="")
      {
         alert('pls enter your email');
         document.myform.email.focus();
         return false;
      }



      if(z=="")
      {
         alert('pls enter password');
         document.myform.password.focus();
         return false;
      }



      if(w=="")
      {
         alert('pls enter confirmpassword');
         document.myform.confirmpassword.focus();
         return false;
      }
     

   }

    </script>  -->


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
        <li><a href="contactus.php">Contact us</a></li>
    </div>
  </div> -->


  

  <div class="container-sm mt-5 mb-5 px-5 py-5 text-white bg-info rounded">
    <h2 class="text-center">Sign Up to our website</h2><br>
    <form name="myform" class="form1" id="formDemo" method="post" action="" onsubmit="return validate()">
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Username Name</span>
        <input type="text" class="form-control" placeholder="Enter your username" aria-label="Username" aria-describedby="addon-wrapping" name="firstname">
      </div><br>

      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Email</span>
        <input type="email" class="form-control" placeholder="Enter your Email" aria-label="Username" aria-describedby="addon-wrapping" name="email">
      </div><br>


      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Passwoard</span>
        <input type="text" class="form-control" placeholder="enter unique password " aria-label="Username" aria-describedby="addon-wrapping" name="password">
      </div><br>


      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Confirm Password</span>
        <input type="text" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="addon-wrapping" name="confirmpassword">
      </div><br>

      <div class="d-grid gap-2 col-6 mx-auto my-2">
        <button type="submit" class="btn btn-outline-primary" name="submit">Create Account</button>
        <small class="form-text text-muted gap-2 col-6 mx-auto">Already Have An Account ? <a href="login1.php">sign in</a></small>
      </div>

    </form>
  </div>

  <?php
 include 'footermain.php';
 ?>




  <script>
    AOS.init();
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


  
</body>

</html>