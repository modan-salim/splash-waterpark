<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        margin: 0;
        padding: 0;
    }
    .header

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


    *{
        
        font-family: 'Courier New', Courier, monospace;
    }
    .first{
      display: flex;
       justify-content: center;
       margin-top:150px;
           
    }
    .first img{
        height: 550px;
        margin: 50px;
        width: 70%;
        /* box-shadow: 0 29px 52px rgba(0,0,0,0.40), 0 25px 16px rgba(0,0,0,0.20);
             border-radius: 5px; */
             box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;


    }
    .fi-1 h1{
      font-family: sans-serif;
        font-weight: bold;
        
        font-size: 40px;
        text-align: center;
    }
    
    
    .fi-3{
        font-family: 'Courier New', Courier, monospace;
        font-weight: bold;
       
        font-size: 28px;
        text-align: center;
    }
    .fi-2{

        text-align: center;
        margin: 35px 0 35px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        

    }
   

    
    .fi-5{
        position: absolute;
        left: 25%;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin: 25px ;
        padding: 10px;
    }
    .footer
                             {
                               
                                width:100%;
                                height:500px;
                                background-color: red;
                                position:absolute;
                                margin: 40% 0 0 0;;
                             }
                            .footer .logo
                             {

                                  position:absolute;
                                
                                  width:180px;
                                  height:130px;
                                  top:10%;
                                  left:45%;
                                  

                             }

                            

                             .footer .menu
                             {
                              position:absolute;
                           
                              width:1000px;
                              height:140px;
                              top:33%;
                              left:18%;

                             }
                             body{
  background-color:#EEE6FF;
 }

                              .footer .menu ul
                                {
                                   
                                   list-style-type: none;
                                   padding:25px 30px;
                                   margin-left:110px;
                                }

                                .footer .menu ul li
                                  {
                                    display: inline-block;
                                    padding:4px;
                          
                                    margin-top:10px;
                                    margin-right:10px;
                                    padding:5px 5px;
                                    transition: 1s all;
                                    position:relative;
                                  }

                                  .footer .menu ul li a 
                                    {
                                        
                                        text-decoration: none;
                                        color:black;
                                        font-size: 26px;
                                        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                         font-weight:700px;
                                         transition: 1s all;
                                    }

                                    .footer .menu  ul li a:hover 
                                    {
                                       text-decoration: underline 2px solid;
                                       color:rgb(255, 106, 0);
                                       
                                       }

                                       .footer .menu ul li ul.drop li
                                       {
                                            display:block;
                                           
                                            padding:8px 5px;
                                            margin-top:3px;
                                            
                                           
                                          
                 
                                            
                                            
                                       }
                       
                                       .footer .menu ul li ul.drop li a 
                                       {
                                           color:white;
                                          font-size:20px;
                                          opacity:0.7;
                                          font-weight:100;
                                        
                                       
                                       }
               
                                       .footer .menu ul li ul.drop li a:hover
                                         {
                                           color:rgb(56, 128, 167);
                                       
                                         } 
               
                                       
               
                                     .footer .menu ul li ul.drop 
                                      {
                                          width:100%;
                                          position:absolute;
                                          z-index:999;
                                          background-color:#2c313d;
                                          display:none;
                                          margin-top:5px;
                                          top:-280px;
                                          left:-120px;
                                  
                                        
                                          
                                         
                                         
               
                                      }
               
                                     
               
               
                                       .footer .menu ul li:hover ul.drop
                                         {
                                            display:block;
                                           
                                        
                                         }
               
                           
                             .footer .address
                             {
                              position:absolute;
                             
                              width:350px;
                              height:50px;
                              top:60%;
                              left:50px;
                             }

                             .footer .address h4
                               {
                                    color:black;
                                    font-size:20px;
                                    line-height: 30px;

                               }

                               .footer .address span#adspan
                               {
                                font-size:20px;
                                line-height: 30px;
                               }


                             .footer .contact
                             {
                              position:absolute;
                             
                              width:230px;
                              height:100px;
                              top:60%;
                              left:600px;
                             }

                             .footer .contact span 
                              {
                                 font-size: 20px;
                              }

                             .footer .social-icon
                             {
                              position:absolute;
                             
                              width:270px;
                              height:70px;
                              top:85%;
                              right:100px;
                              display:flex;
                              justify-content: center;
                           
                             
                             }

                             .footer .social-icon ul
                              {
                                 list-style-type: none;
                              }
 
                              .footer .social-icon ul li
                              {
                                 display:inline-block;
                                 background-color:#2c313d;
                                 border:1px solid gray;
                                 border-radius: 100%;
                               padding:10px 13px;
                               transition: 1s linear all;
                               margin-left:10px;
                                 
                              }


                              .footer .social-icon ul li.f-icon
                                {
                                   margin-top:5px;
                                   vertical-align:bottom;
                                 
                                }
                              

                              .footer .social-icon ul li a .fa-facebook:first-child
                                {
                                   color:white;
                                   width:15px;
                                   height:15px;
                                                                     
                                   
                                   
                                }
                              .footer .social-icon ul li:hover 
                               {
                                 background-color: purple;
                               }

                               .footer .social-icon ul li a 
                                 {
                                   color:white;
                                 } 

                                 
                             
 

                             .footer img
                              {
                                 width:100%;
                                 height:100%;
                              }

                              .footer p
                              {
                                 position:absolute;
                                 top:90%;
                                 left:50px;
                                 font-size: 20px;
                                 font-family: serif;
                                 font-weight: bolder;
                              }
    </style>
    <body>
    
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
                        <li><a href="">Park Facilities</a>
                          
                           <ul class="drop-down  drop">
                                <li class="dp dro"><a href="">Dining & Food court</a></li>
                                <li class="dp dro"><a href="">Guest Facilities</a></li>
                                <li class="dp dro"><a href="">Park Map</a></li>
                                <li class="dp dro"><a href="">Rules & Regulation</a></li>
                           </ul>   
                          
                       </li>
                        <li><a href="">Gallery</a></li>
                        <li><a href="">Contact us</a></li>
   
   
                   </ul>
               </div>   
    
           </div>


