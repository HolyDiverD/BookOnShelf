<?php
session_start();
if ($_SESSION['role'] != 'Admin') {
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
    <a href="Home.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="Admin.php"><i class="fa fa-fw fa-list"></i>Overview</a>
    <a href="Toevoegen.php"><i class="fa fa-fw fa-shopping-basket"></i>Add</a>
    <a class="active" href="#"><i class="fa fa-fw fa-list"></i>Edit</a>
</div>
<div class="Table,con">
    <form action="PHP/action.php" method="post" id="search">
        <input placeholder="&#xF002; Search" class="CustomerSearch" type="search" name="search">
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
        <tr>
            <td data-label="Title">The Witcher</td>
            <td data-label="Writer">Andrzej Sapkowski</td>
            <td data-label="Genre">Fantasy</td>
            <td data-label="ISBN">9788090091252</td>
            <td data-label="Language">English</td>
            <td data-label="Pages">288</td>
            <td data-label="Amount">1</td>
        </tr>
    </table>
</div>
<div class="Bio">
    <form action="PHP/action.php" method="post" id="Add">
        <label for="title"><b>Edit</b></label>
        <input type="text" placeholder="Enter Title" name="title" required>
    </form>
    <button class="loginsubmit" type="submit" form="Add">Enter</button>

</div>
</body>
</html>

