<?php
session_start();
require '../../../private/conn_BOS.php';

$BookId = $_GET['id'];
$amount = $_GET['amount'];
$UserId = $_SESSION['Userid'];

$query = $dbh->prepare('SELECT COUNT(FKbook_id) as row_count FROM borrowed WHERE FKuser_id = ?');
$query->bindParam(1, $UserId);
$query->execute();

$result = $query->fetch(PDO::FETCH_OBJ);

$row_count = $result->row_count;

if ($amount > 0 && $row_count < 3){
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
else{
    header('Location: ../../index.php?page=');
}