<div class="first">
    <img src="assets/images/slider3.jpg" alt="">
    </div>
   
   <div class="fi-1"> 
    <h1>
      FUN ISLAND
    </h1>
</div>
   
   
   
   <div class="fi-2">
        <p>Body slides – no tubes needed to ride this slide Stay safe, have fun & enjoy</p>
    </div>
    <div class="fi-3">
        <h2>👉Requirements👈</h2>

    </div>
    <div class="fi-5">
      - Minimum height for 3 lower level slides – 91 cms.<br><br>
      - Maximum weight – 91 kgs.<br><br>
      - Minimum height for 3 upper level slides – 102 cms.<br><br>
      -  weight – 136 kgs<br><br>
      - Only one rider to enter the flume at a me. Single rider only.<br><br>
      - Always wear appropriate swimwear, Nylon and Lycra materials only.<br><br>
      - Guest must always follow the instructions given by the Lifeguards.<br><br>
      - Queue jumping or saving a place in the queue is strictly prohibited.<br><br>
      - Wait till instructed by lifeguards.<br><br>
      - Do not block the exit of the slide..<br><br>
    </div>
    
    <div class="footer">

        <img src="assets/images/img13.png">
                  <div class="logo">
                  <img src="assets/images/logo.png">
                  </div>
                  <div class="menu">

                
                         <ul>
                             <li class="active"><a href="">Home</a></li>
                             <li><a href="">Attraction</a></li>
                             <li><a href="">Ticket</a></li>
                             <li><a href="">Park Facilities</a>
                       
                                  <ul class="drop-down  drop">
                                       <li class="dp dro"><a href="">Dining & Food court</a></li>
                                       <li class="dp dro"><a href="">Guest Facilities</a></li>
                                       <li class="dp dro"><a href="">Park Map</a></li>
                                       <li class="dp dro"><a href="">Rules & Regulation</a></li>
                                  </ul>   
                       
                              </li>
                              <li><a href="">Gallery</a></li>
                              <li><a href="">Contact us</a></li>


                         </ul>
              

                  </div>

                 <div class="address">

                 <h4>Address –</h4>
                <span id="adspan">Ahmedabad-Mehsana Highway, Mehsana, Gujarat, India</span>
                    
                    </div>

                     <div class="contact">

                    <span>+91 90990 80080</span><br>
                    <span> +91 90990 80090</span>
                    
                    </div>


                    <p>Shankus Waterpark & Resort 2022. All Right Reserved.</p>


                   <div class="social-icon">

                      <ul>
                         <li class="f-icon"><a href=""><i class="fa fa-facebook" style="font-size:25px;padding:5px;"></i></a></li>
                         <li><a href=""><a href=""><i class="fa fa-youtube" style="font-size:25px;padding:3px;"></i></a></li>
                         <li><a href=""><i class="fa fa-instagram" style="font-size:25px;padding:3px;"></i></a></li>
                      </ul>  
                    
                   </div>
                    
        
        </div>
</body>
</html>