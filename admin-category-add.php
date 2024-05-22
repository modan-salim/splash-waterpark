

    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
        <style>
            header

{
  
   width:100%;
   height:160px;
   background: rgb(2,239,241);
   background: linear-gradient(0deg, rgba(2,239,241,1) 0%, rgba(85,222,176,1) 0%, rgba(45,196,253,1) 100%);
 
   
 

 }


.header .logo
  {

      width:205px;
      height:158px;
      margin-left:55px;
      float:left;
     }


  .header .logo  img
    {
         width:100%;
         height:100%;
    } 
   

    .header .menu
      {
      
          width:980px;
          height:160px;
          margin-left:200px;
          float:left;
        }


      .header .menu  ul
       {
           list-style-type: none;
          }

       .header .menu  ul li
        {
            display: inline-block;
            padding:4px;
  
            margin-top:58px;
            margin-right:35px;
            padding:10px 13px;
            transition: 1s all;
            position:relative;
        }


        .header .menu  ul li a 
          {

              text-decoration: none;
              color:black;
              font-size: 26px;
             font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
             font-weight:700px;
             transition: 1s all;
           }

          .header .menu  ul li a:hover 
           {
              text-decoration: underline 2px solid;
              color:rgb(56, 128, 167);
              
              }

              .header .menu  ul li.active a 
               {
                 color:green;
                 text-decoration: underline 2px solid;
               }


               .banner
                {
                    margin-top:30px;
                    margin-left:70px;
                   
                   }

                   .header .menu ul li ul.drop li
                    {
                         display:block;
                        
                         padding:8px 5px;
                         margin-top:3px;
                         
                       

                         
                         
                    }

                    .header .menu ul li ul.drop li a 
                      {
                          color:white;
                         font-size:20px;
                         opacity:0.7;
                         font-weight:100;
                       
                      
                      }

                      .header .menu ul li ul.drop li a:hover
                        {
                          color:rgb(56, 128, 167);
                      
                        } 

                      

                    .header .menu ul li ul.drop 
                     {
                         width:100%;
                         position:absolute;
                         z-index:999;
                         background-color:#2c313d;
                         display:none;
                         margin-top:10px;
                     
                   
                       
                         
                        
                        

                     }

                    


                      .header .menu ul li:hover ul.drop
                        {
                           display:block;
                         
                        }

        </style>
    </head>
    <body>
        
   


    <?php include("connection.php");?>
    <div class="header" data-aos="fade-right" data-aos-offset="300"
     data-aos-easing="ease-in-sine">
            <div class="logo">
                 <img src="assets/images/logo.png">

            </div>    
            <div class="menu">
                <ul>
                     <li><a href="">Home</a></li>
                     <li class="active"><a href="">Attraction</a></li>
                     <li><a href="">Ticket</a></li>
                     <li><a href="">categorys</a>
                       
                         <ul class="drop-down  drop">
                             <li class="dp dro"><a href="admin-category-view.php">category view</a></li>
                             <li class="dp dro"><a href="admin-category-add.php"></a></li>
                                                     </ul>    
                       
                    </li>
                     <li><a href="">Gallery</a></li>
                     <li><a href="">Contact us</a></li>


                </ul>
            </div>   
</div>


<div class="container">
    <form action="admin-categorys-add.php" method="post" enctype="multipart/form-data">  
            <div class="row-4">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control bg-light border-5" id="catName" name="catName" placeholder="catName">
                        <label for="catName">catName</label>
                    </div>
                </div>
            </div><br>
            <div class="row-4">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="file" class="form-control bg-light border-5" id="catImg" name="catImg" placeholder="catImg" >
                        <label for="catImg">catImg</label>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-2">
                <button class="btn btn-primary w-100 py-3" id="submit" name="submit" type="submit">Submit</button>
            </div>


        </form>
    </div>

    <script src="bootstrap-5.0.2-dist\js\bootstrap.bundle.min.js"></script>

</body>
    </html>

