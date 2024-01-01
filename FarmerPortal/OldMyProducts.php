<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer - OldMyProducts</title>
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>

     <style>
* {
               margin: 0;
               box-sizing: border-box;
          }


          .header {
               position: sticky;
               z-index: 100;
               top: 0rem;
               height: 69px;
               width: 100%;
               background-color: #00b300;
          }

          .select_element {
               width: 20px;
               background-color: transparent;
               border: none;
               text: none;
          }


          #logo {
               height: 66px;
               width: 100px;
               text-align: left;
               float: left;
          }

          .search_input {
               float: left;
               margin-left: 50px;
               margin-top: 20px;

          }

          .proicon {
               float: right;
               margin-right: 10px;
               margin-top: 20px;
          }

          .dropdown {
               float: right;
               margin-right: 35px;
               margin-top: 20px;
          }

          .options {
               color: yellow;
               margin-left: 20px;
               width: 25px;
               margin-right: 50px;
               display: inline;
          }

          .icon2 {
               float: right;
               margin-right: 10px;
               margin-top: 20px;

          }

          .loginz {
               float: right;
               margin-right: 20px;
               margin-top: 20px;
          }

          .headerdown {
               margin-left: 15%;
               height: 50px;
               width: 80%;
          }

          .makeitgreen {
               color: #00b300;
          }

          .sel1 {
               color: green;
               float: left;
               margin-top: 3px;
          }

          .sel2 {
               border-color: green;
               color: green;
               float: left;
               margin-left: 600px;
               margin-top: 3px;
          }

          .sel3 {
               font-size: 20px;
               margin-top: 3px;
               float: right;
               margin-right: 5px;
          }



          #input1 {
               width: 220px;
               border: none;
          }


          #input1:active {
               background-color: tomato;
          }


          .wrapper {
               display: grid;
               grid-template-columns: 20% 20% 20% 20%;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               margin-left: 30px;
          }

          .inputwrapper {
               float: left;
               border-style: double;
               text-align: center;
               margin-left: 80px;
               width: 280px;
               margin-bottom: 20px;
               clear: auto;
          }


          .inputwrapper:last-child {
               margin-right: 30px;
          }

          .addtocart {
               background-color: #FFD700;
          }

          .numberinput {
               width: 35px;
          }

          .content_item {
               text-align: center;
               justify-content: center;
               display: inline;
          }

          .etc {
               margin-left: -40px;
               min-width: 90px;
               font-size: 20px;
          }

          .crop_items {
               color: green;
          }

          .footer {
               height: 70px;
               width: 100%;
               clear: both;
          }

          .payment {
               float: left;
               margin-left: 520px;
               font-size: 20px;
               margin-top: 25px;
          }

          .cash {
               float: left;
               margin-top: 0px;
               margin-left: 20px;
               margin-right: 20px;
          }

          .paytm {
               float: left;
          }

          h3 {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #000;
               line-height: 0.1em;
               margin: 10px 0 20px;
          }

          h3 span {
               background: #fff;
               padding: 0 10px;
          }

          .morefooter {
               height: 100px;
               width: 100%;
               background-color: white;

          }

          .call {
               float: left;
               font-size: 20px;
               margin-left: 150px;
               margin-top: 25px;
          }

          .gmail {
               margin-top: 10px;
               float: right;
               margin-right: 150px;

          }

          .instagram {
               margin-top: 10px;
               float: left;
               margin-left: 420px;
          }

          .instaid {
               height: 10px;
               width: 100%;

          }

          .text {
               float: left;
               margin-left: 735px;
               margin-top: -50px;
          }

          .gmailid {
               float: right;
               margin-right: 80px;
               margin-top: -60px;
          }

          .copy {
               float: left;
               margin-top: -65px;
          }

          body {
               margin: 0;
               padding: 0;
               font-family: sans-serif;
               background-size: cover;
               background-position: center;
               box-sizing: border-box;
          }

          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }


          h1 {
               font-family: 'Times New Roman', Times, serif;
               color: white;

          }

          .lost {
               /* <font-fam></font-fam>; */
               color: black;
               text-align: center;
               height: 8%;
               margin-top: 150px;
               border-radius: 30px;
               font-size: 30px;
               /* margin-top: 5em; */
               background-color: olive;
               margin-top: 120px;
               margin: auto;
          }

          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }

          h2 {
               color: white;
               margin-top: 3em;
               text-align: center;

          }

          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-top: 2%;
               text-align: center;
               border-radius: 25px;
          }

          /* .box{
            
            color: rgb(6, 36, 7);
            width: 1050px;
             line-height: 40px; 
             float:center;
            margin: auto;
            text-align: center;
              margin-top: 120px;  
             /* padding: 5px;  */
          /* border-style: outset;  */
          /* border-width: 5px;
            border-radius: 16px; */
          /* border-color:black;  */
          /* font-size:20px; */
          /* height: 900px;
            border-radius: 30px;
            
        }
        .please{
             text-align:center;
             float:right;
             margin-right:500px;
               margin: 0;
               padding: 0;
               font-family: sans-serif;
               background-size: cover;
               background-position: center;
               box-sizing: border-box;
          } */

          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }


          h1 {
               font-family: 'Times New Roman', Times, serif;
               color: white;

          }

          .lost {
               font-family: Verdana, Geneva, Tahoma, sans-serif;
               color: black;
               text-align: center;
               margin-top: 220px;
               margin: auto;
          }


          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }

          h2 {
               color: white;
               margin-top: 3em;
               text-align: center;

          }

          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-right: 12%;
               background-color: #00b300;
               text-align: center;
               /* border-radius: 25px; */
               width: 9%;
               height: 8%;
               margin-top: -5%;
               padding: 5px;

          }

          .items {
               width: 100%;
               margin: auto;
               height: auto;
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
               margin: 20px;
               font-size: 30px;
               font-weight: bolder;
               padding-top: 10px;
          }

          .products {
               margin-left: 9%;

          }

          .productbox {
               float: left;
               margin: 15px;
               /* margin-left: 30px; */
               padding: 15px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 10px;
          }

          .productbox img {
               height: 200px;
               width: 250px;
               border-style: double;
               border: 2px solid;
               border-color: brown;
               border-width: 2px;
               border-radius: 10px;
          }

          .productbox p {
               text-align: center;
               text-decoration: underline;
          }

          /* .productbox img:hover {
               height: 220px;
               width: 220px;
               border-style: double;
               border: 2px solid;
               border-color: brown;
               border-width: 3px;
               border-radius: 15px;
          }

          .productbox p:hover {
               text-align: center;
               text-decoration: underline;
               /* font-weight: bold; */
          
          .add{
               background-color: #FFD700;
               margin-right:-900px;
               margin-left: 300px;
          }
          .imag{
               width:900px;
          }
          .pluz{
               margin-left: 200px;;
               margin-top: -72px;
               /* background-color: red; */
               font-size: 40px;
          }

         .x{
              margin-top: -12px;
         }
         



 
     </style>

