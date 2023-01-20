<?php
session_start();
require '../../private/conn_BOS.php';


try {
    $sth = $dbh->prepare("DELETE FROM books WHERE ID = :id", [
        ":id" =>
    ]);
    $sth->execute();
} catch (PDOException $exception) {
    print "Error!: " . $exception->getMessage() . "<br/>";

}

header('Location: ../index.php?page=');
