<?php
    $conn = mysqli_connect("localhost","root","","newcms");
    $errMsg = '<body>
                <script src="../javascript/sweetalertfile.js"></script>
                <script>
                    swal({
                        title: "OOPs !!!",
                        text: "Server Link Failed, Retry !",
                        icon: "warning"
                    });
                </script>
            </body>';
    if( !($conn == true) )
    {
        die($errMsg);
    }
?>