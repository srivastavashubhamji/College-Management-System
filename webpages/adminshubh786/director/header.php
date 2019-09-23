<?php
    if( session_status() == PHP_SESSION_NONE )
        session_start();
    if( !(isset($_SESSION['adminOfSchool'])) )// Neither any Dir or Manager  Logged in
        header('location: ../login.php?why=notLoggedIn&head=no');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collage Management System</title>
        
    <link rel="icon" href="../../../images/schoolTitle.png" type="image=x-icon">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../../../css/style.css" type="text/css">
    <link rel="stylesheet" href="../../../css/all.css" type="text/css">
</head>
<body>
    <div class="header">
        <div class="leftHead">
            <a href="index.php" class="aimage"><img src="../../../images/newcms1.PNG?23" alt="CMS Image" id="topLogo">
            </a>
        </div>
        <div class="rightHead" id="rightHeadId">
            <a href="javascript:void(0);" onclick="displayMedia()" class="dots">
                <i class="fas fa-ellipsis-v dottedi" id="dots"></i>
            </a>            
            <a href="#" class="ss"><i class="fab fa-twitter-square"></i></a>
            <a href="#" class="ss"><i class="fab fa-google-plus-square"></i></a>
            <a href="#" class="ss"><i class="fab fa-facebook-square"></i></a>
            <a href="#" class="ss"><i class="fab fa-whatsapp-square"></i></a>            
        </div>
    </div>

    <div class="navMain">
        <a href="javascript:void(0);" onclick="effectNavBars('1')" class="Bars" id="Abars">
            <i class="fa fa-bars ibars" id="bars"></i>
        </a>
        <ul class="nav" id="nav">
            <li class="drop first">
                <a href="javascript:void(0);" onclick="effectNavBars('-1')" class="cancel" id=" cancela">
                    <i class="fa fa-times" id="cancelBar"></i>
                </a>
            </li>
            <li class="drop">
                <a href="./index.php" class="btn"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="drop">
                <a href="./studentZone.php" class="btn"><i class="fas fa-book"></i> Student</a>
            </li>
            <li class="drop">
                <a href="./teacherZone.php" class="btn"><i class="fas fa-poll"></i> Teacher</a>
            </li>
            <li class="drop">
                <a href="./feesZone.php" class="btn"><i class="fas fa-coins"></i> Fees</a>
            </li>
            <li class="drop">
                <a href="./courseZone.php" class="btn"><i class="fab fa-app-store-ios"></i> Course</a>
            </li>
            <li class="drop">
                <a href="./stats.php" class="btn"><i class="fas fa-poll"></i> Stats</a>
            </li>
            <li class="drop">
                <a href="./managers.php" class="btn"><i class="fab fa-app-store"></i> Managers</a>
            </li>
            <li class="drop loginLi">
                <?php
                    if( !isset($_SESSION['adminOfSchool']) )  // Not Logged In ...
                    {
                        echo '<a href="../login.php" class="btn"><i class="fas fa-user"></i> <span>Login</span></a>';
                    }
                    else 
                    {
                        echo '<a href="../logout.php" class="btn"><i class="fas fa-user"></i> <span>Logout</span></a>';
                    }
                ?>                
            </li>
        </ul>
    </div>
    