



<?php
 session_start();




// $val=$_SESSION["userdetails"];
 if(!isset($_SESSION["userdetails"]))
 {
   header("location:signupagain.php");

 }

 $val=$_SESSION['userdetails'];

 
 




if ($_SERVER["REQUEST_METHOD"] == "POST") {

 
  include 'connection.php';
  $fullname = $_POST['fullname'];
  $emailid = $_POST['email'];
  $phoneno = $_POST['phone'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $tickets = $_POST['tickets'];

  //  $price=$_GET['price'];

  $sql = "INSERT INTO booking(fullname,EmailId,PhoneNo,DateofBooking,TimeSlab,TotalPrice) VALUES ('$fullname','$emailid','$phoneno','$date','$time','$tickets')";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    session_start();
    $_SESSION['mail'] = $emailid;
    $_SESSION['phone'] = $phoneno;
    $_SESSION['date'] = $date;
    $_SESSION['time'] = $time;
    $_SESSION['tickets'] = $tickets;




    header("location:revieworder.php");
  } else {

    echo "Could not insert record: " . mysqli_error($conn);
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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link type="text/css" rel="stylesheet" href="assets/css/booking3.css">

  <script>
         function validate()
   {
      var x= document.form.time.value;
      var y= document.form.tickets.value;
      if(x=="")
      {
         alert('please select  Timeslab ');
         document.form.time.focus();
         return false;
      }

      if(y=="")
      {
         alert('please select  Tickets ');
         document.form.tickets.focus();
         return false;
      }
      

      
   }

    </script>



</head>

<body>
  <?php
 
 



  // echo '<div class="alert alert-success alert-dismissible fade show" role="alert" my-5>
  //         <strong>Welcome </strong> &nbsp;&nbsp; you are logged in successfully!
  //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  //       </div>';


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
  </div>

   -->
   <?php
    include'mainheader.php';
   ?>
  
   <div class="container-sm  mt-5 mb-5 px-5 py-5 text-white bg-info rounded">
    <form name="form" id="myform" action="booking.php" method="post" onsubmit="return validate()">
    <div class="input-group mb-3">
        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2"  name="fullname">
        <span class="input-group-text" id="basic-addon2">FullName</span>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">your email address</span>
        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1"  name="email" value="<?php echo $val['email']?>">
      </div>

      <div class="input-group mb-3">
        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2"  name="phone">
        <span class="input-group-text" id="basic-addon2">your phone no </span>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Select date</span>
        <input type="date" class="form-control" aria-describedby="basic-addon1" name="date" required id="d1">
      </div>

      <div class="input-group mb-3">
        <select class="form-select" aria-label="Default select example" name="time" id="optionlist">
          <option value="">select</option>

          <option value="10-15-6:00">10:15-6:00</option>
        </select>
        <span class="input-group-text" id="basic-addon1">Time Slabs</span>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Select Tickets</span>
        <select class="form-select" aria-label="Default select example" name="tickets" id="optionlist1">
          <option value="">select</option>
          <option value="1500r">1(1500r)</option>
          <option value="3000rr">2(3000r)</option>
          <option value="4500r">3(4500r)</option>
          <option value="6000r">4(6000r)</option>
          <option value="7500r">5(7500r)</option>
          <option value="9000r">6(9000r)</option>
          <option value="10500r">7(10500r)</option>
          <option value="12000r">8(12000)</option>
          <option value="13500r">9(13500r)</option>
          <option value="15000r">10(15000r)</option>
        </select>
      </div>


      <!-- <div class="input-group mb-3">
        <div id="result" class="form-control" name="price">

        </div>
        <span class="input-group-text" id="basic-addon1">Total Price</span>
      </div> -->
      <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-outline-success" name="submit" onclick="validate()">Book Tickets</button>

      </div>
    </form>
  </div>
  
  <a href="booking.php" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="2000" id="ttg">Top To Go</a>


<?php
include 'footermain.php';
?>



  <script>
    var date = new Date();
    console.log(date);

    var tdate = date.getDate();
    console.log(tdate);
    var month = date.getMonth() + 1;
    console.log(month);
    if (month < 10) {
      month = "0" + month;
    }
    if (tdate < 10) {
      tdate = "0" + tdate;
    }
    var year = date.getUTCFullYear();
    console.log(year);
    var mindate = year + "-" + month + "-" + tdate;

    document.getElementById("d1").setAttribute('min', mindate);
    console.log(mindate);


    // function validate() {


    //   var data = document.getElementById("optionlist");
    //   if (data.value == "") {
    //     alert("please select timeslab");
        
    //   }

    //   var data1 = document.getElementById("optionlist1");
    //   if (data1.value == "") {
    //     alert("please select  Tickets");
    //   }
    // }
  </script>
  <script>
    AOS.init();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>





</body>

</html>