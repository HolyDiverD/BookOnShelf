<?php

session_start();
require '../../../private/conn_BOS.php';

$BookId = $_GET['bookID'];
$Amount = $_GET['amount'];
$UserId = $_SESSION['Userid'];

if ($Amount = 0){
    try {
        $sth = $dbh->prepare(" 
     
     INSERT INTO reserve (FKbook_id, FKuser_id) VALUES (:book, :user)
     
    ");
        $sth->execute([
            ":book" => $BookId,
            ":user" => $UserId
        ]);
    } catch (PDOException $exception) {
        print "Error!:" . $exception->getMessage() . "<br/>";

    }
}
//header('Location: ../../index.php?page=');

