<?php
session_start();
require '../../../private/conn_BOS.php';

$BookId = $_GET['bookID'];
$UserId = $_GET['user'];
$startdate = $_GET['startdate'];

try {
    $sth = $dbh->prepare("
        DELETE FROM borrowed
               WHERE FKbook_id = :book AND FKuser_id = :user AND startdate = :start
    ");
    $sth->execute([
        ":book" => $BookId,
        ":user" => $UserId,
        ":start" => $startdate

    ]);
} catch (PDOException $exception) {
    print "Error!: " . $exception->getMessage() . "<br/>";

}

try {
    $sth = $dbh->prepare(" 
     UPDATE books
     SET book_amount = (books.book_amount + 1)
     WHERE ID = :book;
    ");
    $sth->execute([
        ":book" => $BookId,
    ]);


}catch (PDOException $exception) {
    print "Error!:" . $exception->getMessage() . "<br/>";

}

header('Location: ../../index.php?page=');
