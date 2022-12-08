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
<?php
include 'includes/nav/homenav.inc.php';
?>
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
