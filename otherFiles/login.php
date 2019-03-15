<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="loginBody">
    <form action="login.php" method="post">
        <div class="mainLogin">
            <h3 class="linHead">Login</h3>
            <div class="Login">
                <input type="text" name="username" placeholder="Enter Username" class="loginInput">
                <input type="Password" name="password" placeholder="Enter Password" class="loginInput">
                <input type="submit" value="Submit" class="input btn">
                <div class="remMe">
                    <input type="checkbox" class="rem" id="rem"> <label for="rem" class="loginLabel">Remember Me</label>
                </div>
                <div class="loginFoot">
                    <a href="#forgetPass" class="loginA">Forget Password ?</a>
                    <a href="./createNew.html" class="loginB">Create New A/C</a>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
<!--- php coding start --->
<?php



?>
