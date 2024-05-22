<?php
error_reporting(0);
include("connection.php");
// include("admin_side.php");
include 'admin.php';

$sql = "SELECT * FROM attrec";
$result = mysqli_query($conn, $sql);

if (isset($_GET['attrec_id'])) {
    $del = $_GET['attrec_id'];
    $sql2 = "DELETE FROM attrec WHERE id='$del'";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2) {
        echo "Delete success";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css"> 
    <title>Document</title>
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
        .table img {
            max-width: 200px;
            max-height: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
    
        <h1><center>View all Attraction Data</center></h1>
        <table class="table"> 
            <tr>
                <th class="tabel_th">id</th>
                <th class="tabel_th">Name</th>
                <th class="tabel_th">Description</th>
                <th class="tabel_th">Image</th>
                <th class="tabel_th">Edit</th>
            </tr>
            <?php
            while ($info = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td class="table_td"><?php echo "{$info['id']}" ?></td> 
                    <td class="table_td"><?php echo "{$info['name']}" ?></td>
                    <td class="table_td"><?php echo "{$info['description']}" ?></td>
                    <td class="table_td"><img  src="images/<?php echo $info['images']; ?>"></td>
                    <td>
                        <a onclick="return confirm('Sure to delete?');" class="btn btn-danger" href="view_attrection.php?attrec_id=<?php echo $info['id']; ?>">
                           Delete 
                        </a>
                         <!-- Add an edit button/link here if you plan to implement editing functionality --> 
                    </td>
                    <td>
                        <!-- <a onclick="return confirm('Sure to add?');" class="btn btn-success" href="add_attrection.php?attrec_id=<?php echo $info['id']; ?>">
                            Add
                        </a> -->
                        <!-- Add an edit button/link here if you plan to implement editing functionality -->
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    
        </div>
</body>
</html>
