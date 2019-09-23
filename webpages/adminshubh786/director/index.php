<?php
    if( session_status() == PHP_SESSION_NONE )
        session_start();
    // Neither Dir nor Manager Logged in...Send back to Login
    if( !(isset($_SESSION['adminOfSchool'])) )
        header('location:../login.php?why=notLoggedIn&head=no');
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
</head>
<body>
<!--  -------- header ----------- -->
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
    
<!--  -------- Navigation Bar ----------- -->
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
                    if( !isset($_SESSION['adminOfSchool']) )  // Not Logged In ... show "Login"
                    {
                        echo '<a href="../login.php" class="btn"><i class="fas fa-user"></i> <span>Login</span></a>';
                    }
                    else
                    {
                         // Not Logged In ... show "Logout"
                        echo '<a href="../logout.php" class="btn"><i class="fas fa-user"></i> <span>Logout</span></a>';
                    }
                ?>
            </li>
        </ul>
    </div>
<!------------------------ Body Content Start ----------------- -->
    <div class="mn-idx">
        <h1 class="row-ttl">The Glorious Campus</h1>
        <div class="row-ltr">
            <div class="cov-pic"><img src="./images/g3.jpg" alt=""></div>
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quo, doloremque exercitationem voluptatibus fuga architecto, iusto ratione, qui labore earum incidunt. Aliquam autem eum repellat. Dolorem quibusdam, est nemo vel rerum a illum alias molestias ducimus officia earum amet mollitia 
            reprehenderit sunt impedit provident inventore perspiciatis quam tenetur. Nisi, adipisci, magni. Nam maiores ipsam eveniet ut obcaecati cupiditate sequi asperiores placeat quisquam nostrum distinctio unde tempora cumque vel nihil, officia repellendus ad, ratione aspernatur? Dolor minima unde vel fugiat 
            suscipit voluptatibus, voluptatum, odio quas sequi perspiciatis cumque tempore laborum itaque, alias maxime nihil ex enim quisquam inventore culpa delectus nostrum. Repellendus molestias nobis cum voluptatum 
            maxime nulla autem sunt nesciunt quasi, maiores qui ex mollitia rerum iure reprehenderit assumenda, iste 
            sit nihil accusamus quas repellat ipsam et tenetur ad! Reiciendis distinctio laudantium, qui earum a, 
            dicta tempora suscipit, repellendus veritatis molestias doloribus ea ducimus asperiores ipsum. Nisi eius 
            ab iure similique veniam aspernatur illum cum odit voluptate unde, enim nostrum consequuntur quas repellat 
            dolor quasi, harum numquam. Voluptatem accusantium nesciunt earum laborum eos adipisci maxime ut totam 
            dolorem aliquam ipsam necessitatibus cupiditate iste eaque, reiciendis quas voluptatum harum consectetur 
            alias mollitia, sit? Autem maxime, quam, eius excepturi itaque temporibus eaque consequuntur enim facilis. 
            Optio eligendi corporis tempore. Ratione, atque, nesciunt. Aperiam harum beatae quo incidunt molestias, 
            modi. Ipsa vel adipisci nam, sit eligendi atque eveniet repellat. Qui eaque pariatur alias eos voluptatum esse, magni saepe dicta facilis id sapiente voluptate, doloribus odit suscipit, asperiores nemo! Nemo illum omnis, dignissimos suscipit.</span>
        </div>
        <h1 class="row-ttl">Latest Courses</h1>
        <div class="row-ltr">
            <div class="cov-pic"><img src="./images/g4.jpg" alt=""></div>
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora reprehenderit dicta tenetur saepe tempore, voluptate qui consequuntur est natus eaque, dolores eius, voluptatem at nobis porro possimus  ullam magni non! Eaque cumque eum quidem harum voluptatum unde maxime officiis et illum labore earum sed 
            vitae voluptatem, eveniet repellat corporis expedita, tenetur nesciunt ipsa ut reiciendis necessitatibus 
            eius neque sit. Minus deserunt magni ipsum nostrum, nemo iure! Esse quaerat, sed est enim iste iure omnis 
            similique. Sunt unde eius id repudiandae nesciunt commodi recusandae. Provident voluptatibus cupiditate 
            officia recusandae sed officiis aspernatur quos culpa delectus quisquam ex inventore, molestias nostrum. 
            Quis facere ipsam harum asperiores consequatur voluptatum doloribus nisi eveniet quisquam cum dolor 
            quaerat repellat dignissimos dicta dolore, corrupti, quibusdam. Sunt cum possimus quisquam incidunt beatae 
            doloribus quae sint animi similique nam a, quo ab facere dolore in nobis porro ex laudantium expedita 
            pariatur soluta tempore qui placeat ipsa. Architecto cupiditate suscipit dicta neque, aut? Culpa, qui 
            praesentium, voluptatem minima in sunt ipsum deserunt pariatur cum laborum, totam nam repellat rerum 
            tempora accusantium maxime laboriosam? Totam harum sit blanditiis, ratione dignissimos veniam numquam 
            earum placeat ducimus. Quaerat tenetur aut animi saepe maiores, ullam culpa praesentium quae? Provident 
            saepe quam ea deleniti ducimus accusamus aperiam architecto rem laudantium, nemo similique quisquam sapiente earum cupiditate corrupti recusandae officia iure magnam nulla vero esse nam. Repellat error nostrum laborum! Totam voluptatem eos dolores explicabo!</span>
        </div>
        <h1 class="row-ttl">Our Placement Records</h1>
        <div class="row-ltr">
            <div class="cov-pic"><img src="./images/g5.jpg" alt=""></div>
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus natus facere sit veritatis, beatae dolorem, iure repudiandae iste soluta rerum illo. Numquam amet praesentium, pariatur ut deleniti 
            omnis accusamus corporis excepturi itaque, quis cumque reprehenderit tenetur eligendi nulla quidem vero minus nemo illum veniam fugit ratione at! Ipsa architecto laboriosam eaque voluptate unde dolorum eius! Eligendi totam fugit eius quod esse, aperiam harum neque cum, optio, atque asperiores rerum. Tenetur 
            dolore, cumque at adipisci et sequi non temporibus perferendis deleniti pariatur obcaecati, unde nostrum atque ratione dicta corrupti reiciendis in velit quam. Inventore sed, a rerum modi! Magni cumque itaque, sed eos, omnis corporis quod esse ab adipisci iure odio voluptatum, beatae natus dolore tempora maxime dolores! Magnam dolorem nobis magni doloremque nostrum, distinctio, quod nulla corrupti perspiciatis eius quas impedit, sint itaque, dolore. In dolore rerum deserunt adipisci, explicabo quae unde, consectetur vitae esse et eum sit, incidunt asperiores qui veniam nihil. Qui, consectetur facere voluptatem reiciendis laudantium magnam, cumque, ducimus quaerat assumenda saepe aliquid harum accusamus eveniet voluptates quo sint? Harum iste, fugit quaerat, tenetur tempora id ullam quidem in. Ullam adipisci quis deleniti sunt enim expedita consectetur recusandae voluptatum non! Veniam praesentium tempora natus iste earum, non sint at, alias voluptas minima. Aspernatur debitis, culpa illum est, ipsa provident natus quis esse, obcaecati, tempore fugit. Quasi at, quis consequatur, itaque commodi distinctio totam ut quibusdam laborum ad alias nulla nihil aperiam earum dolorem. Id eligendi modi, dignissimos.</span>
        </div>
    </div>
    
    <p style="position:absolute;bottom:10px;right:10px;">Page is Under Construction...</p>
</body>
</html>
