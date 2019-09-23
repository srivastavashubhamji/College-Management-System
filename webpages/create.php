<?php
//  Including the Logo and the Navigation bar : Header...
    include('./header.php');
?><div class="mainCreate">
        <form action="./create.php" method="post">
            <div class="submain">

                <input class="creinput" name="fname" type="text" placeholder="Your Name" required>
                <input type="text" class="creinput" name="email" placeholder="Email Id." required>
                <input class="creinput" name="phone" type="text" placeholder="Contact No." required>
                <input class="creinput" name="uname" type="text" placeholder="User name" required>
                <input class="creinput" name="pass" type="password" placeholder="Password" required>

                <div class="tab">
                    <div class="dobselects">
                        <p>Date Of Birth</p>
                        <!--    -------- Date --------- -->
                        <div class="dobContent">
                            <select name="day" id="dayid" class="tabBs dob dd" title="day">
                                <option value="day">Day</option>
                                <script type="text/javascript">
                                    var i;
                                    for (i = 1; i <= 31; i++)
                                        document.write("<option value=" + i + ">"  +i+  "</option>");
                                </script>
                            </select>

                            <!--    -------- Month --------- -->
                            <select name="month" id="monthid" class="tabBs dob mm" title="month">
                                <option value="month">Month</option>
                                <script>
                                    var m = new Array("", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
                                    //            var i;
                                    for (i = 1; i <= m.length - 1; i++) {
                                        document.write("<option value=" + i + ">" + m[i] + "</option>");
                                    }

                                </script>
                            </select>

                            <!--    -------- Year --------- -->
                            <select name="year" id="yearid" class="tabBs dob yy" title="year">
                                <option value="year">Year</option>
                                <script type="text/javascript">
                                    var i;
                                    for (i = 2019; i >= 1980; i--)
                                        document.write("<option value=" + i + ">" + i + "</option>");

                                </script>
                            </select>
                        </div>
                    </div>
                    <div class="genderDiv">
                        <p>Gender</p>
                        <div class="genderContent">
                            <label for="idMale">Male </label><input type="radio" name="gender" value="male" id="idMale" class="clsMale">
                            <label for="idFemale">Female </label><input type="radio" name="gender" value="female" id="idFemale" class="clsFemale">
                        </div>
                    </div>
                </div>
                <input class="creinput cresubmit" type="submit" name="submit" onclick="return checkAll()" value="Register">
            </div>
        </form>
        <script>
            document.getElementsByTagName("body")[0].setAttribute("id","createAcc");
        </script>
    </div>

    <script>
        function checkAll()
        {           
            return true;
        }
    </script><?php
    
        if(isset($_POST['submit']))
        {
            include('dbconn.php');
            
            $fname = $_POST["fname"];
            $phone = $_POST["phone"];
            $email= $_POST["email"];
            $uname= $_POST["uname"];
            $pass= $_POST["pass"];
            $day= $_POST["day"];
            $month= $_POST["month"];
            $year= $_POST["year"];
            $gender= $_POST["gender"];
            
    // ----------- SQL Injection Protection ---------------//
            
    // 1)  create Template ...
            $sql = "SELECT * from `user_create` where `username`=? ";
            
    // 2)  Init... with 'Conn_Obj'
            $stmt = mysqli_stmt_init( $conn );
            
    // 3)  Prepare with  'Statement & SQL'
            if(! mysqli_stmt_prepare( $stmt,$sql ))
            {   
                ?>    
                    <html>
                        <body>
                            <script>
                                swal({
                                    title: "OOPs",
                                    text: "Something Went Wrong.",
                                    icon: "error"
                                });
                            </script>
                        </body>
                    </html>
                    <?php
                exit(1);
            }   // Checked If Not Prepared 
            else
            {                
                
            // 4)  Bind with ( Statement , "1stChar_Of_TypeOfParam", [ params,... ] )       
                if(mysqli_stmt_bind_param( $stmt, "s", $uname))
                    
            // 5)  Execute Statement
                    if(mysqli_stmt_execute( $stmt ))
                        
            // 6)  Take Result 
                        if($result = mysqli_stmt_get_result( $stmt ))
                
                            if( $fetchedRow = mysqli_fetch_assoc( $result ))
                            {
                            // Uname Already Exists
                                ?>
                                <html>
                                    <body>
                                        <script>
                                            swal({
                                                title: "OOPs",
                                                text: "Invalid Username.",
                                                icon: "warning"
                                            });
                                        </script>
                                    </body>
                                </html>
                                <?php
                                exit(1);
                }
                else
                {
                    $sql = 'INSERT INTO `user_create`( `name`, `phone`, `day`, `month`, `year`, `gender`, `email`, `username`, `password`) values("'.$fname.'","'.$phone.'","'.$day.'","'.$month.'","'.$year.'","'.$gender.'","'.$email.'","'.$uname.'","'.$pass.'" )';       

                    if( mysqli_query( $conn,$sql ))
                    {
                        // header('location:../index.php?accCreateStatus=true');
                            echo("<script>location.href='../index.php?userAccCreated=true';</script>");
/*                      send back to home page with confirmation msg
*/
                        exit(1);
                    }
                    else
                    {
                        echo '<html>
                                <body>
                                    <script>
                                        swal({
                                            title: "OOPs",
                                            text: "Something Went Wrong.Account Not Created Because <br>'.$gupt.'",
                                            icon: "error"
                                        });
                                    </script>
                                </body>
                            </html>';
                    }
                }
            }
        }
        ?>
<?php
//  Including the footer for the page : Footer ...
    include('footer.php');
?>