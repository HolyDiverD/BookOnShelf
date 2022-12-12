<div class="Table,con">
    <form action="../../actions/action.php" method="post" id="search">
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
    <form action="../../actions/action.php" method="post" id="Add">
        <label for="title"><b>Title</b></label>
        <input type="text" placeholder="Enter Title" name="title" required>

        <label for="writer"><b>Writer</b></label>
        <input type="text" placeholder="Enter Writer" name="writer" required>

        <label for="genre"><b>Genre</b></label>
        <input type="text" placeholder="Enter Genre" name="genre" required>

        <label for="isbn"><b>ISBN</b></label>
        <input type="text" placeholder="Enter ISBN" name="isbn" required>

        <label for="lan"><b>Language</b></label>
        <input type="text" placeholder="Enter Language" name="lan" required>

        <label for="pgs"><b>Pages</b></label>
        <input type="text" placeholder="Enter Pages" name="pgs" required>

        <label for="cps"><b>Copies</b></label>
        <input type="text" placeholder="Enter Copies" name="cps" required>
    </form>
    <button class="loginsubmit" type="submit" form="Add">Add</button>
</div>
