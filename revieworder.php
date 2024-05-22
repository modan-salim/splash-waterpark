<?php
include "connection.php";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <?php

  session_start();
  $mail = $_SESSION["mail"];

  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>Thank You !</strong>&nbsp;&nbsp;Your tickets is booked successfully
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';






  ?>

  <table class="table my-5 ">
    <thead>
      <tr>
      <th scope="col">Id</th>
  
      <th scope="col">Full Name</th>
      <th scope="col">EmailId</th>
      
     

        <th scope="col">Phone No</th>
        <th scope="col">Date</th>
        <th scope="col">TimeSlab</th>
        <th scope="col">Total Amount</th>
        <th scope="col">Operation</th> 

      </tr>
    </thead>
    <tbody>
      <?php

      $data = "select * from booking where id in (select max(id) from booking where EmailId='$mail')";
      $result = mysqli_query($conn, $data);
      if ($result) {

        $row = mysqli_fetch_assoc($result);
        echo  '<tr>
        <th scope="row">' . $row['id'] . '</td>
       
        <td>' . $row['fullname'] . '</td>

        <td>' . $row['EmailId'] . '</td>
        <td>' . $row['PhoneNo'] . '</td>
       <td>' . $row['DateofBooking'] . '</td>
        <td>' . $row['TimeSlab'] . '</td>
        <td>' . $row['TotalPrice'] . '</td>
        <td><a onclick=window.print()><i class="fa fa-download" style="color:grey;margin-left:25px;font-size:21px;"></i></a></td>

       
      </tr>';
       


      $_SESSION['mail']= $row['EmailId'];
      $_SESSION['phone']=$row['PhoneNo'];
      $_SESSION['date']=$row['DateofBooking'];
      $_SESSION['time']=$row['TimeSlab'];
      $_SESSION['tickets']=$row['TotalPrice'];
      $_SESSION['bid']=$row['id'];




       
      }
      ?>




    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>