</head>

<body>
<nav class="navbar navbar-expand-xl ">
               <!-- <a href="#" class="navbar-brand">Academind</a> -->
               <div class=" flex-row-reverse left ">

                    <div class="p-2">
                         <!-- <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style=" color:green ;font-size:20px;margin-top:-20px;margin-bottom:20px;">&#61562;</i></a> -->
                         <!-- <span id="icon" style="color:green"> 5 </span>
                </div>  -->
                    </div>
                    <!-- <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;'></i></div> -->
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
                              echo "<a href=Transactions.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Orders</a>";
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
                         <!-- <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green;margin-top:-20px;">&#61562;</i></a>
                    <span id="icon" style="color:green"> 5 </span>
                </div> -->
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
                                   echo "<a href='Transactions.php' class='dropdown-item' style='padding-right:-20px;'>Orders</a>";
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









     

     
     <div class="items">

          <div class=content_item><label style="font-size :40px;margin-left:650px;margin-right:100px; text-shadow: 1px 1px 1px gray;">
                    <b><div class="isc">All Product's  </div></b></label>
                    <a href="InsertProduct.php"><button class="add" style="margin-left:50px;border-style:solid;border-color:black;font-size:30px;border-radius:30%;width:250px;height:100px;"><b><div class="x"1> Add More Products</div></b><div class="pluz"> <i class="fas fa-plus "></div></i> </button></a>
          </div>

          <div class="products">
               <?php
               include("../Includes/db.php");
               if (isset($_SESSION['phonenumber'])) {
                    $sess_phone_number = $_SESSION['phonenumber'];
                    getFarmerProducts();
               } else {
                    echo "<br><br><h1 align = center>Please Login!</h1><br><br><hr>";
               }
               ?>
          </div>

     </div>


     <section id="footer" class="myfooter">
                <div class="container">
                     <div class="row text-center text-xs-center text-sm-left text-md-left">
                          <div class="col aligncenter">
                               <br>
                               <h5>Payment Option</h5>
                               <img src="../Images/Website/esewa.jpg" alt="E-sewa" style="height:40px">
                               <img src="../Images/Website/cod.jpeg" alt="Cash On Delivary" style="height:40px">
                          </div>
                          </div>
                          
                     <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                               <ul class="list-unstyled list-inline social text-center">
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
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










    