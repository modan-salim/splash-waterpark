<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
   <?php 
   
       include "connection.php";

       if(isset($_GET['deleteid']))
       {
          $id=$_GET['deleteid'];
     
          $sql="delete from booking where 
          EmailID='$id'";
          $result=mysqli_query($conn,$sql);
          if($sql)
          {
              echo "your booking was cancel";
              session_start();
              $_SESSION['dtid']=$id;
              header("location:booking.php");

          }
       }
   
   
   ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>