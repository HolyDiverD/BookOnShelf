<div class="Table,con">

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
        include 'actions/action/selectionaction.php'
        ?>
    </table>
        <?php
echo '</div>
<div class="Bio">
    <form action="actions/action/editaction.php?ID='.$_GET['ID'].'" method="post" id="Add">
        <label for="title">
            <b>Title</b>
        </label>
        <input type="text" placeholder="Enter Title" name="title" value="'.$_GET['title'].'" required>

        <label for="writer">
            <b>Writer</b>
        </label>
        <input type="text" placeholder="Enter Writer" name="writer" value="'.$_GET['writer'].'" required>

        <label for="genre">
            <b>Genre</b>
        </label>
        <input type="text" placeholder="Enter Genre" name="genre" value="'.$_GET['genre'].'" required>

        <label for="isbn">
            <b>ISBN</b>
        </label>
        <input type="text" placeholder="Enter ISBN" name="isbn" value="'.$_GET['isbn'].'" required>

        <label for="lan">
            <b>Language</b>
        </label>
        <input type="text" placeholder="Enter Language" name="lan" value="'.$_GET['lan'].'" required>

        <label for="pgs">
            <b>Pages</b>
        </label>
        <input type="number" placeholder="Enter Pages" name="pages" value="'.$_GET['pages'].'" required>

        <label for="cps">
            <b>Copies</b>
        </label>
        <input type="number" placeholder="Enter Copies" name="amount" value="'.$_GET['amount'].'" required>
    </form>
    <button class="loginsubmit" type="submit" form="Add">
        Edit
    </button>

</div>';
?>