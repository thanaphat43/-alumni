<?php
    ob_start();
    session_start();

    require("conn.php");
        
    session_destroy();
    
    header('Refresh:0 url=index.php');
?>