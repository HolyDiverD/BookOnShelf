<?php

require '../../private/conn_BOS.php';

$title = $_POST['title'];
$writer = $_POST['writer'];
$genre = $_POST['genre'];
$isbn = $_POST['isbn'];
$lan = $_POST['lan'];
$pages = $_POST['pgs'];
$amount = $_POST['cps'];

$sth = $dbh->prepare("INSERT INTO books (
                   book_title,
                   book_writer, 
                   book_genre, 
                   book_isbn, 
                   book_lan, 
                   book_pages, 
                   book_amount
                   ) VALUES (
                   :title,
                   :writer,
                   :genre,         
                   :isbn,
                   :lan,          
                   :pages,
                   :amount          
                   )", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute([
    ':title' => $title,
    ':writer' => $writer,
    ':genre' => $genre,
    ':isbn' => $isbn,
    ':lan' => $lan,
    ':pages' => $pages,
    ':amount' => $amount
]);

header('Location: ../index.php?page=');