<?php
if( session_status() == PHP_SESSION_NONE )
    session_start();

// Function to get Proper Error Msg During Admin Login...
function getProperErrMsg( $errTag )
{
    switch( $errTag )
    {
        case "wrongup":
            $msg = ' OOPs ... Username or Password was wrong ';
            return $msg;            
            break;
        
        case "contactAdmin":
            $msg = ' OOPs ... Please Contact Your Admin ';
            return $msg;
            break;
        
        case "retry":
            $msg = ' OOPs ... Username or Password was wrong ';
            return $msg;            
            break;
        
        case "error":
            $msg = ' OOPs ... Something Went wrong, Retry ';
            break;
        
        case "dir_retry":
            $msg = ' OOPs ... Invalid Username Or Password ';
            return $msg;
            break;
        
        case "dir_ok":
            $msg = "New Manager Created & Copied,<br>Kindly Paste & Save it now";
            return $msg;
            break;
            
        case "false":
            $msg = "OOPs ... Could not Delete Account, Retry";
            return $msg;
            break;
        case "true":
            $msg = "Manager's Account Deleted Successfully.";
            return $msg;
            break;
        default:
            return "Link Failed";            
    }
}


// Function to Check which type Of Admin User wants to Login ...
function getUserType( $uname )
{
    // returns-No of remaining char in $ uname after Substr
    $indForDir = substr_compare( $uname, "_dir_" ,0);
    
    // return greater than 1 e.g. 5 in fun_scmp ( '_dir_shubh','_dir_',0 )                              while 1 in fun_scmp( 'shubh','_dir_',0) || ('kallo_dir_,'_dir_',0) 
    $indForMgr = substr_compare( $uname, "_mgr_" ,0);
    if( !($indForDir > 1) )
    {
        if( !($indForMgr > 1) )
            header('location:login.php?status=retry');
            //  Here Neither '_dir_' nor '_mgr_' prefix was in login of adminSite - uname
    }
    if( $indForDir > 1)
    {
        $data = "director";
        return $data;
        exit(1);
    }
    else if( $indForMgr > 1) 
    {
        $data = "manager";
        return $data;
        exit(1);
    }
    else
    {
        $data = "wrongAttempt";
        return $data;
        exit(1);
    }
}


// Function which take Dir_Creden..ls and performs Action...
function handleDirectorCredentials( $uname,$pass,$conn )
{
    global $conn;
    $sql = 'Select * from thedirector';
    $result = mysqli_query( $conn, $sql );
    $isMatched = false;
    $lc=0;
    // Fetching Each Row
    while(( $row = mysqli_fetch_assoc( $result )) && $isMatched == false )
    {
        $dbEncUname = $row['uname'];
        $dbEncPass = $row['pass'];
        $lc++;

        if( (password_verify( $uname,$dbEncUname ) == 1) && (password_verify( $pass, $dbEncPass ) == 1))
        {
            // The username and password Entered by Director was found in DataBase so 'Start Session' > Redirect
            $sessFlag="false";            
            $_SESSION['adminOfSchool'] = $row['uid'];
            $_SESSION['adminNameOfSchool'] = $row['uname'];
            header("location: ./director/index.php");
            $isMatched = true;
            exit(1);
        }
    }
    if( $isMatched == false)
    {
        // Wrong Username Or Password was provided...
        header('location: ./login.php?status=wrongup&from=1');
        exit(1);
    }
}


// Function to take and perform Action on Manager Credentials
function handleManagerCredentials( $uname,$pass,$conn )
{
    global $conn;
    $sql = 'Select * from `schoolmanagers`';
    $result = mysqli_query( $conn, $sql );
    $isMatched = false;
    
    // Fetching and Matching Each Row
    while(( $row = mysqli_fetch_assoc( $result )) && $isMatched == false )
    {
        $dbEncUname = $row['uname'];
        $dbEncPass = $row['pass'];

        if( (password_verify( $uname,$dbEncUname ) == 1) && (password_verify( $pass, $dbEncPass ) == 1))
        {            
            // The username and password Entered by Director was found in DataBase so 'Start Session' > Redirect
            // sess_started in required(functions.php) 
            $_SESSION['userOfSchool'] = $row['uid'];
            $_SESSION['userNameOfSchool'] = $row['uname'];            
            header('location: ./manager/index.php');
            $isMatched = true;
            exit(1);
        }
    }
    if( $isMatched == false)
    {
        // Wrong Username Or Password was provided...
        header('location: ./login.php?status=wrongup&from=1');
        exit(1);
    }
}


// Function to Create table with Dynamic num of Rows on the Basis of mysqil_result Data...
function getDataWithTable( $result )
{
    global $conn;
    $tableStart ='<table border="2px solid black;" cellspacing="0px"; class="mgrTbl">';
    $tableEnd  = "</table>";    
    $allTable = $tableStart."<tr>";

    // fetching first Record ...
    $row = mysqli_fetch_assoc( $result);
    $headings = array_keys( $row );
    $allHeadings ="";
    foreach( $headings as $thValue)
    {            
        $allHeadings = $allHeadings."<th>".$thValue."</th>";
    }    
    $allHeadings = $allHeadings."</tr>";            
    $allTable = $allTable.$allHeadings;
    // Table <tr><th> Headings finish </th> ... n </tr>
    // Table <tr><td> Table Data Cell Start </td> ... n </tr>
    do
    {
        // In Each row : <tr> ... </tr> ,set data : <td> value </td>
        $allTable = $allTable."<tr>";
        // foreach( $headings as $thValue)
        foreach( $row as $Value=>$thValue)
        {                
        // $allTable = $allTable."<td>".$row[$thValue]."</td>";
            if( $thValue == "")
                $allTable = $allTable.'<td class="tdCenter">'."-----".'</td>';
            else
                $allTable = $allTable."<td>".$row[$Value]."</td>";
        }
        $allTable = $allTable."</tr>";
    }while( $row = mysqli_fetch_assoc( $result) );
    $allTable = $allTable.$tableEnd;
    
    return $allTable;
}
