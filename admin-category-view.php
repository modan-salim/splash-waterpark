<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
</head>
<body>




<?php include("connection.php");?>
<?php 
    $message = "";
    if(isset($_POST['submit'])){

        $catName = $_POST['catName'];
        $catImg = $_FILES["catImg"]["name"];
        // echo $catName;
        // echo "<script> alert('rc ".$catImg."Inserted')</script>";
        
        $source=$_FILES["catImg"]["tmp_name"];
        $dest= $_FILES["catImg"]["name"];

        move_uploaded_file($source,$dest);

        $query="insert into categorys(catName,catImg) values('$catName','$dest')";
        $result = mysqli_query($con,$query);
        $message = "record Inserted";
    }
?>

<div class="container">
         <div class="col-md-12 text-light wow fadeIn" data-wow-delay="0.5s">
                    <table class="table">
                   
            <thead>
            <tr>
                
                 <th>CatId</th>
                <th>catName</th>
                <th>catImg</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                $query = "Select * from categorys";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result))
                {
                ?>
            <tr>
                <td><?php echo $row['catId'] ?></td>
                <td><?php echo $row['catName'] ?> </td>
                <td><img onerror='this.src="img/logo/logo1.png"' src="<?php echo "img/".$row['catImg']; ?>" height="80px" width="100px" /> </td>
                <td><a href="admin-categorys-edit.php?catId=<?php echo $row['catId'] ?>"> <button type="button" class="btn btn-primary" value="Edit">Edit</button> </a>
                <a onclick='return confirm ("Do You want to delete this?")' href="admin-categorys-view.php?catId=<?php echo $row['catId'] ?>"> <button type="button" class="btn btn-danger" value="Delete">Delete</button></a></td>
            </tr>
            <?php 
            }
            ?>
            
            </tbody>
        
            </table>
       </div>
    </div>

    <script src="bootstrap-5.0.2-dist\js\bootstrap.bundle.min.js"></script>
</body>
</html>