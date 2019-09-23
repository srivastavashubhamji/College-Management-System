<?php
    include('dbconn.php');
//    echo 'reachedhere';    
    if(isset($_POST['submit']))
    {
//        echo 'taking data';
        $name= $_POST["contName"];
        $email= $_POST["contEmail"];
        $msg= $_POST["contMsg"];

        $sql = "INSERT INTO `contactus`(`name`, `email`, `message`) VALUES ('$name','$email','$msg')";
        
        $run = mysqli_query($conn,$sql);
        
        if($run){
            header("location: ./contactUs.php?msgSent=true");
            exit();
        }
        else{
            header("location: ./contactUs.php?msgCouldntSent=true");
            exit();
        }        
    }
    else{
            header("location: ./contactUs.php");
            exit();
    }
?>