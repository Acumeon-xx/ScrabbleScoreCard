<?php require_once"library/header.php"; ?>
        <a href="newgame.php">New Game</a>
        <a href="advsearch.php">Advanced Search</a>
        <form name="search" action="search.php" method="get">
            <text name="searchString" value="Player Name" />
            <input name="submit" value="Search" />
        </form>
        <a href="search.php">Search</a>
        <?php
            require_once"library/footer.php"; 
        ?>