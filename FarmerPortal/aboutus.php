<?php
     include("../Functions/functions.php");
     ?>

 <!DOCTYPE html>

 <html lang="en">

 <head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>About Us</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

      <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
      <script src="../portal_files/jquery.min.js.download"></script>
      <script src="../portal_files/popper.min.js.download"></script>
      <script src="../portal_files/bootstrap.min.js.download"></script>
      <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
      
	

      <style>
           
           .dropdown {
                float: right;
                margin-right: 40px;
                margin-top: 40px;

           }

          
          

           .loginz {
                float: right;
                margin-right: 20px;
                margin-top: 20px;
           }

           
           body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background-size: cover;
                background-position: center;
                box-sizing: border-box;
           }

           

          
           

           

           .slideshow {
                margin-top: 10px;
                margin-left: 100px;
                margin-bottom: 20px;
                float: left;
                border-style: solid;
           }

           #navbar {

                padding: 20px;
                color: green;
                text-decoration: none;
                margin: 20px;
                font-size: 25px;
                padding-top: 10px;
           }

           #navbar:hover {
                padding: 20px;
                color: green;
                text-decoration: underline;
                margin: 15px;
                font-size: 25px;
                font-weight: bolder;
                padding-top: 10px;
           }

           #navbar i {
                padding-right: 1%;
           }

           
          

           

           

           .image {
                max-width: 200px;
           }

           .aligncenter {
                text-align: center;
           }

           .myfooter {
                background-color: #292b2c;
                color: white;
                margin-top: 15px;
           }

           a {
                color: white;
           }

           

           hr {
                border: 0;
                height: 0.5px;
                clear: both;
                display: block;
                width: 99%;
                background-color: black;
                margin-left: 0.5em;
           }

          
          

           nav {
                background-color: #292b2c;
           }

           .navbar-custom {
                background-color: #292b2c;
           }

           

           .right {
                display: flex;
           }

           .left {
                display: none;
           }

           .cart {
                 
                margin-right: -9px;
           }

         

           

           .moblists {
                display: none;
           }

          


           
           /* For large devices (e.g. desktops) */
           @media (min-width: 760px) {
                .resizing {
                     height: 500px;
                }
           }

           @media only screen and (min-device-width:320px) and (max-device-width:480px) {
                .image {
                     max-width: 48%;
                }

                .firstimage {
                     height: auto;
                     width: 90%;
                }

                .card {
                     width: 80%;
                     margin-left: 10%;
                     margin-right: 10%;

                }

                .col {
                     margin-top: 20px;
                }

                .right {
                     display: none;
                     background-color: #ff5500;
                }


                
                
               

           }

           /* Basic styling for the body */
body {
   
   background-color: #f8f8f8;
}

/* Styling for the About Us section */
.about {
   display: flex;
   justify-content: space-around;
   align-items: center;
   padding: 40px;
}

/* Styling for the About Us content */
.about-content {
   flex: 1;
   padding-right: 40px;
   
}

.about-content h2 {
   font-size: 30px;
   color: #333;
   margin-bottom: 10px;
}

.about-content p {
   font-size: 20px;
   color: #333;
   line-height: 1.6;
   margin-bottom: 20px;
}

/* Styling for the About Us image */
.about-image {
   flex: 1;
}

.about-image img {
   max-width: 70%;
   height: auto;
   border-radius: 10px;
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}



      </style>
      </head>
 <body>

 <body>

