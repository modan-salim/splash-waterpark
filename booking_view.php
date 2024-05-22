<?php include("connection.php");
include 'admin.php';?>
<?php
  $sql="SELECT * FROM booking";
  $result=mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
         .tabel_th {
            padding: 20px;
            font-size: 20px;
        }
        /* table {
            width: 100%;
            border-collapse: collapse; */
        
        .table_th, .table_td {
            /* padding: 10px;
            text-align: center;
            border: 1px solid black; */
        }
    </style>
</head>
<body>
    
<div class="container">
<h1><center>View Bookings</center></h1>
<table class="table">
    <tr>
       <th class="table-th">id</th>
       <th class="table-th">Eamilid</th>
       <th class="table-th">PhoneNo</th>
       <th class="table-th">DateofBooking</th>
       <th class="table-th">TimeSlab</th>
       <th class="table-th">TotalPrice</th>
    </tr>
    <?php 
               
                while($info=$result->fetch_assoc())
                {
                ?>
    <tr>
    <td class="table-td">
        <?php echo "{$info['id']}";?>
        </td>
        <td class="table-td">
        <?php echo "{$info['EmailId']}";?>
        </td>
        <td class="table-td">
        <?php echo "{$info['PhoneNo']}";?>
        </td>
        <td class="table-td">
        <?php echo "{$info['DateofBooking']}";?>
        </td>
        <td class="table-td">
        <?php echo "{$info['TimeSlab']}";?>
        </td>
        <td class="table-td">
        <?php echo "{$info['TotalPrice']}";?>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
</div>
    </body>
</html>