<?php

    include("../Includes/db.php");
    session_start();
    $sessphonenumber = $_SESSION['phonenumber'];
    $sql="select * from buyerregistration where buyer_phone = $sessphonenumber";
    $run_query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_query))
    {
        $name = $row['buyer_name'];
        $phone = $row['buyer_phone'];
        $address = $row['buyer_addr'];
        $mail = $row['buyer_mail'];
        $user = $row['buyer_username'];
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Password</title>

    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer
        }

        .box {
            color: rgb(6, 36, 7);
            width: 350px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            border-color: green;
        }

        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/forgotpassword.jpg);
            border: chartreuse;
        }

        form {
            margin: 10px;
            padding: 10px;
            background-color: rgb(247, 248, 247);
        }

        input {
            padding: 7px;
            margin: 10px;
            border-color: rgb(78, 180, 121);
            display: inline-block;
            border-radius: 16px;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
        }

        input[type="submit"]:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;
        }

        textarea {
            border-width: 3px;
            border-radius: 16px;
            border-color: rgb(78, 180, 121);


        }




        .in-icons {
            text-align: center;
        }

        .in-icons i {
            position: absolute;
            left: 600px;
            top: 175px;
        }

        .just {


            float: left;
            margin-left: 1%;
            margin: 20px;
            position: absolute;
            left: 0;
            top: 0px;
            text-shadow: 1px 1px 1px black;

        }

        .again {
            cursor: pointer;
            font-size: 24px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            /* background-color: green; */
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
            margin-left: 100px;


        }

        .say {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            /* width: 96%; */
            padding: 10px;
            padding-left: 10px;
            padding-right: 10px;



        }

        .say:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 94%;
            font-size: 18px;

        }

        /* Responsive styles for small screens */
        @media screen and (max-width: 768px) {
            .box {
                width: 90%; /* Adjust the width for small screens */
                margin-top: 20px;
            }

            textarea {
                width: 100%;
            }

            /* Center the home icon */
            .just {
                position: absolute;
                left: 10px;
                top: 10px;
            }

            /* Make form elements full width on small screens */
            input[type="phonenumber"],
            input[type="text"],
            select {
                width: 100%;
                box-sizing: border-box;
                padding: 7px;
            }
        }
       
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>

    <body>
    

    <div class="just">
        <a  href="bhome.php"> <i  class="fa fa-home fa-4x"></i></a>
    </div>


    <div class="box">
       <!-- <div id = "innerbox"> -->
        <form action="" method = "post">
             <table align = "center" >

                <tr colspan = 2>
                    <h1> EDIT PROFILE</h1>
                </tr>

                <tr align = "center">
                    <div class="in-icons">
                    <td>
                        <label><b>Name :</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="18" value="" disabled><?php echo $name;?></textarea><br>
                    </td>
                </tr>

                
                

                <tr align = "center">
                    <div class="in-icons">
                    <td>
                        <label><b>Email ID :</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="18" value="" disabled><?php echo $mail;?></textarea><br>
                    </td>
                </tr>

                <tr align = "center">
                    <td>
                    <label><b>Username :</b></label>
                    </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $user; ?>" />  <br> 
                    </td>
                    <span style=" display:block;  margin-bottom: .75em; "></span>
                </tr>

                <tr align = "center">
                    <td>
                        <label><b>Phone :</b></label>
                    </td>
                    <td>
                        <input type="phonenumber" name="phonenumber" value="<?php echo $phone;?>"/> <br>
                    </td>
                </tr>

                <tr align = "center">
                    <td>
                        <label><b>Address :</b></label>
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $address;?> "/> <br>
                    </td>
                </tr>

                

                <tr colspan =2 align = "center">
                    <td colspan =2>
                        <input type="submit" name="confirm" value="Confirm">
                    </td>
                </tr>
            </table>
        </form>
        <div class="again">
            <td colspan =2><a href="BuyerChangePassword.php"><button class="say">Change Password</button></a></td>
        </div>
 
    </div>
  


</body>
</html>

<?php

    include("../Includes/db.php");

    if (isset($_POST['confirm']))
    {
        $phone = mysqli_real_escape_string( $con,$_POST['phonenumber']);
        $address = mysqli_real_escape_string( $con,$_POST['address']); 
        $user = mysqli_real_escape_string( $con,$_POST['username']);   
        
        $query = "update buyerregistration 
                  set buyer_phone = '$phone', buyer_username = '$user', 
                  buyer_addr = '$address' 
                  where buyer_id in 
                  (select buyer_id from buyerregistration 
                  where buyer_phone='$sessphonenumber')"; 
        echo $query;
       

        $run = mysqli_query($con, $query);

        $_SESSION['phonenumber'] = $phone;
       echo "<script>window.open('BuyerProfile.php','_self')</script>";
    }
?>
