<?php
session_start();
require '../../private/conn_BOS.php';
echo $id = $_GET['ID'],
$title = $_POST['title'],
$writer = $_POST['writer'];
/*try {
    $sth = $dbh->prepare("UPDATE books
SET book_title = :title, book_writer = value2, book_genre =
WHERE ID = :id;");
    $sth->execute([
        ":id" => $id,
        ":title" => $title,
    ]);
} catch (PDOException $exception) {
    print "Error!: " . $exception->getMessage() . "<br/>";

}
header('Location: ../index.php?page=');*/