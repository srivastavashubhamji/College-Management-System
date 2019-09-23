<?php
    if( session_status() == PHP_SESSION_NONE )
        session_start();
    unset($_SESSION);
    session_destroy();
//  resetting the $_SESSION variable...
    header('location: login.php');
?>