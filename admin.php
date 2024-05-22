<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<style>
body {
  font-family: "Lato", sans-serif;
}


.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  
  top: 0;
  left: 0;
  background-color: #7fcec5;
background-image: linear-gradient(315deg, #7fcec5 0%, #14557b 74%); 
   
  background-color: #4D9DE0;
  padding-top: 20px;
}


.sidenav a, .dropdown-btn {
  padding: 15px 10px 15px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.logout{
    float: right;
    padding-right: 60px;
    margin-top: 20px;

}
.sidenav img{
  padding-buttom:25px;
}
header{
  width: 100%;
    height: 70px;
    background-color:skyblue;
    position: fixed;
    top:0;
    background-color: #7fcec5;
background-image: linear-gradient(315deg, #7fcec5 0%, #14557b 74%); 
    
    /* background: rgb(2,239,241);
    ??: linear-gradient(0deg, rgba(2,239,241,1) 0%, rgba(85,222,176,1) 0%, rgba(45,196,253,1) 100%);
   */
}
header h2{
  float:left;
  font-family: "Lato", sans-serif;
  margin-right:800px;
  color:white;
  
  /* margin-top:25px;
  padding-bottom:25px; */
}
/* .sidenav{
    margin-top:150px;
    hight:100%;
} */
/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  /* color: ; */
}



.active {
  background-color: green;
  color: white;
}

.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}


.fa-caret-down {
  float: right;
  padding-right: 8px;
}


</style>
</head>
<body>
 <header>
 <div class="logout">
  <h2>Admin Dashboard</h2>
            <a href="login.php" class="btn  btn-primary ">Logout</a>
        </div>
</header>
<div class="sidenav">
<img src="assets/images/logo.png" style="height:150px; margin-bottom:25px; width:81%px;"alt="">
  <a href="booking_view.php">View Booking</a>
  <a href="view_review.php">View Feedback</a>
  <a href="view_user.php">View User</a>
  <button class="dropdown-btn">Attraction
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="add_attrection.php">Add Attraction</a>
    <a href="view_attrection.php">Edit Attraction</a>

  </div>
  <button class="dropdown-btn">Gallary
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="gallery_add.php">Add Gallary</a>
    <a href="view_gallery.php">Update Gallary</a>
    
  </div>

</div>


<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html> 
