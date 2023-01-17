<div class="Table,con">
    <form action="../../actions/loginaction.php" method="post" id="search">
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
        <?php
        include 'actions/selectionaction.php'
        ?>
    </table>
</div>
<div class="Bio">
    <form action="../../actions/loginaction.php" method="post" id="Add">
        <label for="title"><b>Edit</b></label>
        <input type="text" placeholder="Enter Title" name="title" required>
    </form>
    <button class="loginsubmit" type="submit" form="Add">Enter</button>

</div>
