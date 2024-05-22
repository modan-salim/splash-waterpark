<?php

session_start();

if (isset($_POST['login'])) {

  include 'connection.php';

  $email = $_POST["email"];
  $password = $_POST["password"];
  $logquery = "select * from  signup where email='$email'";
  $adminquery = "select * from  admin1 where email='$email'";

  $login  = mysqli_query($conn, $logquery);
  $loginadmin  = mysqli_query($conn, $adminquery);
  // if($login)
  // {
  //   echo "loggedin succesfully";
  // }
  $emailcount = mysqli_num_rows($login);
  $emailcountadmin = mysqli_num_rows($loginadmin);




  // $userdetails = mysqli_fetch_assoc($login);
  // print_r($userdetails);
  if ($emailcount > 0) {
    $row = mysqli_fetch_assoc($login);

    if ($row['password'] == $password) {

      echo '<div class="alert alert-success alert-dismissible fade show" role="alert" my-5>
      <strong>Error!</strong> &nbsp;&nbsp;loggedin successfully
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
      $_SESSION["userdetails"] = $row;
      // echo '<br>';
      // print_r($_SESSION["userdetails"]);
      header("refresh:3,booking1.php");
    } else {

      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
      <strong>Error!</strong> &nbsp;&nbsp;password do not match!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
  } else if ($emailcountadmin > 0) {
    $row1 = mysqli_fetch_assoc($loginadmin);
    if ($row1['password'] == $password) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert" my-5>
      <strong>Error!</strong> &nbsp;&nbsp;admin loggedin successfully
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
      $_SESSION["admindetails"] = $row1;
      // echo '<br>';
      // print_r($_SESSION["userdetails"]);
      header("refresh:3,index.php");
    } else {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
      <strong>Error!</strong> &nbsp;&nbsp;admin password do not match!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
  } else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
  <strong>Error!</strong> &nbsp;&nbsp; email  do not match!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
}


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/unpkg.com_aos@2.3.1_dist_aos.css">
    <script src="assets/js/unpkg.com_aos@2.3.1_dist_aos.js"></script>
  <link type="text/css" rel="stylesheet" href="assets/css/login1.css">

</head>

<body>

<?php 
include 'mainheader.php';
?>


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
            <li class="dp dro"><a href="rulesandregulation.php">Rules&Regulation</a></li>
          </ul>

        </li>
        <li><a href="">Gallery</a></li>
        <li><a href="contactus.php">Contact us</a></li>


      </ul>
    </div>
  </div> -->



  <div class="container-sm mt-5 mb-5 px-5 py-5 text-white bg-info rounded">
    <h2 class="text-center">log in to our website !</h2><br>
    <form method="post" action="">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Email Address</span>
        <input type="text" class="form-control" placeholder="Enter Your Email Address" aria-label="Username" aria-describedby="basic-addon1" name="email" required>
      </div>

      <div class="input-group mb-3">
        <input type="text" class="form-control " placeholder="Enter Your password" aria-label="Recipient's username" aria-describedby="basic-addon2" name="password" required>
        <span class="input-group-text" id="basic-addon2">password</span>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-outline-primary" name="login">SignIn</button>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">


      </div>
    </form>

  </div>

  <!-- <a href="login.php" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="2000" id="ttg">Top To Go</a> -->



  <!-- <div class="footer">

    <img src="assets/images/img24.png">
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
            <li class="dp dro"><a href="rulesandregulation.php">Rules&Regulation</a></li>
          </ul>

        </li>
        <li><a href="">Gallery</a></li>
        <li><a href="contactus.php">Contact us</a></li>


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


    <p>Splash Waterpark & Resort 2022. All Right Reserved.</p>


    <div class="social-icon">

      <ul>
        <li class="f-icon"><a href=""><i class="fa fa-facebook" style="font-size:25px;padding:5px;"></i></a></li>
        <li><a href=""><a href=""><i class="fa fa-youtube" style="font-size:25px;padding:3px;"></i></a></li>
        <li><a href=""><i class="fa fa-instagram" style="font-size:25px;padding:3px;"></i></a></li>
      </ul>

    </div>
  </div> -->
  <script>
    AOS.init();
  </script>
<?php

include 'footermain.php';
?

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>










<!-- <div class="mb-3">
  <label for="basic-url" class="form-label">Your vanity URL</label>
  <div class="input-group">
    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
  </div>
  <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
</div>

<div class="input-group mb-3">
  <span class="input-group-text">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Username" aria-label="Username">
  <span class="input-group-text">@</span>
  <input type="text" class="form-control" placeholder="Server" aria-label="Server">
</div>

<div class="input-group">
  <span class="input-group-text">With textarea</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>

 -->