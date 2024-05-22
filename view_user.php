<?php include("connection.php");
//  include 'admin.php';
include 'admin.php';
 ?>
<?php
  $sql="SELECT * FROM signup";
  $result=mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <style>
        *
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
<center>
<h1>View users</h1>
<table class="table">
    <tr>
       <th class="table-th">UserName</th>
       <th class="table-th">Email</th>
       <th class="table-th">password</th>
       
    </tr>
    <?php 
               
                while($info=$result->fetch_assoc())
                {
                ?>
    <tr>
    <td class="table-td">
        <?php echo "{$info['username']}";?>
        </td>
        <td class="table-td">
        <?php echo "{$info['email']}";?>
        </td>
        <td class="table-td">
        <?php echo "{$info['password']}";?>
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