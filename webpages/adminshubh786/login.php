<?php
//  Including the functions file...
    require_once('./functions.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">    
    <title>Collage Management System</title>        
    <link rel="icon" href="../../images/schoolTitle.png" type="image=x-icon">
    <link rel="stylesheet" href="../../css/style.css" type="text/css">
    <link rel="stylesheet" href="../../css/all.css" type="text/css">
    <script src="../../javascript/main.js"></script>
    <script src="../../javascript/sweetalertfile.js"></script>    
</head>
<body class="media">
    <form action="./loginHandler.php" method="post">
        <div class="adm mainLogin">
            <h3 class="linHead">Login</h3>
            <div class= "Login">
                <br>
                <input type="Password" name="username" placeholder="Enter Username" class="input" id="logUser" required>
                <br><br>
                <span class="logspa2">
<!--                    <i class="seeLpass far fa-eye-slash" id="showLogUser" onclick="showPwd('logUser','showLogUser')"></i>-->
                    <i class="seeLpass far fa-eye-slash" id="showLogUser" onclick="showPasss('secret1')"></i>
                </span>
                <input type="Password" name="password" placeholder="Enter Password" class="input" id="loginPass" required>

                <span class="logspa2">
<!--                    <i class="seeLpass far fa-eye-slash" id="showLogPass" onclick="showPwd('loginPass','showLogPass')"></i>-->
                   <i class="seeLpass far fa-eye-slash" id="showLogPass" onclick="showPasss('secret2')"></i>
                </span>
                <br><br>
                <input type="submit" name="submit" value="Submit" class="input btn">
            </div>
        </div>
<!--
        <p>For Testing : Use these Uname and Pass... to login as Admin Or Manager</p><hr><br>
        <p>Admin Uname = "<b>_dir_shubh</b>"; <span> For Manager   Uname = "<b>_mgr_shubh</b>";   </span> </p>        
        <p>Admin Passwd = "<b>_dir_sri</b>"; <span> For Manager   Passod = "<b>_mgr_sri</b>";   </span> </p>        
        <p>Admin Uname = "<b>_dir_lala</b>"; <span> For Manager   Uname = "<b>_mgr_lala</b>";   </span> </p>        
        <p>Admin Passwd = "<b>_dir_sri</b>"; <span> For Manager   Passod = "<b>_mgr_sri</b>";   </span> </p>        
        <br>
        <br>
-->
    </form>
        <?php
            if( isset( $_GET['status']))
            {
                $status = $_GET['status'];
                
            // This function will return Proper Msg
                $msg = getProperErrMsg( $status );         
                echo '<p style="color:red;font-size:25px;text-align:center;">'.$msg.'</p>';
            }
        ?>
    </body>
</html>