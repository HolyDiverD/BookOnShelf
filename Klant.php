<?php
session_start();
if ($_SESSION['role'] != 'Klant') {
    header('Location: Login.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book On Shelf</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/Style.css">
</head>
<body>
<div class="navbar">
    <form action="PHP/action.php" method="post" id="nav">
    <a href="Home.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a class="active" href="#"><i class="fa fa-fw fa-list"></i>Overzicht</a>
    <a href="Geleend.php"><i class="fa fa-fw fa-shopping-basket"></i>Borrowed Books</a>
    <a href="Gereserveerd.php"><i class="fa fa-fw fa-list"></i>Reservations</a>
    </form>
</div>
<div class="Table,con">
    <form action="PHP/action.php" method="post" id="search">
        <input placeholder="&#xF002; Search" class="CustomerSearch" type="search" name="search">
        <button class="LendB" type="button"> <i class="fa fa-fw fa-shopping-basket"></i>Borrow</button>
        <button class="ReserveB" type="button"> <i class="fa fa-fw fa-list"></i>Reserve</button>
    </form>
    <table>
        <tr class="TH">
            <th>Title</th>
            <th>Writer</th>
            <th>Genre</th>
            <th>ISBN</th>
            <th>Language</th>
            <th>Pages</th>
            <th>Amount</th>
        </tr>
        <?php
        for ($i = 0; $i <= 11; $i++){
        ?>
        <tr>
            <td data-label="Title">The Witcher</td>
            <td data-label="Writer">Andrzej Sapkowski</td>
            <td data-label="Genre">Fantasy</td>
            <td data-label="ISBN">9788090091252</td>
            <td data-label="Language">English</td>
            <td data-label="Pages">288</td>
            <td data-label="Amount">5</td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
<div class="Bio">
    <img src="Image/TW.png" rel="The Witcher">
    <h1>
        The Witcher: The Last Wish
    </h1>
    <p>
        The Last Wish, by Andrzej Sapkowski, is a collection of short stories in the fantasy genre, although it borrows heavily from the folk and fairy tale tradition, as well. The collection was first published in Polish in 1993, although several stories had previously been published as part of a separate collection in 1990. Along with a series of short story collections and novels, The Last Wish is part of the Witcher saga. Subtitled Introducing the Witcher, this collection takes place before the rest of the saga of Geralt of Rivia, the eponymous Witcher.
    </p>
</div>
