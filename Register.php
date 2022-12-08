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
<body>
<div class="navbar">
    <a href="Home.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="Login.php"><i class="fa fa-fw fa-sign-in"></i> Login</a>
    <a class="active" href="#"><i class="fa fa-fw fa-user-circle"></i> Register</a>
    <a href="Selection.php"><i class="fa fa-fw fa-search"></i> Selection</a>
    <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    <a href="#"><i class="fa fa-fw fa-info-circle"></i> Info</a>
</div>
<div class="Logincontainer">
    <form>
        <label for="email"><b>E-mail</b></label>
        <input type="email" placeholder="Enter E-mail" name="email" required>

        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="pswr"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="pswr" required>
    </form>

    <button class="loginsubmit" type="submit">Login</button>

</div>
</body>
</html>