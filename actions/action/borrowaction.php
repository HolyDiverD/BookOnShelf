<?php
session_start();
require '../../../private/conn_BOS.php';

$BookId = $_GET['id'];
$amount = $_GET['amount'];
$UserId = $_SESSION['Userid'];

if($amount > 0)  {
    try {
        $sth = $dbh->prepare(" 
     
     INSERT INTO borrowed (FKbook_id, FKuser_id) VALUES (:book, :user)
     
    ");
        $sth->execute([
            ":book" => $BookId,
            ":user" => $UserId
        ]);
    } catch (PDOException $exception) {
        print "Error!:" . $exception->getMessage() . "<br/>";

    }
        try {
            $sth = $dbh->prepare(" 
     UPDATE books
     SET book_amount = (:amount - 1)
     WHERE ID = :book;
    ");
            $sth->execute([
                ":book" => $BookId,
                ":amount" => $amount
            ]);


        }catch (PDOException $exception) {
            print "Error!:" . $exception->getMessage() . "<br/>";

        }
    header('Location: ../../index.php?page=');
}