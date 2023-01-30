<?php
session_start();
require '../../../private/conn_BOS.php';

$id = $_GET['id'];

try {
    $sth = $dbh->prepare("
        DELETE FROM book_genre WHERE book_id = :id;
        DELETE FROM books WHERE ID = :id;
    ");
    $sth->execute([
        ":id" => $id,
    ]);
} catch (PDOException $exception) {
    print "Error!: " . $exception->getMessage() . "<br/>";

}
header('Location: ../../index.php?page=');