<nav class="navbar navbar-expand-xl ">
     
     <div class=" flex-row-reverse left ">

          <div class="p-2">
               
          </div>
          <a class="float-left" href="#">
               <img src="../Images/HomePage/krishi.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:80px;">
          </a>
     </div>
     <button class="navbar-toggler" data-toggle="collapse" style="margin-left:-20px;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;font-size:20px; "></i></span>
     </button>
     <a class="float-left" href="farmerHomepage.php">
          <img src="../Images/HomePage/krishi.png" class="float-left mr-2 moblogo" alt="Logo" style="height:80px;">
     </a>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">



          <div class="proicon">

               <?php
                   if (!isset($_SESSION['phonenumber'])) {
                        echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '></div></a>";
                   }
                   ?>
          </div>

          <div class="list-group moblists">

               <?php
                   if (isset($_SESSION['phonenumber'])) {

                        echo "<a href='FarmerProfile.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                        echo "<a href='orders.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Orders</a>";
                    
                        echo "<a href='logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                   } else {
                        echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '>Login</div></a>";
                   }
                   ?>
               <div class='loginz' style="text-align:center;">
                    <?php getFarmerUsername(); ?>
               </div>
          </div>
     </div>




     <div class=" flex-row-reverse right ">
          <div class="p-2 cart">
              
               <div class='loginz'>
                    <?php getFarmerUsername(); ?>
               </div>
          </div>
          <div class="dropdown p-2 settings ">
               <button class="btn  dropdown-toggle text-success" style="margin-top:-20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php
                        if (isset($_SESSION['phonenumber'])) {
                             echo "<a href='FarmerProfile.php' class='dropdown-item' style='padding-right:-20px;'>Profile</a>";
                             echo "<a href='orders.php' class='dropdown-item' style='padding-right:-20px;'>Orders</a>";
                             
                             echo "<a href='logout.php' class='dropdown-item' style='padding-right:-20px;'>Logout</a>";
                        } else {
                             echo "<a href='../auth/FarmerLogin.php'> <div class='dropdown-item' style='padding-right:-20px;'>Login</div></a>";
                        }
                        ?>
               </div>
          </div>
     </div>
</nav>
<br>
<div class="row" style="text-align:center;">
     <div class="col-md-3 col-sm-12">
          <a href="farmerHomepage.php" id="navbar"><i class="fa fa-home" aria-hidden="true"></i><label>Home</label></a>
     </div>
     <div class="col-md-3 col-sm-12">
          <a href="MyProducts.php" id="navbar"><i class="fa fa-leaf" aria-hidden="true"></i><label>My Products</label></a>
     </div>
     <div class="col-md-3 col-sm-12">
          <a href="Transactions.php" id="navbar"><i class="fa fa-exchange" aria-hidden="true"></i><label>My Transactions</label></a>
     </div>
     <div class="col-md-3 col-sm-12">
                     <a href="chatsystem.php" id="navbar"><i class="fa fa-comments-o" aria-hidden="true"></i><label>Chat Box</label></a>
                </div>
</div>
<hr>


<section class="about">
        <div class="about-content">
            <h2>WHO WE ARE</h2>
            <p> We are Krishibzar. We are here to help farmers/sellers to sell their product online by providing a direct link with the customers in this platform,eliminating intermediaries and reducing the cost of vegetables.</p>
            <p>We aim to change the way of the traditional way of shopping. You don't need to waste your time going to a local market, bargain with shopkeepers, and bring your bag. </p>
			<h3> With Motive: FOR CHANGE<h3>
        </div>
        <div class="about-image">
            <img src="../Images/Website/logo (2).png" alt="About Us Image">
        </div>
    </section>


<section id="footer" class="myfooter">
                <div class="container">
                     <div class="row text-center text-xs-center text-sm-left text-md-left">
                          <div class="col aligncenter">
                               <br>
                               <h5>Payment Option</h5>
                               <img src="../Images/Website/esewa.jpg" alt="E-sewa" style="height:40px">
                               <img src="../Images/Website/khalti.jpg" alt="Khalti" style="height:40px">
                               <img src="../Images/Website/cod.jpeg" alt="COD" style="height:40px">
                          </div>
                          </div>
                          
                     <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                               <ul class="list-unstyled list-inline social text-center">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#;"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                               </ul>
                          </div>

                     </div>
                     <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                              
                               <p class="h6">Copyright &copy; 2023<a class="text-green ml-2" href="https://www.krishibzar.com" target="_blank">krishibzar</a></p>
                               <p class="h6">Developed by:<a class="text-green ml-2" href="https://www.google.com" target="_blank">Team Nirvana</a></p>
                          </div>
                          </hr>
                     </div>
                </div>
                
           </section>

      </body>

 </html>