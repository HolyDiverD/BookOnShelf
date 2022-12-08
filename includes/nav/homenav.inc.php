<?php
$menuitems = array(
        'Home' => array(
                'home',
                'home'
        ),
        'Login' => array(
                'login',
                'sign-in'
        )
);


echo '<div class="navbar">';

foreach($menuitems as $label => $link) {
    echo '<a href="index.php?page='. $link[0] .'"><i class="fa fa-fw fa-'.$link[1] .'"></i>'. $label .'</a>';
}

echo '</div>';
?>

<div class="navbar">
    <a href="index.php?page=home"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="index.php?page=login"><i class="fa fa-fw fa-sign-in"></i> Login</a>
    <a href="Register.php"><i class="fa fa-fw fa-user-circle"></i> Register</a>
    <a href="Selection.php"><i class="fa fa-fw fa-search"></i> Selection</a>
    <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    <a href="#"><i class="fa fa-fw fa-info-circle"></i> Info</a>
</div>


