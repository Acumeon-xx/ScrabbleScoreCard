/*
* Author: Eric Howell
* email: ehh1974@gmail.com
*/


<?php 
    require_once"includes/header.php"; 
    require_once"includes/config.php";
    require_once"includes/functions.php";
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
        <div class ="history">
            <p>Past Games</p>
            <?php
                
                $gh = gameHistory(NULL);
                while($gh){
                    echo $gh;
                }

            ?>
        </div>

<?php
    require_once"includes/footer.php"; 
?>