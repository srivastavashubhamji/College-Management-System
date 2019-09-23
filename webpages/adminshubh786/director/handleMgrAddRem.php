<?php

if( session_status() == PHP_SESSION_NONE ){
    session_start();
}
if(isset($_SESSION['adminOfSchool'])){
    if(isset($_POST['submitToAdd']))    // Create New Manager Clicked...
    {
        include '../../dbconn.php';

        $Name = $_POST['mgrName'];
        $Email = $_POST['mgrEmail'];
        $Ph1 = $_POST['mgrPh1'];
        $Ph2 = $_POST['mgrPh2'];
        $Uname = $_POST['mgrUname'];
        $Pass = $_POST['mgrPass'];

        $encUname = password_hash( $Uname , PASSWORD_DEFAULT );
        $encPass = password_hash( $Pass , PASSWORD_DEFAULT );

        // NOT ANY VALIDATION IS THERE ... LACK OF TIME

        // SEARCHING FOR UNAME THAT ALREADY EXISTS IN DATABASE ...
        $sql = 'SELECT * FROM `schoolmanagers`;';
        $result = mysqli_query( $conn,$sql );
        $numrows = mysqli_num_rows( $result );
        $isMatched = false;
        while( ($row = mysqli_fetch_assoc($result)) && $isMatched == false )
        {
            $dbEncUnm = $row['uname'];
            if( password_verify($Uname, $dbEncUnm)==1 )
            {
                $isMatched = true;
                break;
            }
        }
        if( $isMatched == true )
        {
            // Username already Exists
            header("location: ./managers.php?status=dir_retry&refill=true&name=$Name&email=$Email&ph1=$Ph1&ph2=$Ph2&uname=$Uname");
            exit(1);
        }
        // The managers 'Uname' that Director entered is Unique for DB ... Storing in DB
        else
        {
            $sql = 'INSERT INTO `schoolmanagers`(`uname`, `pass`, `name`, `email`, `ph1`, `ph2`) VALUES (
                    "'.$encUname.'","'.$encPass.'","'.$Name.'","'.$Email.'","'.$Ph1.'","'.$Ph2.'" );';
            if( mysqli_query( $conn,$sql ) )
            {
                header('location: ./managers.php?status=dir_ok');
                exit(1);
            }
            else
            {
                header("location: ./managers.php?status=error&refill=true&name=$Name&email=$Email&ph1=$Ph1&ph2=$Ph2&uname=$Uname");
            }
        }
    }
    
    else if(isset($_POST['submitToDel'])){   // Remove a Manager Clicked...
    
        include "../../dbconn.php";
        $mgrInfoToDel = $_POST['mgrInfo'];
        // Steps of Prevention from SQL Injection ...
        // 1)  create Template ...
        // 2)  Init... with 'Conn_Obj'
        // 3)  Prepare with  'Statement & SQL'
        // 4)  Bind with ( Statement , "1stChar_Of_TypeOfParams", [ params,... ] )
        // 5)  Execute Statement
        // 6)  Take Result
        
        $sql = "DELETE FROM schoolmanagers where `uname`=? OR `email`=? OR `ph1`=? OR `ph2`= ?;";
        $stmt = "";
        $flag = "false";
        if( $stmt = mysqli_stmt_init($conn) )
            if( mysqli_stmt_prepare( $stmt, $sql) )
                if( mysqli_stmt_bind_param($stmt,"ssss",$mgrInfoToDel,$mgrInfoToDel,$mgrInfoToDel,$mgrInfoToDel) )
                    if( mysqli_stmt_execute($stmt) )
                    {
                        $affRows = mysqli_affected_rows($conn);   // checking after performing corr SQL-> Is Any row Delete
                        if( $affRows > 0)
                        {
                            $res = mysqli_stmt_get_result( $stmt );
                            $flag = "true";
                            header("location: ./managers.php?delStatus=true");
                            exit(1);                            
                        }
                    }                        
                    else
                    {   // Email/ Ph1/ Ph2  Not matched ... Hence trying for Uname
                        $sql = 'Select uname from schoolmanagers';
                        $result = mysqli_query( $conn,$sql );
                        $numrows = mysqli_num_rows( $result );
                        $isDeleted = "false";
                        
                        if( $numrows > 0 )
                        {
                            while( ($rows = mysqli_fetch_assoc( $result )) && $isDeleted="false")
                            {
                                if( (password_verify( $mgrInfoToDel , $rows['uname'])) == 1)
                                {
                                    $sql = 'Delete from schoolmanagers where uname="'.$rows['uname'].'";';
                                    if( mysqli_query( $conn, $sql ) )
                                    {
                                        $isDeleted = "true";                                        
                                        $affRows = mysqli_affected_rows($conn);
                                        if( $affRows > 0 )
                                        {
                                            header("location: ./managers.php?delStatus=true");
                                            exit(1);                                            
                                        }
                                    }
                                }
                            }
                        }
                        else
                        {   // Nothing got Matched ...
                            header("location: ./managers.php?delStatus=false&from1");
                            exit(1);
                        }
                    }
    }
        header('location: ./managers.php?delStatus=false&from2');
        exit(1);
}
