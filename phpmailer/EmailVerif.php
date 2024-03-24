<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php 
    $code=mt_rand(100000,999999); //generate random 6 digit code
    $_SESSION["code"]=$code;
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require 'C:\xampp\htdocs\krishi\phpmailer\src\PHPMailer.php';
    require 'C:\xampp\htdocs\krishi\phpmailer\src\Exception.php';
    require 'C:\xampp\htdocs\krishi\phpmailer\src\SMTP.php';
    
    //echo $code;
    if(isset($_POST["submit"])){
        header('Location: emailVerification.php');
        $emailSendTo=$_POST["username"];
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $mail->Username="Krishibzar@gmail.com";
        $mail->Password=" "; //your password

        $mail->setFrom("Krishibzar@gmail.com","Krishibzar");
        $mail->addAddress($_POST["email"]);
        $mail->Subject = "Account Activation";
        $mail->Body = "Hello,{$emailSendTo}  Your account registration is successfully done!\n
                        Your verification code is {$code}\n Thank you.";
        $mail->send();

    }
    ?>

    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
    <h2>Welcome to Krishibzar</h2><br>
    Name:<br><input type="text" name="username"><br>
    Address:<br> <input type="text" name="address"><br>
    Email: <br><input type="email" name="email"><br>
    Number: <br><input type="number" name="number"><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    

</body>
</html>
