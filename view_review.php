<?php include("connection.php");
include 'admin.php';
?>
<?php
  $sql="SELECT * FROM feedback";
  $result=mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css"> 

    <title>View Bookings</title>
    <style>
         .container{
            margin-top:100px;
            width:60%;
            /* position: relative;
            left: 0%; */
            /* right: 30%; */
            margin-left:450px;
        } 
        *{
            margin:0;
            padding:0;
        }
         .table_th {
            padding: 50px;
            font-size: 20px;
        }
        /* table {
            width: 100%;
            border-collapse: collapse; */
        
         .table_td {
            /padding: 10px;
           
        }
    </style>
</head>
<body>
    <div class="container">

<center>
<h1>View feedback</h1>
<table class="table">
    <tr>
       <th class="table_th">name</th>
       <th class="table_th">email</th>
       <th class="table_th">message</th>
       
    </tr>

    <?php 
               
                while($info=$result->fetch_assoc())
                {
                ?>
    <tr>
    <td class="table-td">
        <?php echo "{$info['name']}";?>
        </td>
        <td class="table-td">
        <?php echo "{$info['email']}";?>
        </td>
        <td class="table-td">
        <?php echo "{$info['message']}";?>
        </td>
        
    </tr>
    <?php
    }
    ?>
    </center>
</table>
</div>
    </body>
</html>