<?php

include '../components/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

<div class="form-container">
    <form action="" method="post" enctype="multipart/form-data" class="register">
        <h3>Register Now</h3>
        <div class="flex">
            <div class="col">
                <div class="input-field">
                    <p>Your Name <span>*</span></p>
                    <input type="text" name="name" placeholder="Enter your name" maxlength="50" required class="box">
                </div>
                <div class="input-field">
                    <p>Your Email <span>*</span></p>
                    <input type="email" name="email" placeholder="Enter your email" maxlength="50" required class="box">
                </div>
            </div>

            <div class="col">
                <div class="input-field">
                    <p>Your Password <span>*</span></p>
                    <input type="password" name="password" placeholder="Enter your password" maxlength="50" required class="box">
                </div>
                <div class="input-field">
                    <p>Confirm Password <span>*</span></p>
                    <input type="password" name="cpass" placeholder="Confirm your password" maxlength="50" required class="box">
                </div>
                <div class="input-field">
                    <p>Your Profile <span>*</span></p>
                    <input type="file" name="image" accept="image/*" required class="box">
                </div>
                <p>Already have an account? <a href="login.php">Login now</a></p>
            </div>
        </div>
        <input type="submit" value="Register Now" class="btn">
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="../js/script.js"></script>

<?php include '../components/alert.php'; ?>

</body>
</html>
