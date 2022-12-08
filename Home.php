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
    <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="Login.php"><i class="fa fa-fw fa-sign-in"></i> Login</a>
    <a href="Register.php"><i class="fa fa-fw fa-user-circle"></i> Register</a>
    <a href="Selection.php"><i class="fa fa-fw fa-search"></i> Selection</a>
    <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    <a href="#"><i class="fa fa-fw fa-info-circle"></i> Info</a>
</div>
<div class="Logobox">
    <img src="Image/BOS2.png" alt="Book On Shelf">
    <h1>
        Boeken lenen in de IT club
    </h1>
    <p class="Intro">
        Ben jij een echte IT nerd, lees jij graag? Zo ja, dan is Book On Shelf het leensysteem voor jou. Met
        verschillende titels in verschillende
        genres zoals fantasy, Sci-fi, etc. kan jij bij de club genieten van veel leesplezier. Mocht het boek dat je
        zoekt niet beschikbaar zijn, dan kunnen leden van de club deze ook reserveren!
    </p>
</div>

</body>
</html>

<?php

?>