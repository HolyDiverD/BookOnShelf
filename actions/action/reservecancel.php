<?php
session_start();
require '../../../private/conn_BOS.php';

$reserveId = $_GET['reserveID'];
$UserId = $_GET['user'];

try {
    $sth = $dbh->prepare("
        DELETE FROM reserve
               WHERE reserve_id = :reserve AND FKuser_id = :user
    ");
    $sth->execute([
        ":reserve" => $reserveId,
        ":user" => $UserId
    ]);
} catch (PDOException $exception) {
    print "Error!: " . $exception->getMessage() . "<br/>";
}
header('Location: ../../index.php?page=reservations');