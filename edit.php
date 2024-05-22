<?php

include 'connection.php';
//  $id=$_GET['editid'];
 session_start();
 
  if(isset($_SESSION["mail"]) && isset($_SESSION["phone"]) && isset($_SESSION["date"]) && isset($_SESSION["time"]) && isset($_SESSION["tickets"]))
 {
  $ml = $_SESSION["mail"];
  $ph = $_SESSION["phone"];
  $dt = $_SESSION["date"];
  $tm = $_SESSION["time"];
  $tk = $_SESSION["tickets"];
  $bid1 = $_SESSION["bid"];


 }

 


if(isset($_POST['submit']))
{

 



 $emailid=$_POST['email'];
 $phoneno=$_POST['phone'];
 $date=$_POST['date'];
 $time=$_POST['time'];
 $tickets=$_POST['tickets'];
 //  $price=$_GET['price'];

 $sql = "update booking set  EmailId='$emailid',PhoneNo='$phoneno',DateofBooking='$date',TimeSlab='$time',TotalPrice='$tickets' where id='$bid1'" ;

         $result = mysqli_query($conn, $sql);
         if ($result) {
             session_start();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
   
<div class="container my-5 mx-15">
    <form name="form" id="myform" action="edit.php" method="post">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">your email address</span>
        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1"  name="email" value="<?php echo $ml?>">
      </div>

      <div class="input-group mb-3">
        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2"  name="phone"  value="<?php echo $ph?>" >
        <span class="input-group-text" id="basic-addon2">your phone no </span>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Select date</span>
        <input type="date" class="form-control" aria-describedby="basic-addon1" name="date"   id="d2" required value="<?php echo $dt?>">
      </div>

      <div class="input-group mb-3">
        <select class="form-select" aria-label="Default select example" name="time" >
          <option selected value="" selected>Select</option>
          <option value="10-15-6:00">10-15-6:00</option>
        </select>
        <span class="input-group-text" id="basic-addon1">Time Slabs</span>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Select Tickets</span>
        <select class="form-select" aria-label="Default select example"  name="tickets">
          <option value="" selected>Select</option>
          <option value="1000">1</option>
          <option value="2000">2</option>
          <option value="3000">3</option>
          <option value="4000">4</option>
          <option value="5000">5</option>
          <option value="6000">6</option>
          <option value="7000">7</option>
          <option value="8000">8</option>
          <option value="9000">9</option>
          <option value="10000">10</option>
        </select>
      </div>


      <!-- <div class="input-group mb-3">
        <div id="result" class="form-control" name="price">

        </div>
        <span class="input-group-text" id="basic-addon1">Total Price</span>
      </div> -->
      <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-outline-success" name="submit">update</button>
      </div>
    </form>
  </div>

  <script>
          var date=new Date();
          console.log(date);
          var tdate=date.getDate();
          console.log(tdate);
          var month=date.getMonth() + 1;
          if(month < 10)
          {
               month = '0'+ month;
          }
          if(tdate < 10)
          {
               tdate = '0'+ tdate;
          }
          var year = date.getUTCFullYear();
          var mindate= year + "-" + month + "-" + tdate;
          console.log(mindate);

          document.getElementById("d2").setAttribute('min',mindate);
      </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
  </body>
</html>