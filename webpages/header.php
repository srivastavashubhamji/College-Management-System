<?php
//  Checking if Session is not Started ...then Start the Session...
    if( session_status() == PHP_SESSION_NONE )
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../images/schoolTitle.png" type="image=x-icon">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="header">
<!--    Logo        -->
        <div class="leftHead">
            <a href="../index.php" class="aimage"><img src="../images/newcms.PNG?12" alt="CMS Image" id="topLogo"></a>
        </div>
        
<!--    Social Media Links Bar   -->
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
    
<!--    Navigation Bar   -->
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
                <a href="../index.php" class="btn"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="drop">
                <a href="#showing" class="btn"><i class="fas fa-book"></i> Courses <i class="fas fa-caret-down" onclick="over('0')"></i></a>
                <div class="dropcontent">
                    <a href="./course.php">UG Courses</a>
                    <a href="./course.php">PG Courses</a>
                    <a href="./course.php">Diploma Courses</a>
                </div>
            </li>
            <li class="drop">
                <a href="#showing" class="btn"><i class="fas fa-poll"></i> Results <i class="fas fa-caret-down" onclick="over('1')"></i></a>
                <div class="dropcontent">
                    <a href="./results.php">UG Results</a>
                    <a href="./results.php">PG Results</a>
                    <a href="./results.php">Diploma Results</a>
                </div>
            </li>
            <li class="drop">
                <a href="#showing" class="btn"><i class="fas fa-camera"></i> Media <i class="fas fa-caret-down" onclick="over('2')"></i></a>
                <div class="dropcontent">
                    <a href="./media.php" >Gallary</a>
                    <a href="./media.php" >Latest News</a>
                </div>
            </li>
            <li class="drop">
                <a href="#showing" class="btn"><i class="fab fa-app-store-ios"></i> About Us <i class="fas fa-caret-down" onclick="over('3')"></i></a>
                <div class="dropcontent">
                    <a href="./about.php">Collage Prev Years</a>
                    <a href="./about.php">Director</a>
                </div>
            </li>
            <li class="drop">
                <a href="#showing" class="btn"><i class="fas fa-phone"></i> Contact Us <i class="fas fa-caret-down" onclick="over('4')"></i></a>
                <div class="dropcontent">
                    <a href="./contactUs.php">Phone</a>
                    <a href="./contactUs.php">Email</a>
                </div>
            </li>
            <li class="drop loginLi">                
                <?php 
                // If Not Logged In ... Show "Login" Button
                    if( !isset($_SESSION['userid']) )
                    {
                        echo '<a href="../webpages/login.php" class="btn"><i class="fas fa-user"></i> <span>Login</span></a>';
                    }
                // If Logged In ... Show "Logout" Button...
                    else 
                    {
                        echo '<a href="../webpages/logout.php" class="btn"><i class="fas fa-user"></i> <span>Logout</span></a>';
                    }
                ?>
            </li>
        </ul>
    </div>
