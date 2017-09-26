<?php
require_once "./lib/jssdk.php";
$jssdk = new JSSDK("wx9539425d2b5c8501", "ad047b2910fbb89010affd99784bfe8c");
//$jssdk = new JSSDK("wx44ee01e15e1ab03e", "d6d6227144642395dc3668b22ab295dd");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    < <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" />
    <title>2017全球虚拟现实产业峰会暨中关村虚拟现实产业园启动仪式 - 青亭网</title>
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/banjiang.css" />

    <script>
        (function(doc, win) {
            var docEl = doc.documentElement,
                resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                recalc = function() {
                    var clientWidth = docEl.clientWidth;
                    if (!clientWidth) return;
                    if (clientWidth >= 640) {
                        docEl.style.fontSize = '100px';
                    } else {
                        docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';
                    }
                };
            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
        })(document, window);
    </script>
</head>

<body>
    <header class="m_hea">
        <div class="m_header">
			<img src = "images/NEO.png" />
		</div>
        <p class="icon_hea"></p>
        <ul class="m_slide">
            <li><a href="./index.php">VR/AR峰会</a></li>
            <li><a href="./index.php#dhld">大会亮点</a></li>
            <li><a href="./index.php#dhjb">大会嘉宾</a></li>
            <li><a href="#">奖项评选</a></li>
            <li><a href="http://www.7tin.cn/">青亭网</a></li>
        </ul>
    </header>
    <div class="m_body ">
        <!--banner start-->
        <div class="m_banner_x clearfix">
            <div class="m_banner_img">
                <img src="images/banner8.jpg" alt="全球虚拟现实产业峰会">
                <p class="ban_date_p">2017.4.11</p>
            </div>

        </div>

        <!--banner end-->


        <!--banner start-->
        <div class="m_lx clearfix" style="display:none;">
            <div class="m_hex ">
                <i class="m_icon_bj_b1 m_icon_bj "></i> 颁奖流程
            </div>

          <div class = "bjm_img1" >
				<img src = "images/bjmb.jpg" />
		   </div>
        </div>

        <!--banner end-->


        <!--header start-->
        <div class="jxsz item   bg_w clearfix " id="section7">
            <div class="m_hex ">
                <i class="m_icon_bj m_icon_bj_1"></i> 奖项设置
            </div>
			<img class = "img" src = "images/jxszmd.jpg" />
        </div>
        <!--header  end-->

        <!--banner start-->

            <!--zzjg start-->
            <div class="zzjg zzjglx item mt-30 bg_w clearfix ">
                <div class="icon clearfix ">

                    <div class="m_hex hex-2 ">
                        <i class="m_icon_bj_4 m_icon_bj "></i> 报名参选
                        <div class="corner-1 "></div>
                        <div class="corner-2 "></div>
                    </div>
                    <div class="hex hex-3 ">

                        <div class="corner-1 "></div>
                        <div class="corner-2 "></div>
                    </div>

                </div>
                <div class="zzjg_box ">
                    <div class="fl zzjg_box_fl ">
                        商 务 媒 体
                    </div>
                    <div class="fl zzjg_box_dx ">
						  <p>联系人：翟先生</p>
                        <p> 手机：18600729445 </p>
                        <p>微信：sunny4500</p>
                        <p> 邮箱：zhailong@7tin.cn</p>
                   
					</div>
                    <div class="fr zzjg_box_fr ">
                        <img src="images/zhailong.jpg" alt="全球虚拟现实产业峰会">
                    </div>
                </div>


				 <div class="zzjg_box zzjg_box3">
                    <div class="fl zzjg_box_fl ">
                        报 名 参 选
                    </div>
                    <div class="fl zzjg_box_dx ">
					 <p>联系人：董小姐</p><p> 手机：15210905568 </p>
                    <p>微信：lishadr</p>
                    <p> 邮箱：missdong@7tin.cn</p>
                      
                    </div>
                    <div class="fr zzjg_box_fr ">
                        <img src="images/missdong.jpg" alt="全球虚拟现实产业峰会">
                    </div>
                </div>
            </div>
            <!--zzjg  end-->



        <div class="m_foot mt-30" id = "gzwomen">
            <div class="m_foot_cop">
                Copyright©2016青亭网All Rights reserved. 京ICP备16021793号-1
            </div>
        </div>




        <!--banner end-->

    </div>


 <script src="js/jquery.js"></script>
 
<script>
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
</script>

<div style="display:none"><script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?ffd5a2355b2e5de9da78ba6e37b516a2";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260997264'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260997264' type='text/javascript'%3E%3C/script%3E"));</script>
</div>
</body>

<script src="./js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $("#status").fadeOut();
        $("#preloader").delay(350).fadeOut("slow");
    })
</script>
<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 如有问题请通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
        'checkJsApi',
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onRecordEnd',
        'playVoice',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
      ]
  });
  wx.ready(function () {
    // 在这里调用 API
  });
</script>

<!--微信分享-->
<script type="text/javascript">
    wx.ready(function () {
    var shareData = {
    title: '2017全球虚拟现实产业峰会暨中关村虚拟现实产业园启动仪式 - 青亭网',
    desc: '最顶级的虚拟现实盛会，院士出席、数十位跨国公司负责人与中国产业代表深度对话！快来抢票！',
    link: 'http://www.7tin.cn/activity/topic/mnianhui/index.php',
    imgUrl: 'http://www.7tin.cn/activity/topic/images/fenxianghead.jpg'
    };
    wx.onMenuShareAppMessage(shareData);
    wx.onMenuShareTimeline(shareData);
    wx.onMenuShareQQ(shareData);
    wx.onMenuShareWeibo(shareData);
    });
    wx.error(function (res) {
    console.log(res.errMsg);
    });
</script>
<!--END 微信分享-->
<div style="display:none"><script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?ffd5a2355b2e5de9da78ba6e37b516a2";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260997264'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260997264' type='text/javascript'%3E%3C/script%3E"));</script>
</div>




</html>
