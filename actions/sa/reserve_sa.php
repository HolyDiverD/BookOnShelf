<?php
require '../private/conn_BOS.php';

$sth = $dbh->prepare("SELECT reserve_id, FKbook_id, FKuser_id, startdate FROM reserve");
$sth->execute();

while ($row = $sth->fetch(PDO::FETCH_OBJ)) {

    echo "
            <tr>
                <td data-label='Reservation'>$row->reserve_id</td>
                <td data-label='Book'>$row->FKbook_id</td>
                <td data-label='User'>$row->FKuser_id</td>
                <td data-label='Start date'>$row->startdate</td>
                <td data-label='Cancel'>
                <a href=''/>
                Cancel
                </td>
              
            </tr>";}
