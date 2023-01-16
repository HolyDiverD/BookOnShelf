<?php

session_start();

require '../../private/conn_BOS.php';


$sql = 'SELECT user_email, user_psw, user_role FROM users WHERE user_email = :username';
$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute(array(':username' => $_POST['uname']));

if ($rsUser = $sth->fetch(PDO::FETCH_ASSOC)){
    if (($_POST['psw'] == $rsUser['user_psw'])) {
        $_SESSION['role'] = $rsUser['user_role'];
        header('Location: ../index.php?page=');
    }
    else {
        $_SESSION['role'] = 'null';
        header('Location: ../index.php?page=login');
    }
}
else {
    $_SESSION['role'] = 'null';
    header('Location: ../index.php?page=login');
}
