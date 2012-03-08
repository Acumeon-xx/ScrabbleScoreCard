<?php

/**
 * Description of db
 *
 * @author Eric
 */

require("config.php");

class db {

    //get games history for home page
    function gamehistory(){
        $query = mysql_query("SELECT * FROM subjects ORDER BY position ASC");
        check_query($query);
        return $query;
    }
    
    //Advanced search in home page
    function advsearch(){
        
    }
    
    //stores data in a temporary table 
    function tmpscore(){
        
    }
    
    //puts together stat information at the end of game and stores it
    function game(){
        
    }
}

?>
