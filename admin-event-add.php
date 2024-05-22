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


<?php include("connection.php"); ?>

<?php 
    if(isset($_POST['submit'])){
        $t_name = $_POST['name'];
        $t_dis = $_POST['description'];
        
        // File upload handling
        $file = $_FILES['image']['name'];
        $tmp_file = $_FILES['image']['tmp_name'];  // Temporary location of the uploaded file
        $dst = "./imgs/" . $file;  // Destination path
        $dst_db = "imgs/" . $file;  // Path to be stored in the database
        
        move_uploaded_file($tmp_file, $dst);  // Move the uploaded file to the destination
        
        // Use prepared statements to avoid SQL injection
        $sql = "INSERT INTO attractions (name, description, image) VALUES (?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sss", $t_name, $t_dis, $dst_db);
        
        // Execute the prepared statement
        $result = $stmt->execute();
        
        // Check if the insertion was successful
        if ($result) {
            echo "Attraction added successfully!";
        } else {
            echo "Error adding attraction: " . $stmt->error;
        }
        
        // Close the prepared statement
        $stmt->close();
        
        // Close the database connection
        $con->close();
    }
      

    }
    ?>

<br><h1 class="text-center mt-5 mb-5 text-primary ">EVENT Add</h1>

            <div class="container">   
        <form action="admin-safaris-add.php" method="post" enctype="multipart/form-data">  
        <div class="row-4">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control bg-light border-5" name="safName" id="safName" placeholder="safName">
                        <label for="safName">Event Id</label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row-4">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control bg-light border-5" id="safDay" name="safDay" placeholder="safDay">
                        <label for="safDay">Event Name</label>
                    </div>
                </div>
            </div> 
            <br>
             <div class="row-4">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control bg-light border-5" id="mobileNumber" name="mobileNumber" placeholder="mobileNumber">
                        <label for="mobileNumber">Event Day</label>
                    </div>
                </div>
            </div> 
            <br>
            <div class="row-4">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control bg-light border-5" id="safPrice" name="safPrice" placeholder="safPrice">
                        <label for="safPrice">Event Price</label>
                    </div>
                </div>
            </div> 
            <br>
            <div class="row-4">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="time" class="form-control bg-light border-5" id="safTime" name="safTime" placeholder="safTime">
                        <label for="safTime">Event Time</label>
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
<