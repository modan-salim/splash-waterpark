<?php
include("connection.php");
include 'admin.php';
if(isset($_POST['submit'])){
    $t_name = $_POST['id'];
 
    $file = $_FILES['images']['name'];
    ?>
    <script>
    alert('<?php echo $file?>');
    </script>
    <?php
    $dst = "images/" . $file;  
    $dst_db = "images/" . $file;  
    move_uploaded_file($_FILES['images']['tmp_name'], $dst);  
    
$sql = "INSERT INTO gallery (id,images)  VALUES ('$t_name','$file')";

$result = mysqli_query($conn,$sql);


if ($result) {
    echo "Gallery added successfully!";
} else {
    echo "Error adding Gallery: ";
}

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <title>Add Gallery</title>
    <style>
       *{
            margin:0;
            padding:0;
        }
        .div_deg{
            background-color:skyblue;
            padding-top:70px;
            padding-bottom:70px;
            width:500px; 
        }
        .data{
            margin-top:100px;
            margin-left:100px;
        }
       
    </style>
</head>
<body>

<center>
   <div class="data">
<h1>Add Gallary</h1>
<div class="div_deg">

    
        <form method="POST" enctype="multipart/form-data">
        <div>
            <label>id</label>
            <input type="text" name="id">
        </div>
        <br>
        
        <div>
            <label>img:</label>
            <input type="file" name="images">
        </div>
        <br>
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>
    
<div>
    </center>
    </div>
</body>
</html>