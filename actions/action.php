<?php
session_start();
if(($_POST['uname'] == '2') && ($_POST['psw'] == '2')) {
$_SESSION['role'] = 'Klant';
header('Location: ../index.php?page=klant');
}
elseif(($_POST['uname'] == '1') && ($_POST['psw'] == '1')){
$_SESSION['role'] = 'Admin';
    header('Location: ../index.php?page=admin');

}
else {
$_SESSION['role'] = 'null';
    header('Location: ../index.php?page=login');
}
