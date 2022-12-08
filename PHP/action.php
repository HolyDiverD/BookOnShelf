<?php
session_start();

if(($_POST['uname'] == '2') && ($_POST['psw'] == '2')) {
    $_SESSION['role'] = 'Klant';
    header('Location: ../Klant.php');
}
elseif(($_POST['uname'] == '1') && ($_POST['psw'] == '1')){
    $_SESSION['role'] = 'Admin';
    header('Location: ../Admin.php');
}
else{
    header('Location: ../Login.php');
}
