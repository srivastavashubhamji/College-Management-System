<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>College Management System</title>
</head>
<body>
    <form action="handleDirInfo.php" method="post">
        <input type="text" placeholder="Enter Username" name="uname" id="uname">
        <input type="text" placeholder="Enter Password" name="pass" id="pass">
        <input type="text" placeholder="Re-Enter Password" name="re_pass" id="repass">
        <input type="submit" name="submit" onsubmit="return check()">
    </form>
    <a href="admin.php">Admin Panel</a>
    <script>
        function check()
        {
            return false;
        }
    </script>
    <script src="../../../javascript/main.js"></script>
    <script src="../../../javascript/sweetalertfile.js"></script>
</body>

</html>