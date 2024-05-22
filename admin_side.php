


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">

    <title>Admin Dashboard</title>
    <style>
        *{
    margin: 0;
    padding: 0;
}

.header{
   background-color: skyblue; 
   position: sticky;
   line-height: 70px;
   padding-left: 30px;

}
a{
    text-decoration: none!important;
}
a,a:hover{
    text-decoration: none;
}
.logout{
    float: right;
    padding-right: 30px;

}
ul{
    background-color: #424a5b;
    width: 16%;
    height: 100%;
    position: fixed;
    padding-top: 5%;
    text-align: center;
}
ul li{
    list-style: none;
    padding-bottom: 30px;
    font-size: 20px;
}
ul li a{
    color: skyblue;
    text-decoration: none;
    font-weight: bold;
    /* font-size: ; */

}
    </style>
</head>
<body>
    <header class="header">
        <a href="">Admin Dashboard</a>
        <div class="logout">
            <a href="login.php"class="btn btn-primary">Logout</a>
        </div>
    </header>
<aside>
    <ul>
        <li>
            <a href="add_attrection.php">Attrection Add</a>
        </li>
    

        <li>
            <a href="view_attrection.php"> Attrection edit</a>
        </li>
        <li>
            <a href="gallery_add.php">Gallery Add</a>
        </li>
        <li>
            <a href="view_gallery.php">Gallery Edit</a>
        </li>
    
    
        <li>
            <a href="booking_view.php">View Bookings</a>
        </li>
    
    
        <li>
            <!-- <a href="edit_attrection.php">Edit Attrection</a> -->
        </li>
    
    
        <li>
            <a href="view_user.php">view users</a>
        </li>
        <li>
            <a href="view_review.php">view Rivews</a>
        </li>
    </ul>
    
    
</aside>
<div></div>
</body>
</html>
