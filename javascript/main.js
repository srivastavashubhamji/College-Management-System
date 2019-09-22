    // ------- This   displayMedia()  function will display and hide the Share Media (Whatsapp , facebook...) when Three Dots are Clicked //

    function displayMedia() {
        var x = document.getElementById("rightHeadId");
        if (x.className === "rightHead") {
            x.className += " responsive";
        } else {
            x.className = "rightHead";
        }

        var dots = document.getElementById("dots");
        if (dots.className === "fas fa-ellipsis-v dottedi") {
            dots.className += " responsive";

        } else {
            dots.className = "fas fa-ellipsis-v dottedi";
        }

    }
    // ------- This  effectNavBars(status)  function will display and hide the Navigation Bar at Tablet size when Three bars clicked //
    function effectNavBars(status) {
        switch (status) {
            case '1':
                {

                    var navbar = document.getElementById("nav");
                    navbar.className += " responsive";
                    var bars = document.getElementById("Abars");
                    bars.style.className += " responsive";
                    break;
                }
            case '-1':
                {
                    var navbar = document.getElementById("nav");
                    navbar.className = "nav";
                    var bars = document.getElementById("Abars");
                    bars.style.className = "Bars";

                    break;
                }
            default:
                {

                }
        }
    }

    // -------- There two Function   over() and out() will display and hide the drop contents of Navigation Bar' Drop Buttons //

    function over(num) {

        if (window.innerWidth <= 870) {
            out(num);
            var ctrls = document.getElementsByClassName("dropcontent");
            if (ctrls[num].style.display == "block") {
                ctrls[num].style.display = "none";
            } else {
                ctrls[num].style.display = "block";
            }
        }
    }

    function out(num) {
        var ctrls = document.getElementsByClassName("dropcontent");
        for (var i = 0; i < ctrls.length; i++) {
            if (!(i === Number(num)))
                ctrls[i].style.display = "none";
        }
    }


    window.onload = setAndStartSlider;
    window.onresize = setImageHeightWidth;

    function setAndStartSlider() {
        setImageHeightWidth();
        setInterval(playSlider, 3000);
    }

    function setImageHeightWidth() {
        var winH = Number(window.innerHeight);
        var winW = Number(window.innerWidth);

        var img = document.getElementsByClassName("sliderImg")[0];

        if (winW > 870) {
            img.height = (winH - (113 + 54)) + "";
            img.width = winW + "";
        } else // winW < 870
        {
            img.height = (winH - (113)) + "";
            img.width = (winW - 18) + "";
            //  here 113 = WIDTH of Logo,18=WIDTHofScroll Bar
        }
    }

    function playSlider() {
        var img = document.getElementsByClassName("sliderImg")[0];
        var oldSrc = img.src;

        var oldNum = oldSrc.substring((oldSrc.lastIndexOf('/') + 1), (oldSrc.lastIndexOf('.')));
        if (oldNum == 6) {
            oldNum = 0;
        } else { // No Problem. More Images are there. //
        }
        var newNum = Number(oldNum) + 1;
        var newSrc = oldSrc.substring(0, Number(oldSrc.lastIndexOf('/')) + 1) + newNum + ".jpg";
        img.src = newSrc;
    }

    // ----------------- create.php Validation Start ---------------//
    var currentTab = 0;
    window.onload = showTab(currentTab);

    function showTab(currentTab) {
        if (currentTab == 0) {
            document.getElementById("btnPrev").style.display = "none";
        } else {
            document.getElementById("btnPrev").style.display = "inline";
        }
        var allTabs = document.getElementById("tab0");
        allTabs.style.display = "block";
    }

    // ----------------- create.php Validation Ended -----------------------------//
    function showPasss(page) {
        if (page == "1") {
            var passField = document.getElementById("loginPass");
            var eye = document.getElementById("showLogPass");
            if (passField.type == "text") {
                passField.type = "password";
                eye.className = "seeLpass far fa-eye-slash";
            } else {
                passField.type = "text";
                eye.className = "seeLpass far fa-eye";
            }
        }
        if (page.indexOf("secret") >= 0) {
            if (page.lastIndexOf("1") >= 0) { // 1st input box - uname
                var unameField = document.getElementById("logUser");
                var eye = document.getElementById("showLogUser");
                //           console.log("secret unam1 =>"+eye.className+"<=");
                if (unameField.type == "password") {
                    unameField.type = "text";
                    eye.className = "seeLpass far fa-eye";
                } else {
                    unameField.type = "password";
                    eye.className = "seeLpass far fa-eye-slash";
                }
            } else { // 2nd input box - uname
                var passField = document.getElementById("loginPass");
                var eye = document.getElementById("showLogPass");
                //            console.log("secret upass =>"+eye.className+"<=");
                if (passField.type == "password") {
                    passField.type = "text";
                    eye.className = "seeLpass far fa-eye";
                } else {
                    passField.type = "password";
                    eye.className = "seeLpass far fa-eye-slash";
                }
            }
        } else {
            //      seeLpass far fa-eye-slash
            var passField = document.getElementById("createPass");
            if (passField.type == "text") {
                passField.type = "password";
                //            this.className = "seeLpass far fa-eye-slash";
            } else {
                passField.type = "text";
                //            this.className = "seeLpass far fa-eye";
            }
        }
    }
    // ------------ Managers.php ------------

    window.onload = showRoot;

    function showRoot() {
        document.getElementById("rootelem").style.display = "block";
    }

    function mgrUnmBlured() {
        var uname = document.getElementById("mgrUserId");
        var val = "_mgr_";
        var prevVal = uname.value;
        val = val + prevVal;
        uname.value = val;
    }

    function checkAddMgr() {
        var valName = document.getElementById("mgrName").value;
        var valUname = document.getElementById("mgrUserId").value;
        var valPass = document.getElementById("mgrPassId").value;
        var input = document.getElementById("mgrHidInp");
        //    var inner = "Username => \""+ valUname + "\" , "+"Password => \""+ valPass + "\"";
        var inner = "Manager's Name => " + valName + " , Username =>" + valUname + "<= ,And Password =>" + valPass + "<=";
        input.value = "";
        input.value = inner;
        input.select();
        var copied = document.execCommand('copy');
        return true;
    }


    /* ---- This function "checkme()" will invoked when : Result.php'll submitted ------
    Validating the form....
    */
    function checkme() {
        var rno = document.getElementById("resultRno");
        var courses = document.getElementById("ResCourse");
        var years = document.getElementById("ResYears");
        var noError = false;
        if ((rno.value != "")) {
            if (courses.value != "(Select a Course)") {
                if (years.value != "(Select Your Year)") {
                    var res = document.getElementById("resFormId").submit();
                    return true;
                }
            }
        }
        if (noError == false); {
            //  passing warning to display Alert using sweetalert...
            swal({
                title: "Warning !!!",
                text: "Form is Not Completely Filled",
                icon: "error"
            });
            return false;
        }
    }