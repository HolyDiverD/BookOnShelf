<?php
session_start();
require '../../private/conn_BOS.php';
$id = $_GET['ID'];
$title = $_POST['title'];
$writer = $_POST['writer'];
$genre = $_POST['genre'];
$isbn = $_POST['isbn'];
$lan = $_POST['lan'];
$pages = $_POST['pages'];
$amount = $_POST['amount'];
try {
    if ($amount > 0) {
        $sth = $dbh->prepare("UPDATE books
SET book_title = :title,
    book_writer = :writer,
    book_genre = :genre,
    book_isbn = :isbn,
    book_lan = :lan,
    book_pages = :pages,
    book_amount = :amount
WHERE ID = :id or book_isbn = :isbn");
        $sth->execute([
            ":id" => $id,
            ":title" => $title,
            ":writer" => $writer,
            ":genre" => $genre,
            ":isbn" => $isbn,
            ":lan" => $lan,
            ":pages" => $pages,
            ":amount" => $amount
        ]);
    } else {
        $_SESSION['alert'] = 1;
    }
} catch (PDOException $exception) {
    print "Error!: " . $exception->getMessage() . "<br/>";

}
header('Location: ../index.php?page=');