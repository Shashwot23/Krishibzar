
<?php
    include("../Includes/db.php");
    session_start();
    $sessphonenumber = $_SESSION['phonenumber'];
    $sql="select * from buyerregistration where buyer_phone = '$sessphonenumber'";
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
    <title>Buyer Profile</title>
    

    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer;
            /* font-size:20px; */
        }

        textarea {
            font-size: 20px;
            border-radius: 15px;
            text-align: center;
            border-color: green;
            background-color: transparent;
            margin-top: 10px;
        }

        .box {
            color: rgb(6, 36, 7);
            width: 400px;
            line-height: 20px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
             border-width: 5px;
            border-radius: 16px; 
            border-color: green;
            /* font-size:20px; */
        }

        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
             background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/forgotpassword.jpg); */
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
            /* border-radius: 16px; */
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 22px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 64%;
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

        .one {
            height: 100px;
            border-radius: 13px;

        }

        .two {
            width: 100px;
            font-size: 34px;
            background: transparent;
            border: 3px;
            border-color: green;
            border-style: solid;
            border-width: 2px;


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
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div class="just">
        <a  href="bhome.php"> <i  class="fa fa-home fa-4x"></i></a>
    </div>

    <div class="box">
    <div class="container-fluid" style="max-width:520px">
        <form action="BuyerEditProfile.php" method="post">

            <table align = "center">
                <tr colspan = 2>
                    <h1> Your  Profile</h1>
                </tr>

                <tr align = "center">
                    <td><label><b>Name :</b></label></td>
                    <td><textarea rows="2" column="10" disabled> <?php echo $name?> </textarea><br></td>
                </tr>

                <tr align = "center">
                    <td><label><b>User Name :</b></label></td>
                    <td><textarea rows="2" column="10" disabled> <?php echo $user?> </textarea><br></td>
                </tr>

                <tr align = "center">
                    <td><label><b>Phone Number:</b></label></td>
                    <td><textarea rows="1" column="10" disabled> <?php echo $phone?> </textarea><br></td>
                </tr>
                <tr align = "center">
                    <td><label><b>Address :</b></label></td>
                    <td><textarea rows="3" column="56" disabled> <?php echo $address?> </textarea><br></td>
                </tr>

               

                <tr align = "center">
                    <td><label><b>Mail ID :</b></label></td>
                    <td><textarea rows="2" column="10" disabled> <?php echo $mail?> </textarea><br></td>
                </tr>
                
                <tr colspan =2 align = "center">
                    <td colspan =2><input type = "submit" name="editProf" value= "Edit Profile"></td>
                </tr>
            </table>
            
        </form>
 
    </div>

</body>
</html>
