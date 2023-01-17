<div class="Table,con">
    <form action="" method="post" id="search">
        <input placeholder="&#xF002; Search" class="CustomerSearch" type="search" name="search">
        <button class="LendB" id="tst" type="button"><i class="fa fa-fw fa-trash" onclick="fnselect()"></i>Delete</button>
    </form>
    <table id = table>
        <tr>
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
    <input type="button" id="tst" value="OK" onclick="fnselect()" />

    <script src="scripts/tableselect.js"></script>

</div>
<div class="Bio">
    <img src="Image/TW.png" rel="The Witcher">
    <h1>
        The Witcher: The Last Wish
    </h1>
    <p>
        The Last Wish, by Andrzej Sapkowski, is a collection of short stories in the fantasy genre, although it borrows
        heavily from the folk and fairy tale tradition, as well. The collection was first published in Polish in 1993,
        although several stories had previously been published as part of a separate collection in 1990. Along with a
        series of short story collections and novels, The Last Wish is part of the Witcher saga. Subtitled Introducing
        the Witcher, this collection takes place before the rest of the saga of Geralt of Rivia, the eponymous Witcher.
    </p>
</div>
