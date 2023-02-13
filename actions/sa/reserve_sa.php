<?php

require '../private/conn_BOS.php';
$user = $_SESSION['Userid'];
$sth = $dbh->prepare("SELECT reserve_id, FKbook_id, FKuser_id, startdate FROM reserve WHERE FKuser_id = :user");
$sth->execute([
    ':user' => $user
]);

while ($row = $sth->fetch(PDO::FETCH_OBJ)) {

    echo "
            <tr>
                <td data-label='Reservation'>$row->reserve_id</td>
                <td data-label='Book'>$row->FKbook_id</td>
                <td data-label='User'>$row->FKuser_id</td>
                <td data-label='Start date'>$row->startdate</td>
                <td data-label='Cancel'>
                <a href='actions/action/reservecancel.php?reserveID=$row->reserve_id&user=$row->FKuser_id'/>
                Cancel
                </td>
              
            </tr>";}
