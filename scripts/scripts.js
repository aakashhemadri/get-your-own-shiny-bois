function on(val) {
    var x = parseInt(val);
    var i = 1;
    while (i < 8) {
        if (i != x) {
            off(i);
        } else {
            switch (x) {
                case 1:
                    document.getElementById("overlay1").style.display = "block";
                    break;
                case 2:
                    document.getElementById("overlay2").style.display = "block";
                    break;
                case 3:
                    document.getElementById("overlay3").style.display = "block";
                    break;
                case 4:
                    document.getElementById("overlay4").style.display = "block";
                    break;
                case 5:
                    document.getElementById("overlay5").style.display = "block";
                    break;
                case 6:
                    document.getElementById("overlay6").style.display = "block";
                    break;
                case 7:
                    document.getElementById("overlay7").style.display = "block";
                    break;
            }
        }
        i++;
    }
}

function off(val) {
    var x = parseInt(val);
    switch (x) {
        case 1:
            document.getElementById("overlay1").style.display = "none";
            break;
        case 2:
            document.getElementById("overlay2").style.display = "none";
            break;
        case 3:
            document.getElementById("overlay3").style.display = "none";
            break;
        case 4:
            document.getElementById("overlay4").style.display = "none";
            break;
        case 5:
            document.getElementById("overlay5").style.display = "none";
            break;
        case 6:
            document.getElementById("overlay6").style.display = "none";
            break;
        case 7:
            document.getElementById("overlay7").style.display = "none";
            break;
    }
}