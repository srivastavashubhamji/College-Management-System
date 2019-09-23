<?php
    // SUBMIT CLICKED ... //
    if(isset($_POST["submit"]))
    {
        // DATABASE CONNECTION FILE INCLUDED ... //
        include("./dbconn.php");
        
        $uname = $_POST["username"];
        $pass = $_POST["password"];
        
        $indForDir = substr_compare( $uname, "_dir_" ,0);
        $indForMgr = substr_compare( $uname, "_mgr_" ,0);
        // returns -ive if Not found and +ive num( num of Remaining Char after it in the main string ) if found
    
        if( $indForDir > 1 )
        {  
        // checking If() (1) director is trying dir_**** uname or Manager with mana_****** uname to Login
            ob_start();
            ob_flush();
            header("location:./adminshubh786/login.php?userLogin=Director&head=no");
            exit(1);
        }
        else if( $indForMgr > 1 )
        {
            ob_start();
            ob_flush();
            header("location:./adminshubh786/login.php?userLogin=Manager&head=no");
            exit(1);
        }
        
        $sql='SELECT * FROM `user_create` WHERE `username`="'.$uname.'" and `password`="'.$pass.'";';
        
        $result = mysqli_query($conn,$sql);
        
        if( ($numrow = mysqli_num_rows( $result )) > 0 )
        {
            $record = mysqli_fetch_assoc($result);
            if( session_status() == PHP_SESSION_NONE )
                session_start();
            
            $_SESSION['userid'] = $record['id'];
            header ("location: ../index.php?userLogin=successful");
            exit(1);
        }
        else
        {
            header("location: ./login.php?userLogin=OOPs&valueRet=$indForDir");
            exit(1);
        }
    }
?>