<?php
require_once("../functions.php");
if(! (isset($_SESSION['adminOfSchool'])) )
    header("location: ../login.php");
if(isset($_POST["submitToShow"]))
{   
    include('../../dbconn.php');
    $sql = 'Select name as "Manager",email as "Email Id",ph1 as "Ph. No. 1",ph2 as "Ph. No. 2" from schoolmanagers';
    $result = mysqli_query( $conn, $sql );
    $numRows = mysqli_num_rows( $result );
    
    if( $numRows > 0 )
    {
        $allDataWithTable = getDataWithTable( $result );
        include './header.php';
        echo '<p class="tblInfo">All <b>'.$numRows.' Managers </b>Details</p>';
        echo $allDataWithTable;
    }
    else 
    {
        include './header.php';
        echo "<h2>No Data Found<br><br></h2> ";
    }
}?>
</body>
<script src="../../../javascript/main.js"></script>
<script src="../../../javascript/sweetalertfile.js"></script>
