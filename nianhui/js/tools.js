function $(id) {
    return document.getElementById(id);
}
function show(id) {
    $(id).style.display = "block";
}
function hide(id) {
    $(id).style.display = "none";
}

function scroll() {
    if (window.pageYOffset != null) {
        return {
            "top": window.pageYOffset,
            "left": window.pageXOffset
        };
    } else if (document.compatMode == "CSS1Compat") {
        //说明是标准模式 有DTD
        return {
            "top": document.documentElement.scrollTop,
            "left": document.documentElement.scrollLeft
        };
    } else {
        return {
            "top": document.body.scrollTop,
            "left": document.body.scrollLeft
        };
    }
}

