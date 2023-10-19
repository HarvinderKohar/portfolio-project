<?php
    
    if(isset($_POST["lout"]))
    {
        session_destroy();
        header("Location: index.php");
    }
?>