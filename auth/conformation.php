<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Enter conformation code:
        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
    Code:<br><input type="number" name="code"><br>
    
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php


if (isset($_POST['verification_code']) && isset($_SESSION['code'])) {
    $user_verification_code = $_POST['verification_code'];
    $stored_verification_code = $_SESSION['code'];

    if ($user_verification_code == $stored_verification_code) {
        // Verification successful, proceed with the registration
        include("../Includes/db.php");

        // ... (your existing registration code)
        
        // Clear the session code as it's no longer needed
        unset($_SESSION['code']);
        echo "<script>alert('SucessFully Inserted');</script>";
		echo "<script>window.open('BuyerLogin.php','_self')</script>";
    } else {
        echo "<script>
            alert('Verification code is incorrect. Please enter the correct code.');
            window.history.back(); // Redirect back to the registration form

        </script>";
    }
}
?>
