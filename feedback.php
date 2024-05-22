<?php
session_start();

if (isset($_POST['submit'])) {

  include 'connection.php';

  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  if ($name == "") {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
    <strong></strong>&nbsp;&nbsp; please enter username !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  } else if ($email == "") {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
    <strong></strong>&nbsp;&nbsp; please enter email !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  } else if ($message == "") {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
    <strong></strong>&nbsp;&nbsp; please enter password !<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  } else {
    $insert = "INSERT INTO feedback (name,email,message) VALUES ('$name','$email','$message')";
    $insert_query = mysqli_query($conn, $insert);

    if ($insert_query) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert" my-5>
        <strong></strong>&nbsp;&nbsp; your feedback submited successfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      // header('refresh:2 , login.php');
    } else {
      echo "data is not inserted";
    }
  }



  // {
  //   echo "loggedin succesfully";
  // }



  // $userdetails = mysqli_fetch_assoc($login);
  // print_r($userdetails);
}



?>












<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link tyep="text/css" rel="stylesheet" href="assets/css/feedback5.css">
</head>

<body>
<?php 
include 'mainheader.php';
?>
  <div class="container-sm my-5">
    <div class="mb-3">
      <form name="myform" method="post" action="">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
      <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> -->
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Message</label>
      <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-outline-info">submit</button>
  </div>
  </div>

  <a href="Tickets.php" class="book">Book Now</a>
  <a href="feedback.php" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="2000" id="t1">Top To Go</a>





  
  <?php
  include 'footermain.php';
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>