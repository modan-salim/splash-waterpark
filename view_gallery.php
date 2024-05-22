<?php
// Include your error reporting settings here, if needed

include("connection.php");
// include("admin_side.php");
// include 'adminevertical.php';
include 'admin.php';

if (isset($_GET['gallery_id'])) {
    $del = intval($_GET['gallery_id']); // Ensure $del is an integer
    $sql2 = "DELETE FROM gallery WHERE id=?";
    
    // Use prepared statements to prevent SQL injection
    if ($stmt = mysqli_prepare($conn, $sql2)) {
        mysqli_stmt_bind_param($stmt, 'i', $del);

        if (mysqli_stmt_execute($stmt)) {
            echo "Delete successful";
        } else {
            echo "Delete failed: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}

$sql = "SELECT * FROM gallery";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>View all Attraction Data</title>
    <style>
        /* .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }
        .table img {
            max-width: 200px;
            max-height: 200px;
        }
        .btn-danger {
            background-color: red;
            color: white;*/
        
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
    <div class="data">
    <div class="container">
        <h1 class="text-center">View all Attraction Data</h1>
        <table class="table">
            <thead>
                <tr>
                    <th class="table_th">ID</th>
                    <th class="table_th">Image</th>
                    <th class="table_th">Edit</th>
                    <!-- <th class="table_th">Add</th> -->
                </tr>
            </thead>
            <tbody>
                <?php while ($info = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td class="table_td"><?php echo $info['id']; ?></td>
                        <td class="table_td"><img src="images/<?php echo $info['images']; ?>" alt="Attraction Image"></td>
                        <td class="table_td" >
                            <a onclick="return confirm('Sure to delete?');" class="btn btn-danger" href="view_gallery.php?gallery_id=<?php echo $info['id']; ?>">
                                Delete
                            </a>
                        </td>
                        <!-- <td>
                            <a onclick="return confirm('Sure to add?');" class="btn btn-danger" href="gallery_add.php?gallery_id=<?php echo $info['id']; ?>">
                                Add
                            </a>
                        </td> -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
                </div>
</body>
</html>
