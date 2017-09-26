window.onload = function() {
    //  倒计时 
    var tday = document.getElementById("tday");
    var thour = document.getElementById("thour");
    var tmin = document.getElementById("tmin");
    var tss = document.getElementById("tss");
    setInterval(fn, 1000);
    var mm = true;
    $(".icon_hea").on("click", function() {

        if (mm) {
            mm = false;
            $(".m_slide").slideDown()
        } else {
            mm = true;
            $(".m_slide").slideUp()
        }


    })


}


function fn() {
    var nowTime = new Date();
    var newTime = new Date("2017/04/11 09:00:00");
    //console.log(nowTime);
    var ms = newTime.getTime() - nowTime.getTime();
    var ss = parseInt(ms / 1000);

    var s = ss % 60;
    var m = parseInt(ss / 60 % 60);
    var h = parseInt(ss / 60 / 60 % 24);
    var d = parseInt(ss / 60 / 60 / 24);

    if(d <= 0 && h<=0 && m <=0 && s < 10) {
        return false;
    }
    //5.在页面上显示出来。
    tday.innerHTML = d >= 10 ? d : "0" + d;
    thour.innerHTML = h >= 10 ? h : "0" + h;
    tmin.innerHTML = m >= 10 ? m : "0" + m;
    tss.innerHTML = s >= 10 ? s : "0" + s;

}