<?php 
    require_once"style/header.php"; 
    require_once"includes/config.php"
?>

<form name="newgame" action="rungame.php" method="get">
    <INPUT type=text name="playercount" size=1 maxlength=1 value="2">How many players?
    <br />
    <input type="submit" value="Submit" />
</form>


<?php
    require_once"style/footer.php"; 
?>
