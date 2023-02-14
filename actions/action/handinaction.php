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

$stmt = $dbh->prepare("SELECT * FROM reserve 
                       WHERE FKbook_id = :bookid  
                       ORDER BY reserve.startdate 
                       ASC LIMIT 1");
$stmt->execute([
    ':bookid' => $BookId,
]);
$waiting_user = $stmt->fetch();

if ($waiting_user) { // If someone is waiting for the book
    $waiting_user_id = $waiting_user['FKuser_id'];

    // Assign the book to the waiting user
    $sth = $dbh->prepare("INSERT INTO borrowed (FKuser_id, FKbook_id, startdate) 
                           VALUES (:userid, :bookid, :startdate)");
    $sth->execute([
        ':userid' => $waiting_user_id,
        ':bookid' => $BookId,
        ':startdate'=> $startdate,
    ]);

    $sth = $dbh->prepare(" 
     UPDATE books
     SET book_amount = (books.book_amount - 1)
     WHERE ID = :book;
    ");
    $sth->execute([
        ":book" => $BookId,
    ]);

    // Delete the reservation for the waiting user
    $sth = $dbh->prepare("DELETE FROM reserve 
                            WHERE FKuser_id = :userid 
                            AND FKbook_id = :bookid");
    $sth->execute([
        ':userid' => $waiting_user_id,
        ':bookid' => $BookId,
    ]);

}

header('Location: ../../index.php?page=borrowed');
