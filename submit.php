<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  

    <?php


    if (isset($_GET['submit'])) {


        include 'connection.php';


        $name = $_GET['name'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];
        $subject = $_GET['subject'];

        $data = "select * from getintouch where name = '$name' or email='$email' or  phone='$phone' or subject='$subject'";
        $check = mysqli_query($conn, $data);
        $row = mysqli_num_rows($check);
        if ($row > 0) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" my-5>
            <strong>Sorry '.$name.'</strong>&nbsp;&nbsp; This Field Is Already Exist! 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } else {

            $sql = "INSERT INTO getintouch (name,email,phone,subject) VALUES ('$name','$email','$phone','$subject')";

            $result = mysqli_query($conn, $sql);
            if ($result) {
                                 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                 <strong>Thanks '.$name.'</strong>&nbsp;&nbsp;The data that you have entered has been submited successfully!
                                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                               </div>';
                              
 
            } else {

                echo "Could not insert record: " . mysqli_error($conn);
            }
        }
    }




    ?>
 
 <script src="assets/bootstrap/jqury-3/jquery-3.7.0.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.js"></script> 
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>