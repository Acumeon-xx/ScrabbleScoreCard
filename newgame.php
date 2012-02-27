<?php 
    require_once"library/header.php"; 
    require_once"library/config.php"
?>

<form name="newgame" action="runninggame" method="get">
    <input type="number" name="playercount" min="2" max="7" step="1" value="2" />Enter the number of players
    <input type="submit" value="Submit" />
</form>


<?php
    require_once"library/footer.php"; 
?>
