<?php
session_start();
session_unset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book On Shelf</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/Style.css">
</head>
<body class="Home">
<div class="navbar">
    <a href="Home.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a class="active" href="#"><i class="fa fa-fw fa-sign-in"></i> Login</a>
    <a href="Register.php"><i class="fa fa-fw fa-user-circle"></i> Register</a>
    <a href="Selection.php"><i class="fa fa-fw fa-search"></i> Selection</a>
    <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    <a href="#"><i class="fa fa-fw fa-info-circle"></i> Info</a>
</div>
<div class="Logincontainer">
    <form action="PHP/action.php" method="post" id="Login">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    </form>
    <button class="loginsubmit" type="submit" form="Login">Login</button>
</div>
</body>
