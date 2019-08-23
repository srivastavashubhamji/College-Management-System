<!DOCTYPE html>
<html lang="en">
<!-- ---------------- HEAD SECTION START ----------------- -->
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../javascript/main.js"></script>
    <script src="../javascript/sweetalertfile.js"></script>
</head>
<!-- --------------- BODY SECTION START ------------------ -->
<body>
    <form action="./login.php" method="post">       <!-- FORM  -->
        <div class="mainLogin">
            <h3 class="linHead">Login</h3>
            <a href="../index.html"><i class="crecross">&times;</i></a>            
            <div class="Login">
                <input type="text" name="username" placeholder="Enter Username" class="input" required>                
                <input type="Password" name="password" placeholder="Enter Password" class="input" id="loginPass" required>
                
                <span class="logspa"><i class="seeLpass far fa-eye-slash" id="showLogPass" onclick="showPasss('1')"></i></span>
                
                <input type="submit" name="submit" value="Submit" class="input btn">
                <div class="remMe">
                    <input type="checkbox" class="rem" id="rem"> <label for="rem" class="loginLabel">Remember Me</label>
                </div>

                <div class="loginFoot">
                    <a href="#forgetPass" class="loginA">Forget Password ?</a>
                    <a href="../webpages/create.php" class="loginB">Create New A/C</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
<!-- -------------- PHP SECTION START ---------------->
<?php
    include("./dbconn.php");    // DATABASE CONNECTED... //
    if(isset($_POST["submit"])) // SUBMIT CLICKED...     //
    {
        $uname = $_POST["username"];
        $pass = $_POST["password"];
        $sql="SELECT * FROM `user_create` WHERE `username`='$uname'";
        $run = mysqli_query($conn,$sql);    // FETCHING THE RECORD WHICH MAY CONTAIN THE VALUES SAME AS UNAME //
        $result = mysqli_num_rows($run);    // COUNTING THE FETHCED RECORD ( IF USERNAMEWAS MATCHED )//           
        if($result < 1)                     // THAT MEANS UNAME NOT FOUND IN DATABASE
        {   
            ?>           
            <script>                
                swal({
                    title: "OOPs",
                    text: "Username or Password Not found",
                    icon: "error"
                });
            </script>
            <?php
        }
        else
        {
            header('location:../index.html');
            ?>
            <script>
                swal({
                    title: "Congratulations.",
                    text: "Login Successfully",
                    icon: "success"
                });
            </script>            
            <?php
        }
    }
?>
