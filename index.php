<?php
    if( session_status() == PHP_SESSION_NONE )
    {
        session_start();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Collage Management System</title>

        <link rel="icon" href="./images/schoolTitle.png" type="image=x-icon">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="./css/style.css" type="text/css">
        <link rel="stylesheet" href="./css/all.css" type="text/css">
    </head>

    <body>
        <!-- -------------------- Header Start  -------------------- -->
        <div class="header">
            <div class="leftHead">
                <a href="index.php" class="aimage"><img src="images/newcms1.PNG?23" alt="CMS Image" id="topLogo">
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
        <!-- -------------------- Navigation Bar Start  -------------------- -->

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
                    <a href="#showing" class="btn"><i class="fas fa-book"></i> Courses <i class="fas fa-caret-down" onclick="over('0')"></i></a>
                    <div class="dropcontent">
                        <a href="webpages/course.php#ug-course">UG Courses</a>
                        <a href="webpages/course.php#pg-course">PG Courses</a>
                        <a href="webpages/course.php#dp-course">Diploma Courses</a>
                    </div>
                </li>
                <li class="drop">
                    <a href="#showing" class="btn"><i class="fas fa-poll"></i>   Results <i class="fas fa-caret-down" onclick="over('1')"></i></a>
                    <div class="dropcontent">
                        <a href="./webpages/results.php">UG Results</a>
                        <a href="./webpages/results.php">PG Results</a>
                        <a href="./webpages/results.php">Diploma Results</a>
                    </div>
                </li>
                <li class="drop">
                    <a href="#showing" class="btn"><i class="fas fa-coins"></i> Media <i class="fas fa-caret-down" onclick="over('2')"></i></a>
                    <div class="dropcontent">
                        <a href="./webpages/media.php" class="btn">Gallary</a>
                        <a href="./webpages/media.php" class="btn">Latest News</a>
                    </div>
                </li>
                <li class="drop">
                    <a href="#showing" class="btn"><i class="fab fa-app-store-ios"></i> About Us <i class="fas fa-caret-down" onclick="over('3')"></i></a>
                    <div class="dropcontent">
                        <a href="./webpages/about.php">Collage Prev Years</a>
                        <a href="./webpages/about.php">Director</a>
                    </div>
                </li>
                <li class="drop">
                    <a href="#showing" class="btn"><i class="fas fa-phone"></i> Contact Us <i class="fas fa-caret-down" onclick="over('4')"></i></a>
                    <div class="dropcontent">
                        <a href="./webpages/contactUs.php">Phone</a>
                        <a href="./webpages/contactUs.php">Email</a>
                    </div>
                </li>
                <li class="drop loginLi">

                    <?php 
                    if( !isset($_SESSION['userid']) )  // Not Logged In ...
                    {
                        echo '<a href="./webpages/login.php" class="btn"><i class="fas fa-user"></i> <span style="display:inline-block;">Login</span></a>';
                    }
                    else 
                    {
                        echo '<a href="./webpages/logout.php" class="btn"><i class="fas fa-user"></i> <span>Logout</span></a>';
                    }
                ?>
                </li>
            </ul>
        </div>

        <!-- -------------------- Slider Start  ---------------------->
        <div class="row">
            <div class="slider">
                <img src="./images/1.jpg" alt="The Glorious Campus Pic" class="sliderImg" style="width: 100%;">
            </div>
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

        <!------------------------ Footer Start ------------------------ -->
        <!--- <br>
   <button onclick="babu()">babu click</button>
    <script>
        function babu(){
            console.log("babu reach");
            swal({            
                title: "Demo run",
                text: "Your Account is Created.",
                icon: "success"
            });
            console.log("babu ended");
        }
    </script>
   <br> -     demo sweet Alert Usage  -->
        <div class="footMain" style="margin: 0px;">
            <div class="ftr social">
                <p>Social Media</p>
                <div class="socialCont">

                    <img src="./images/logo-facebook.png" alt="Facebook">
                    <img src="./images/logo-instagram.png" alt="Instagram">
                    <img src="./images/logo-linkedin.png" alt="Linked In">
                    <img src="./images/logo-whatsapp.png" alt="WhatsApp">
                    <img src="./images/logo-skype.png" alt="Skype">
                    <img src="./images/logo-viber.png" alt="Viber">
                </div>
            </div>

            <div class="ftr place">
                <p>Placements</p>
                <div class="placeCont">
                    <img src="./images/campus-badoo.png" alt="Byju's">
                    <a href="#">Byju's Inc. <span class="ftrPlcTitles">Pvt. Lmt.</span></a>
                    <img src="./images/campus-xing.png" alt="Xylo">
                    <a href="#">Xylo Inc.<span class="ftrPlcTitles">Pvt. Lmt.</span></a>
                    <img src="./images/campus-shubh.png" alt="Shubh Company">
                    <a href="#">Shubh Pvt.<span class="ftrPlcTitles"> Lmt.</span></a>
                    <img src="./images/campus-deviantart.png" alt="Devilian">
                    <a href="#">Amazon <span class="ftrPlcTitles">Pvt. Lmt.</span></a>
                </div>
            </div>
            <!--
        </div>
        <div class="ftrcols">            
-->
            <div class="ftr links">
                <p class="linksP">Quick Links</p>
                <div class="linksCont">
                    <div class="linksCols">
                        <p><a href="#"><i class="fas fa-home"> </i> Home</a></p>
                        <p><a href="#"><i class="fas fa-book-reader"></i> Courses</a></p>
                        <p><a href="#"><i class="fas fa-pen"></i> News</a></p>
                        <p><a href="#"><i class="fas fa-book"></i> Results</a></p>
                        <p><a href="#"><i class="fas fa-camera"></i> Gallary</a></p>
                    </div>
                    <div class="linksCols">
                        <p><a href="#"><i class="fas fa-newspaper"></i> Latest News</a></p>
                        <p><a href="#"><i class="fas fa-clock"></i> Media</a></p>
                        <p><a href="#"><i class="fas fa-copy"></i> Toppers</a></p>
                        <p><a href="#"><i class="fas fa-tv"></i> Media</a></p>
                        <p><a href="#"><i class="fas fa-user"></i> Login</a></p>
                    </div>
                </div>
            </div>
            <div class="ftr contus">
                <p>Contact Us</p>
                <div class="contusCont">
                    <div>
                        <span><i class="fas fa-phone-volume"></i> <a href="#"> +91-860 172 5056</a></span>
                    </div>
                    <div>
                        <span><i class="fas fa-envelope"></i>  <a href="#">shubhsrivastava271999@gmail.com</a></span>
                    </div>
                    <div>
                        <span><i class="fas fa-route"></i>  <a href="#">Main Branch :Basharatpur, Gorakhpur</a></span>
                    </div>
                    <div id="thisFtr"><i class="fas fa-map-marker-alt"></i>
                        <span><a href="#">Head Office: Ram Janki Nagar,Ram Preet Chowk, GKP, UP, India</a></span>
                    </div>
                </div>
            </div>
        </div>
        <script src="javascript/sweetalertfile.js"></script>
        <?php
        if( isset($_GET['userAccCreated']) )
        {
            //  Telling the visitor that his/her Account is created Successfully...
            echo '<script>
                      (function(){
                            swal({
                                title: "Congratulations",
                                text: "Your Account is Created.",
                                icon: "success"
                            });
                      })();
                  </script>';
        }
?>
            <script src="javascript/main.js"></script>
    </body>

    </html>