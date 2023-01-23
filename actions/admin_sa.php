<?php
require '../private/conn_BOS.php';

$sth = $dbh->prepare("SELECT ID, book_title, book_writer, book_genre, book_isbn, book_lan, book_pages, book_amount FROM books");
$sth->execute();

while ($row = $sth->fetch(PDO::FETCH_OBJ)) {

    echo "
            <tr>
                <td id='$row->ID' data-label='title'>$row->book_title</td>
                <td data-label='Writer'>$row->book_writer</td>
                <td data-label='Genre'>$row->book_genre</td>
                <td data-label='ISBN'>$row->book_isbn</td>
                <td data-label='Language'>$row->book_lan</td>
                <td data-label='Pages'>$row->book_pages</td>
                <td data-label='Amount'>$row->book_amount</td>
                <td data-label='Delete'>
                <a href='actions/deleteaction.php?id=$row->ID'/>
                Delete
                </td>
                <td data-label='Edit'>
                <a href='index.php?page=edit&ID=$row->ID&title=$row->book_title&writer=$row->book_writer&genre=$row->book_genre&isbn=$row->book_isbn&lan=$row->book_lan&pages=$row->book_pages&amount=$row->book_amount'/>
                Edit
                </td>          
            </tr>";
}
