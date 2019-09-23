<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <link rel="icon" href="../../images/schoolTitle.png" type="image=x-icon">
        <link rel="stylesheet" href="../css/all.css">
        <link rel="stylesheet" href="../../css/style.css">    
</head>
<body>
-->
    <?php
        include('./header.php');
    ?>
    <form action="./results.php" method="post" id="resFormId" name="myform">
        <div class="mainResult">
            <input type="text" name="rollno" class="inputRno" id="resultRno" placeholder="Enter Roll No. ">
            <div class="selects">
                <select name="selectCourse" id="ResCourse">
                    <script>
                        var arrCourse = new Array("(Select your Course)", "BCA", "MCA", "BBA", "MBA", "B.COM", "M.COM", "DCA", "PGDCA");
                    for (var i = 0; i < arrCourse.length; i++) {
                        document.write("<option>" + arrCourse[i] + "</option>");
                    }
                    </script>
                </select>
                <select name="selectYear" id="ResYears" required>
                    <script>
                        var arrCourse = new Array("(Select Year)", "1st Year", "2nd Year", "3rd Year");
            var calculated = arrCourse.length;
            
            for(var i = 0; i < 1; i++) 
            {
                var strcls = " id=dura"+ Number(i+1);
                document.write("<option "+ strcls +">" + arrCourse[i] + "</option>");
            }
/*  ID Of <option> : year -> dura1  ,1st year -> dura2  ,2nd year -> dura3  ,3rd year -> dura4  */ 
            document.getElementById("ResCourse").addEventListener("change",function(){
                (function(){
                    removeAll();
                    var select = document.getElementById("ResCourse");
                    var years = document.getElementById("ResYears");
                    var addTill = 0;                    
//  "(Select a Course)", "BCA", "MCA", "BBA", "MBA", "B.COM", "M.COM", "DCA","PGDCA"
//  "(Select a Year)"  ,   3     3      3      2       3        2       1      2                   
//    arrCourse    : year ,1st year ,2nd year  ,3rd year //
//                      0     1         2           3
                    if((select.value == "MBA") || (select.value == "M.COM") || (select.value== "PGDCA")) 
                    {
                        addTill = 3;
                        for(var i=0; i<addTill; i++)
                        {
                            var opt = document.createElement("option");
                            opt.text = arrCourse[i];
                            years.add(opt);
                        }
                    }
                    else if((select.value == "DCA"))
                    {   
                        addTill = 2;
                        for(var i=0; i<addTill; i++)
                        {
                            var opt = document.createElement("option");
                            opt.text = arrCourse[i];
                            years.add(opt);
                        }                    }
                    else
                    {   
                        addTill = 4;
                        for(var i=0; i<addTill; i++)
                        {
                            var opt = document.createElement("option");
                            opt.text = arrCourse[i];
                            years.add(opt);
                        }                    
                    }
                })();
            });
            function removeAll()
            {
                var select = document.getElementById("ResYears");
                while(select.length != 0)
                {
                    select.remove(select.length-1);
                }
            }
        </script>
                </select>
            </div>
            <input type="button" name="resultSubmit" value="Submit" class="resSubmit" onclick="checkme()">
        </div>
    </form>
    <script>
        document.getElementsByTagName("body")[0].setAttribute("class", "media");
    </script>

    <?php
        include("./dbconn.php");
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            ?>
               <h2 style="margin: -50px 0px 0px 0px;padding: 0px 0px 100px;"> Result will Come Soon ...
                  <?php
                        //echo $_SERVER['REQUEST_METHOD']." AND ROLL NO = ".$_POST['rollno']." ...Course = ".$_POST['selectCourse']." ...Year".$_POST['selectYear'];
                   ?>
                </h2>
            <?php
        }
        include('./footer.php');
    ?>