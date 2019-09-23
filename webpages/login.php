<?php
//  Including the Logo and the Navigation bar : Header...
    include('header.php');
?>
<!-- Login Form -->
<form action="./validateLogin.php" method="post">
    <div class="normalUser mainLogin">
        <h3 class="linHead">Login</h3>
        <div class="Login">
            <input type="text" name="username" placeholder="Enter Username" class="input" required>                
            <input type="Password" name="password" placeholder="Enter Password" class="input" id="loginPass" required>

            <span class="logspa"><i class="seeLpass far fa-eye-slash" id="showLogPass" onclick="showPasss(1)"></i></span>

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
</form><?php
//  Including the footer for the page : Footer ...
    include('footer.php');
    if( isset($_GET['valueRet']) )
    {
        echo '<script>
                  (function(){
                        swal({
                            title: "OOPs",
                            text: "Login Failed, Incorrect Username or Password !",
                            icon: "warning"
                        });
                  })();
              </script>';
    }
?>
