<?php
    require_once("../functions.php");
    if( !(isset($_SESSION['adminOfSchool'])) )
        header("location: ../login.php?flag=sessexp");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collage Management System</title>
    <link rel="icon" href="../../../images/schoolTitle.png" type="image=x-icon">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../../../css/style.css" type="text/css">
    <link rel="stylesheet" href="../../../css/all.css" type="text/css">
    <script src="../../../javascript/main.js"></script>
    <script src="../../../javascript/sweetalertfile.js"></script>
    <style>
        #mgrHidInp
        {
            height: 5px;
            width: 5px;
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>
<body class="media">
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

                <a href="../logout.php" class="btn"><i class="fas fa-user"></i> <span>Logout</span></a>
            </li>
        </ul>
    </div>
    
    <noscript>
        <div class="rowCont" style="height=500px;background-color:rgb(210,210,210);text-align:center;font-size:20px;">
            <h1>You have Disabled Javascript . Kindly Update Your <i>Settings or Browser</i></h1>
            <hr>
        </div>
    </noscript>
    <div id="rootelem">
        <div class="rowCont">
            <h1>Add-Remove and Display Managers </h1>
        </div>
        <div class="mainMgrCre">
            <div class="tmpFrmL">
                <h1>Add Manager </h1>
                <p class="subheadmgr">Create Manager's Account</p>
                <?php
                // checking if status = .*(OOPs).*  then save the URL data into Inputs
                if(isset($_GET['refill']) && (strcmp($_GET['refill'],"true")) == 0)
                {
                    $name = $_GET["name"];
                    $email = $_GET["email"];
                    $ph1 = $_GET["ph1"];
                    $ph2 = $_GET["ph2"];
                    $uname = str_replace("_mgr_","",$_GET["uname"]);    // removing "_mgr_" , JS will Handle

                    //  Placing forms data automatically when an error was encountered at server side...
                    echo '<form action="handleMgrAddRem.php" method="post" onsubmit="return checkAddMgr()">
                            <input type="text" name="mgrName" placeholder="Name" required id="mgrName"
                             value="'.$name.'">
                            <input type="text" name="mgrEmail" placeholder="Email" required
                             value="'.$email.'">
                            <input type="text" name="mgrPh1" placeholder="Phone No. 1" required
                             value="'.$ph1.'">
                            <input type="text" name="mgrPh2" placeholder="Phone No. 2"
                             value="'.$ph2.'">
                            <input type="text" name="mgrUname" placeholder="Username" id="mgrUserId" onblur="mgrUnmBlured()" required
                             value="'.$uname.'">
                            <input type="text" name="mgrPass" id="mgrPassId" placeholder="Enter Password" required>
                            <button type="submit" name="submitToAdd" id="creMgrId">Create Manager</button>
                        </form>';
                }
                else
                {
                 echo '<form action="handleMgrAddRem.php" method="post" onsubmit="return checkAddMgr()">
                        <input type="text" name="mgrName" placeholder="Name" required id="mgrName">
                        <input type="text" name="mgrEmail" placeholder="Email" required>
                        <input type="text" name="mgrPh1" placeholder="Phone No. 1" required>
                        <input type="text" name="mgrPh2" placeholder="Phone No. 2">
                        <input type="text" name="mgrUname" placeholder="Username" id="mgrUserId" onblur="mgrUnmBlured()" required>
                        <input type="text" name="mgrPass" id="mgrPassId" placeholder="Enter Password" required>
                        <button type="submit" name="submitToAdd" id="creMgrId">Create Manager</button>
                       </form>';
                }                
                    if(isset($_GET['status']))
                    {                        
                        $msg = getProperErrMsg($_GET['status']);
                        $ret = preg_match("/^(.*)?OOPs.*/i",$msg);  // Error ("OOPs") -> Red , "Ok" -> Green
                        if( $ret == 1 )              
                            echo '<p style="color:red;font-size:17px;display:block;">'.$msg.'</p>';
                        
                        else
                            echo '<p class="retMsg" style="font-size:17px;display:block;">'.$msg.'</p>';                        
                    }
                ?>
            </div>
            <div class="tmpFrmR">
                <h1>Remove Manager </h1>
                <p class="subheadmgr">Delete Manager's Account</p>
                <form action="handleMgrAddRem.php" method="post">
                   
                    <input type="text" name="mgrInfo" placeholder="Enter Username/ Name/ Phone/ Email" required>
                    <button type="submit" name="submitToDel">Delete Manager</button>
                    <?php
                    if(isset($_GET['delStatus']))
                    {                        
                        $msg = getProperErrMsg($_GET['delStatus']);
                        $ret = preg_match("/^(.*)?OOPs.*/i",$msg);  // Error ("OOPs") -> Red , Ok -> Green
                        if( $ret == 1 )
                        {                            
                            echo '<p style="color:red;font-size:20px;display:block;">'.$msg.'</p>';
                        }
                        else 
                        {    
                            echo '<p  class="retMsg" style="font-size:20px;display:block;">'.$msg.'</p>';
                        }
                    }
                    ?>
                </form>
            </div>            
               <div class="tmpMgrMid">
                <h1>Show All Managers </h1>
                <p class="subheadmgr">Details of Manager</p>
                <form action="displayMgrs.php" method="post">
                    <button type="submit" name="submitToShow">Display All Managers</button>
                </form> 
            </div>
        </div>
    </div>
    <script>
        window.onload=showRoot;
        function showRoot(){
            document.getElementById("rootelem").style.display="block";
        }
    </script>
    <input type="text" id="mgrHidInp" placeholder="Here data will pasted" readonly>
        <script src="../../../javascript/main.js"></script>
    <script src="../../../javascript/sweetalertfile.js"></script>
</body>

</html>
