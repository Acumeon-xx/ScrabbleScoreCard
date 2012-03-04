<?php 
    require_once"style/header.php"; 
    require_once"includes/config.php"
?>

        <a href="newgame.php">New Game</a>
        <br />
        <br />
        <form name="search" action="search.php" method="get">
            <input tyep="text" value="Type Player Name" />
            <input type="submit" value="Search" />
        </form>
        <br />
        <a href="advsearch.php">Advanced Search</a>
        <br />
        <div>
            <p>Past Games</p>
            <?php
                $query = "SELECT FROM * WHERE"
                $results = mysql_query($results)
            ?>
        </div>

<?php
    require_once"style/footer.php"; 
?>