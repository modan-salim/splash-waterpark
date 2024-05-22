<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
   
</head>
<body>





<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<?php include("connection.php") ?>


<?php 

$eveId = $_GET["eveId"];

$query = "select * from events where eveId='$eveId'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
    
?>
<h1 class="text-center mt-5 mb-5 text-primary ">Event Edit</h1>

<div class="container">   
<form action="admin-evet-edit.php?safId=<?php echo $eveId; ?>" method="post" enctype="multipart/form-data">  
<div class="row-4">
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" class="form-control bg-light border-5" name="safId" value="<?php echo $row['safId']; ?>" id="safId" placeholder="safName">
            <label for="safName">Event Id</label>
        </div>
    </div>
</div>
<br>
<div class="row-4">
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" class="form-control bg-light border-5" name="safName" value="<?php echo $row['safName']; ?>" id="safName" placeholder="safName">
            <label for="safName">Event  Name</label>
        </div>
    </div>
</div>
<br>
<div class="row-4">
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" class="form-control bg-light border-5" id="mobileNumber" value="<?php echo $row['mobileNumber']; ?>" name="mobileNumber" placeholder="Mobile No.">
            <label for="safDay">Event Day</label>
        </div>
    </div>
</div> 
<br>
 <div class="row-4">
    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" class="form-control bg-light border-5" id="safDay"  value="<?php echo $row['safDay']; ?>" name="safDay" placeholder="Sufari Day">
            <label for="mobileNumber">Event Price</label>
        </div>
    </div>
</div> 


<br>
<div class="row-4">
    <div class="col-md-6">
        <div class="form-floating">
            <input type="time" class="form-control bg-light border-5"  value="<?php echo $row['safTime']; ?>" id="safTime" name="safTime" placeholder="safTime">
            <label for="safTime">Event time</label>
        </div>
    </div>
</div> 
<br>
<div class="row-5">
    <div class="col-md-6">
        <div class="form-floating">

            <select name="catId" class="form-control bg-light border-5" id="catId">
            <?php 
            $queryCat = "Select * from categorys";
            $resultCat = mysqli_query($con,$queryCat);
            while($rowCat = mysqli_fetch_array($resultCat))
            {
            ?>
                <option value="<?php echo $rowCat['catId']?>"> 
                <?php echo $rowCat['catName']?> 
            </option>
            <?php
            }
            ?>
            </select>
            
            <label for="catId">Category Name </label>
        </div>
    </div>
</div>
<br>
<div class="row-4">
    <div class="col-md-6">
        <div class="form-floating">
            <input type="file" class="form-control bg-light border-5" id="catImg" name="catImg" placeholder="catImg">
           <input type="hidden" name="oldImg" value="<?php echo $row['catImg']; ?>"/> 
            <label for="catImg">catImg</label>
        </div>
    </div>
</div>
<br> 
<div class="col-2">
    <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Submit</button>
</div>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
    $eveid = $_POST['eveId'];
    $evename = $_POST['eveName'];
    $eveday = $_POST['eveDay'];
    $eveprice = $_POST['evePrice'];
    $evetime = $_POST['eveTime'];
    $catId = $_POST['catId'];
    $catImg = $_FILES["catImg"]["name"];
    $oldImg = $_POST["oldImg"];
    $flag = "0";
    if($catImg == "")
    {
        $query="update events set eveId='$$eveid',eveName=' $evename',eveDay='$eveday',evePrice=' $eveprice',eveTime='$evetime',catId='$catId',catImg='$oldImg' where eveId='$eveid'";
        $result=mysqli_query($con,$query);
        if($result)
        {
            $flag = "1";
        }
    }
    else
    {
        $query="update events set eveId='$$eveid',eveName=' $evename',eveDay='$eveday',evePrice=' $eveprice',eveTime='$evetime',catId='$catId',catImg='$oldImg' where eveId='$eveid'";
        $result=mysqli_query($con,$query);
        move_uploaded_file($_FILES["catImg"]["tmp_name"],"catImages/".$catImg);
        if($result)
        {
            $flag = "1";
        }
    }


    if($flag == "1")
    {
        echo "<script>alert('Record Updated successfully')</script>";
    }
    else
    {
        echo mysqli_error($con);
    }
}
?>


