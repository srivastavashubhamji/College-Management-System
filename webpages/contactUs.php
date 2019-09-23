<?php
//  Including the Logo and the Navigation bar : Header...
    include('header.php');
?>

<!--     By Filling & Submit this form, User can tell its Query         -->
    <form action="./contactUsHandler.php" method="post" onsubmit="return check()" name="contForm">
        <div class="mainContact">
            <div class="contHead">Contact Us</div>
            <div class="memContact">
                <input type="text" id="contName" placeholder="Full Name*" name="contName">
                <input type="text" id="contEml" placeholder="Email Id*" name="contEmail">
                <textarea name="contMsg" id="contMsg" cols="30" rows="10" class="txtarea"  
                 placeholder="Enter Your Message*" title="Enter Atleast 20 Characters"></textarea>
                <input type="submit" class="contSub" name="submit">
            </div>
        </div>
    </form>
    <script>document.getElementsByTagName("body")[0].setAttribute("class", "media");
    </script>
<!--     ================ PHP section =================-->    

<?php
    include('footer.php');
    if( isset($_GET['msgSent']) )
    {
        echo '<body><script>
                  (function(){
                        swal({
                            title: "Great !!!",
                            text: "Your message was sent Successfully.",
                            icon: "success"
                        });
                  })();
              </script></body>';
    }else if( isset($_GET['msgCouldntSent']) ){
        echo '<body><script>
                 (function(){swal({
                     title: "OOPs",
                     text: "Something went Wrong, Message could not Sent !",
                     icon: "error"
                 });})();
             </script></body>';
    }    
?>
