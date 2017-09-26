window.onload = function() {
    //  倒计时 
    var tday = document.getElementById("tday");
    var thour = document.getElementById("thour");
    var tmin = document.getElementById("tmin");
    var tss = document.getElementById("tss");

    var sidenav = document.getElementById("sidenav")
    var sidenavLis = sidenav.children;
    //console.log(sidenavLis)
    setInterval(fn, 1000);

    //scrollNav("itemList", "sidenav");


    //for(var  i = 0 ; i < sidenavLis.length;i++){
    //    sidenavLis[i].onclick = function(){
    //
    //        for(var  j = 0 ; j < sidenavLis.length;j++){
    //            removeClass(sidenavLis[j],'active')
    //        }
    //
    //    }
    //}
    //



    //要做事先找人
    var ul = document.getElementById("itemList");
    var ulLis = ul.children;
    //console.log(ulLis)
    var ol = document.getElementById("sidenav");
    var olLis = ol.children;

    var leader = 0;
    var timer = null;
    for (var j = 0; j < olLis.length; j++) {
        olLis[j].index = j;
        olLis[j].onclick = function() {
            for (var i = 0; i < olLis.length; i++) {
                removeClass(olLis[i], 'active')
            }

            var _this = this;

            //removeClass(olLis[j],'active')
            addClass(_this, 'active')

            //console.log(this.index)
            clearInterval(timer);
            if (this.index === 6) {
                var target = ulLis[7].offsetTop - 100;
            } else if (this.index === 4) {
                var target = ulLis[5].offsetTop - 100;
            } else if (this.index === 5) {
                var target = ulLis[6].offsetTop - 100;
            } else if (this.index === 7) {
                var target = ulLis[8].offsetTop - 100;
            } else if (this.index === 8) {
                var target = ulLis[9].offsetTop - 100;
            } else if (this.index === 9) {
                var target = ulLis[10].offsetTop - 100;
            } else {
                var target = ulLis[this.index].offsetTop - 100;
            }

            // console.log(target);
            // window.scrollTo(0, target);
            timer = setInterval(function() {
                //step=(target-leader)/10
                //leader=leader + step
                var step = (target - leader) / 10;
                step = step > 0 ? Math.ceil(step) : Math.floor(step);
                leader = leader + step;
                window.scrollTo(0, leader);
                if (leader == target) {
                    clearInterval(timer);
                }

            }, 15)

        }
    }




    //


}


function hasClass(obj, cls) {
    return obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
}

function addClass(obj, cls) {
    if (!this.hasClass(obj, cls)) obj.className += " " + cls;
}

function removeClass(obj, cls) {
    if (hasClass(obj, cls)) {
        var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
        obj.className = obj.className.replace(reg, ' ');
    }
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

    if (d <= 0 && h <= 0 && m <= 0 && s < 10) {
        return false;
    }
    //5.在页面上显示出来。
    tday.innerHTML = d >= 10 ? d : "0" + d;
    thour.innerHTML = h >= 10 ? h : "0" + h;
    tmin.innerHTML = m >= 10 ? m : "0" + m;
    tss.innerHTML = s >= 10 ? s : "0" + s;

}