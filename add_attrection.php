<?php
include("connection.php");

//  include("admin_side.php");
include 'admin.php';
if(isset($_POST['submit'])){

$t_name = $_POST['name'];
$t_dis = $_POST['description'];

$file = $_FILES['images']['name'];
?>
<script>
alert('<?php echo $file?>');
</script>
<?php
$dst = "images/" . $file;  
$dst_db = "images/" . $file;  
move_uploaded_file($_FILES['images']['tmp_name'], $dst);  


$sql = "INSERT INTO attrec (name, description,images) VALUES ('$t_name','$t_dis','$file')";

$result = mysqli_query($conn,$sql);


if ($result) {
    echo "Attraction added successfully!";
} else {
    echo "Error adding attraction: ";
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
<h1>Add Attraction</h1>
<div class="div_deg">
    <!-- <?php
//   include("adminheader.php")
?>
     -->
        <form method="POST" enctype="multipart/form-data">
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <br>
        <div>
            <label>Discription</label>
            <textarea name="description"></textarea>
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
