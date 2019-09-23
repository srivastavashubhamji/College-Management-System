<?php
    if( session_status() == PHP_SESSION_NONE )
        session_start();

    if( !(isset($_SESSION['userOfSchool'])) )// Neither any Dir. or Manager Logged in.. Redirect to Login Page...
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
                <a href="./index.php" class="btn"><i class="fas fa-home"></i>  Home</a>
            </li>
            <li class="drop">
                <a href="./studentZone.php" class="btn"><i class="fas fa-book"></i> Student' Zone </a>
            </li>
            <li class="drop">
                <a href="./teacherZone.php" class="btn"><i class="fas fa-poll"></i> Teachers' Zone </a>
            </li>
            <li class="drop">
                <a href="./feesZone.php" class="btn"><i class="fas fa-coins"></i> Fees Zone </a>
            </li>
            <li class="drop">
                <a href="./courseZone.php" class="btn"><i class="fab fa-app-store-ios"></i> Course Zone </a>
            </li>
            <li class="drop loginLi">
               
                <?php
                    if( !isset($_SESSION['userOfSchool']) )  // Not Logged In ...
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
    <div class="rowCont" style="height=500px;background-color:rgb(210,210,210);text-align:center;">
        <h1>Welcome to Manage Panel...</h1><hr>        
    </div>

    <div style="height: 600px;padding: 20px 30px;">
        <h1 style="text-align: center;">Content of Page</h1>
    </div>

    <p style="position:absolute;bottom:10px;right:10px;">Page is Under Construction...</p>
    <script src="../../../javascript/main.js"></script>
    <script src="../../../javascript/sweetalertfile.js"></script>
</body>

</html>