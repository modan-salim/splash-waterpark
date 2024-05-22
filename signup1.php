<?php

if (isset($_GET['submit'])) {


  include 'connection.php';


  $firstname = $_GET['firstname'];
  $email = $_GET['email'];
  $password = $_GET['password'];
  $cpassword = $_GET['confirmpassword'];


  $data = "select * from signup where firstname= '$firstname' or email='$email' or  password='$password'";
  $check = mysqli_query($conn, $data);
  $row = mysqli_num_rows($check);
  if ($row > 0) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
      <strong>Sorry</strong>&nbsp;&nbsp; This Field Is Already Exist! 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  } else {
    if ($firstname === "") {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert" my-5>
      <strong></strong>&nbsp;&nbsp; please enter username   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else if ($password == $cpassword) {
      $sql = "INSERT INTO signup (firstname,email,password) VALUES ('$firstname','$email','$password')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" my-5>
    <strong></strong>&nbsp;&nbsp; your account is created and now you can log in!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
      }
    } else {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
    // <strong>Sorry</strong>&nbsp;&nbsp; email or passowrd do not match !
    
    
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
  }
}


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>singup</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <?php
 include 'footermain.php';
 ?>




</body>

</html>