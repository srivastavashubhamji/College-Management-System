<?php
//  Logging Out mechanism...
    if( session_status() == PHP_SESSION_NONE )
    {
        session_start();
    }
    if( array_key_exists('userid',$_SESSION) ) 
    {
        unset( $_SESSION['userid']);
        session_destroy();
        header("location: ../index.php?logout=successful");
    }
?>
