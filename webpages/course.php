<?php    
/*    if ( !isset($_SESSION['userid']) )
//    {
//        header("location:create.php?show=createAccFirst");
//        exit(1);
    }
*/
//  Including the Logo and the Navigation bar : Header...
    include('header.php');
//  Content ...
    {
        echo '<div class="mainCourse">
            <div class="courseTitle">
                <p class="name">
                    <span class="topperTitle">Course <i class="fas fa-copy"></i>
                    </span>
                    <span class="lowerTitle"><span>C</span>ontents</span>
                </p>
            </div>

            <div class="allCourses">
            
                <div class="courseCatog">
                    <h1 id=#ug-course>Under Graduation Courses </h1><hr>
                </div>
                
                <div class="eachCourse">
                    <div class="ecHead">
                        <p class="ecName">BBA</p>
                        <p class="ecDesc">(Bachelor of Business Administration)</p>
                    </div>
                    <!--             class = "each course Content" -->
                    <div class="ecContent">

                        <div class="ecCriteria">
                            <span class="attr">Duration :<span class="value"> 3 Years</span></span>
                            <span class="attr">Eligibility :<span class="value"> 10+2</span></span>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>First Year</span>
                                <li>Principles of Management & Organisation Behaviour</li>
                                <li>Financial Accounting</li>
                                <li>Principles of Economics and Business Law</li>
                                <li>Computer Fundamental</li>
                                <li>Business Statistics & Financial Management</li>
                                <li>Business Communication & Principles of Marketing</li>
                            </ul>
                        </div>

                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>Second Year</span>
                                <li>Industrial Relations & industrial Psychology</li>
                                <li>Banking Law and Company Law</li>
                                <li>Cost and Management Accounting</li>
                                <li>Human Resource Management</li>
                                <li>Business Economics and Marketing Research</li>
                                <li>Indian Economics & Production & Material Management</li>
                            </ul>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>Third Year</span>
                                <li>Quantitive Techniques & Business Management</li>
                                <li>Internation Trade and Sales</li>
                                <li>Introduction to Socio Economic.</li>
                                <li>Income Tax law & Practice</li>
                                <li>Consumer Behaviour and Advertising Management</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="eachCourse">
                    <div class="ecHead">
                        <p class="ecName">BCA</p>
                        <p class="ecDesc">(Bachelor of Computer Application)</p>
                    </div>
                    <!--             class = "each course Content" -->
                    <div class="ecContent">

                        <div class="ecCriteria">
                            <!--               for   "Duration" and "Eligibility"    -->
                            <span class="attr">Duration :<span class="value"> 3 Years</span></span>
                            <span class="attr">Eligibility :<span class="value"> 10+2</span></span>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>First Year</span>
                                <li>Compute Fundamentals & Programming in C Language</li>
                                <li>Priciples of Managementa & Business Communication</li>
                                <li>Database Management System</li>
                                <li>Mathematics</li>
                                <li>Discrete Mathematics</li>
                                <li>Computer Organisation</li>
                                <li>Data Structure Theough C</li>
                            </ul>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>Second Year</span>
                                <li>Supply Chain Management</li>
                                <li>Project management</li>
                                <li>Consumer Behaviour & Advertisment</li>
                                <li> Corporate Governance Values</li>
                                <li>Strategic Management $ Development</li>
                                <li>Specialization 1 Subject 1</li>
                                <li>Specialization 1 Subject 2</li>
                                <li>Specialization 2 Subject 1</li>
                                <li>Specialization 2 Subject 2</li>
                            </ul>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>Third Year</span>
                                <li>Internet Technology</li>
                                <li>Client Server</li>
                                <li>Socio Economic</li>
                                <li>Programming with JAVA</li>
                                <li>Project </li>
                                <li>Assignment 1</li>
                                <li>Assignment 2</li>
                                <li>Specialization 1 Subject 1</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="courseCatog">
                    <h1 id=#pg-course>Post Graduation Courses </h1><hr>
                </div>

                <div class="eachCourse">
                    <div class="ecHead">
                        <p class="ecName">MBA</p>
                        <p class="ecDesc">(Master of Business Administration)</p>
                    </div>
                    <!--             class = "each course Content" -->
                    <div class="ecContent">

                        <div class="ecCriteria">
                            <!--               for   "Duration" and "Eligibility"    -->
                            <span class="attr">Duration :<span class="value"> 2 Years</span></span>
                            <span class="attr">Eligibility :<span class="value"> Graduation</span></span>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>First Year</span>
                                <li>Principles Of Management & Human Resources Management</li>
                                <li>Principles of Economics & Financial Management</li>
                                <li>Marketing Management</li>
                                <li>Accounting & Financial Analysis & Business Law</li>
                                <li>Operations Research & Research Methodology</li>
                                <li>Organisation Behaviour</li>
                                <li>Business Communication & Computer Fundamental</li>
                                <li>Projection & Operation Management & Business Statistics.</li>
                            </ul>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>Second Year</span>
                                <li>Supply Chain Management</li>
                                <li>Project management</li>
                                <li>Consumer Behaviour & Advertisment</li>
                                <li> Corporate Governance Values</li>
                                <li>Strategic Management $ Development</li>
                                <li>Specialization 1 Subject 1</li>
                                <li>Specialization 1 Subject 2</li>
                                <li>Specialization 2 Subject 1</li>
                                <li>Specialization 2 Subject 2</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="eachCourse">
                    <div class="ecHead">
                        <p class="ecName">MCA</p>
                        <p class="ecDesc">(Master of Computer Application)</p>
                    </div>
                    <!--             class = "each course Content" -->
                    <div class="ecContent">

                        <div class="ecCriteria">
                            <!--               for   "Duration" and "Eligibility"    -->
                            <span class="attr">Duration :<span class="value"> 3 Years</span></span>
                            <span class="attr">Eligibility :<span class="value"> Graduation</span></span>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>First Year</span>
                                <li>Neural network</li>
                                <li>Priciples of Managementa & Business Communication</li>
                                <li>OOAD</li>
                                <li>Mathematics</li>
                                <li>Analysis Design </li>
                                <li>Computer Organisation</li>
                                <li>Operating System with Unix</li>
                            </ul>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>Second Year</span>
                                <li>Graphics Programming</li>
                                <li>Project management</li>
                                <li>Consumer Behaviour & Advertisment</li>
                                <li>Wireless Technology</li>
                                <li>Software Engineering</li>
                                <li>Specialization 2 Subject 2</li>
                            </ul>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>Third Year</span>
                                <li>Internet Technology</li>
                                <li>Client Server</li>
                                <li>Socio Economic</li>
                                <li>Programming with JAVA</li>
                                <li>Project </li>
                                <li>Assignment 1</li>
                                <li>Assignment 2</li>
                                <li>Specialization 1 Subject 1</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="courseCatog">
                    <h1 id=#dp-course>Diploma Courses </h1><hr>
                </div>
                <div class="eachCourse">
                    <div class="ecHead">
                        <p class="ecName">XYZ</p>
                        <p class="ecDesc">(lorem ipsum dolor)</p>
                    </div>
                    <!--             class = "each course Content" -->
                    <div class="ecContent">

                        <div class="ecCriteria">
                            <!--               for   "Duration" and "Eligibility"    -->
                            <span class="attr">Duration :<span class="value"> 3 Years</span></span>
                            <span class="attr">Eligibility :<span class="value"> 10+2</span></span>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>First Year</span>
                                <li>lorem ipsum dolor network</li>
                                <li>lorem ipsum dolor of Managementa & Business Communication</li>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor Design </li>
                                <li>lorem ipsum dolor Organisation</li>
                                <li>lorem ipsum dolor System with Unix</li>
                            </ul>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>Second Year</span>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor & Advertisment</li>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor Subject 2</li>
                            </ul>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>Third Year</span>
                                <li>lorem ipsum dolor Technology</li>
                                <li>lorem ipsum dolor Server</li>
                                <li>lorem ipsum dolor Economic</li>
                                <li>lorem ipsum dolor with JAVA</li>
                                <li>lorem ipsum dolor </li>
                                <li>lorem ipsum dolor 1</li>
                                <li>lorem ipsum dolor 2</li>
                                <li>lorem ipsum dolor 1 Subject 1</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="eachCourse">
                    <div class="ecHead">
                        <p class="ecName">MCA</p>
                        <p class="ecDesc">(Master of Computer Application)</p>
                    </div>
                    <!--             class = "each course Content" -->
                    <div class="ecContent">

                        <div class="ecCriteria">
                            <!--               for   "Duration" and "Eligibility"    -->
                            <span class="attr">Duration :<span class="value"> 3 Years</span></span>
                            <span class="attr">Eligibility :<span class="value"> 10+2</span></span>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>First Year</span>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor Managementa & Business Communication</li>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor </li>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor with Unix</li>
                            </ul>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>Second Year</span>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor & Advertisment</li>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor</li>
                                <li>lorem ipsum dolor Subject 2</li>
                            </ul>
                        </div>
                        <div class="yearsEC">
                            <ul class="yearName">
                                <span>Third Year</span>
                                <li>lorem ipsum Technology</li>
                                <li>lorem ipsum Server</li>
                                <li>lorem ipsum Economic</li>
                                <li>lorem ipsum with JAVA</li>
                                <li>lorem ipsum </li>
                                <li>lorem ipsum 1</li>
                                <li>lorem ipsum 2</li>
                                <li>lorem ipsum 1 Subject 1</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            
        </div>';
    }
//  Including the footer : footer...
    include('footer.php');
?>