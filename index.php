<?php
require_once "./lib/jssdk.php";
$jssdk = new JSSDK("wx9539425d2b5c8501", "4d6e99a66aad214a9d2762ba6a36604e");
//$jssdk = new JSSDK("wx44ee01e15e1ab03e", "d6d6227144642395dc3668b22ab295dd");
$signPackage = $jssdk->GetSignPackage();
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>2017全球虚拟现实产业峰会暨中关村虚拟现实产业园启动仪式 - 青亭网</title>
	<meta name="keywords" content="虚拟现实,VR,AR,Oculus,增强现实,PSVR,VR资讯,VR技术">
	<meta name="description" content="中国领先的VR/AR信息服务商,虚拟现实,增强现实,VR,AR,7tin,创业,青亭,vr媒体,vr投资,vr融资,vr资本,vr资讯,vr技术,vr孵化,vr服务,VR中国会,亭基地,HTC Vive,Oculus rift,互联网,移动互联网,全景,亭公司。">
</head>
<body style="margin: 0;padding: 0;">
<img style="border:none" width="100%" alt="亭基地" src="http://www.7tin.cn/activity/topic/images/fenxiang.jpg?v=5">
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
    title: '您有一张来自石景山的邀请函',
    desc: '您有一张来自石景山的邀请函',
    link: 'http://www.7tin.cn/activity/topic/index.php',
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
