<?php

require '../private/conn_BOS.php';

$user = $_SESSION['Userid'];

$sth = $dbh->prepare("
SELECT borrow_id, FKbook_id, FKuser_id, startdate, enddate 
FROM borrowed 
WHERE FKuser_id = :user");
$sth->execute([
    $user => ":user"
]);

while ($row = $sth->fetch(PDO::FETCH_OBJ)) {

    echo "
            <tr id='$row->borrow_id'>
                <td id='$row->borrow_id' data-label='Id'>$row->FKbook_id</td>
                <td data-label='User'>$row->FKuser_id</td>
                <td data-label='Start date'>$row->startdate</td>
                <td data-label='End date'>$row->enddate</td>
                <a href=''/>
                Hand in
                </td>
              
            </tr>";}
