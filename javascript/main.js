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
