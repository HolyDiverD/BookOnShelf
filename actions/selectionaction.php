<?php
$servername = "localhost";
$username = "basri";
$password = "basri123";

//pdo connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=bos", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sth = $conn->prepare("SELECT book_title, book_writer, book_genre, book_isbn, book_lan, book_pages, book_amount FROM books");
$sth->execute();

while ($row = $sth->fetch(PDO::FETCH_OBJ)) {

    echo "
            <tr>
                <td data-label='title'>$row->book_title</td>
                <td data-label='Writer'>$row->book_writer</td>
                <td data-label='Genre'>$row->book_genre</td>
                <td data-label='ISBN'>$row->book_isbn</td>
                <td data-label='Language'>$row->book_lan</td>
                <td data-label='Pages'>$row->book_pages</td>
                <td data-label='Amount'>$row->book_amount</td>
            </tr>
                ";

}



