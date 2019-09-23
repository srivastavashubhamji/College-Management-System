<?php

if( isset($_POST['submit']) )
{
    include('../dbconn.php');
    require_once('functions.php');

    $uname = $_POST['username'];
    $pass = $_POST['password'];

// CHECKING : Is there Valid prefix '_dir_' or '_mgr_'
    $userType = getUserType( $uname );

//  '_mgr_'  was in uname
    if( strcmp( $userType,"manager" ) == 0 )
    {
    // Just checking is there any Director in dbTable
        $sql = "Select uid from thedirector limit 1;";
        $result = mysqli_query( $conn, $sql);
        $finalRecords = mysqli_fetch_assoc($result);
        
        // If Director_Table is Empty then return 
        if( empty($finalRecords) )
        {
            header('location: ./login.php?status=contactAdmin');
            exit(1);
        }
        else
        {
            global $conn;
            handleManagerCredentials( $uname,$pass,$conn );
        }
    }
    
// If prefix '_dir_' was in uname
    if( strcmp( $userType,"director" ) == 0 )
    {
        // Just checking is there any Director in Table
        $sql = "Select uid from thedirector limit 1;";
        $result = mysqli_query( $conn, $sql);
        $finalRecords = mysqli_fetch_assoc($result);
        
        // If Not a single Director in Table then Create Director
        if( empty($finalRecords) )
        {
            header('location: ./director/directorInfo.php');
            exit(1);
        }
        else
        {
            global $uname,$pass,$conn;
            handleDirectorCredentials( $uname,$pass,$conn );
        }
    }
}