<?php
session_start();

require '../../../private/conn_BOS.php';

$email = $_POST['email'];
$password = $_POST['pswr'];
$role = 'Klant';
$firstname = $_POST['fname'];
$prep = $_POST['pre'];
$lastname = $_POST['lname'];
$residence = $_POST['resi'];
$street = $_POST['strt'];
$hnmbr = $_POST['hnmbr'];
$postcode = $_POST['postcode'];
$dob = $_POST['dob'];

$sql = 'INSERT INTO users (user_email,
                   user_psw, 
                   user_role, 
                   user_1st_name, 
                   user_preposition,
                   user_lastname, 
                   user_residence, 
                   user_street, 
                   user_housenmbr,
                   user_postcode,
                   user_dob) 
                   VALUES 
                 (:email, 
                  :password,
                  :Klant,
                  :firstname,
                  :preposition,
                  :lastname,
                  :residence,
                  :street,
                  :housenumber,
                  :postcode,
                  :dob
                  )';

$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute([
    ':email' => $email,
    ':password' => $password,
    ':Klant' => 'Klant',
    ':firstname' => $firstname,
    ':preposition' => $prep,
    ':lastname' => $lastname,
    ':residence' => $residence,
    ':street' => $street,
    ':housenumber' => $hnmbr,
    ':postcode' => $postcode,
    ':dob' => $dob
]);

$_SESSION['role'] = 'null';
header('Location: ../bookonshelf/index.php?page=');








