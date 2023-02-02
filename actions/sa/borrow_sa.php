<?php

require '../private/conn_BOS.php';

$user = $_SESSION['Userid'];

$sth = $dbh->prepare("
SELECT FKbook_id, FKuser_id, startdate, enddate 
FROM borrowed 
WHERE FKuser_id = :user");
$sth->execute([
    ":user" => $user
]);

while ($row = $sth->fetch(PDO::FETCH_OBJ)) {

    echo "
            <tr>
                <td data-label='Book ID'>$row->FKbook_id</td>
                <td data-label='User'>$row->FKuser_id</td>
                <td data-label='Start date'>$row->startdate</td>
                <td data-label='End date'>$row->enddate</td>
                <td data-label='Hand in'><a href='actions/action/handinaction.php?bookID=$row->FKbook_id&user=$row->FKuser_id&startdate=$row->startdate'>
                Hand in
                </td>
              
            </tr>";}
