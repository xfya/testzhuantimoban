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
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>2017全球虚拟现实产业峰会暨中关村虚拟现实产业园启动仪式 - 青亭网</title>
    <link rel="stylesheet" href="css/base.css" />

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
    <!--header  end-->
    <header class="m_hea">
        <div class="m_header">
			<img src = "images/NEO.png" />
		</div>
        <p class="icon_hea"></p>
        <ul class="m_slide " id="m_slide">
            <li><a href="#">VR/AR峰会</a></li>
            <li><a href="#dhld">大会亮点</a></li>
            <li><a href="#dhjb">大会嘉宾</a></li>
            <li><a href="./banjiang.php">奖项评选</a></li>
            <li><a href="http://www.7tin.cn/">青亭网</a></li>
            
        </ul>
    </header>
    <div class="m_body ">

        <!--banner start-->
        <div class="m_banner_x clearfix">
            <div class="m_banner_img">
                <img src="images/banner.jpg" alt="全球虚拟现实产业峰会">
            </div>

            <div class=" m_ban_con">

                <div class="ban_date clearfix ">
                    <div class="ban_date_box ">
                        <i class="i_bd i_bd1 "></i>
                        <i class="i_bd i_bd2 "></i>
                        <i class="i_bd i_bd3 "></i>
                        <i class="i_bd i_bd4 "></i>
                        <i class="i_bd i_bd5 "></i>
                        <i class="i_bd i_bd6 "></i>
                        <i class="i_bd i_bd7 "></i>
                        <i class="i_bd i_bd8 "></i>
                        <div class="ban_time clearfix ">
                            <div class="ban_time_box ">
                                <span id="tday">00</span>
                                <p>天</p>
                            </div>
                            <div class="ban_time_box ">
                                <span id="thour">00</span>
                                <br>
                                <p>时</p>
                            </div>
                            <div class="ban_time_box ">
                                <span id="tmin">00</span>
                                <br>
                                <p>分</p>
                            </div>
                            <div class="ban_time_box ">
                                <span id="tss">00</span>
                                <br>
                                <p>秒</p>
                            </div>
<a  name="dhld" ></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--banner   end-->

        <!--ld start-->
        <div class="ld item clearfix ">

            <div class="m_hex">
                <i class="m_icon micon_dh "></i> 大会亮点

            </div>
           <div class = "bjm_img1" >
				<img src = "images/dhld.jpg" /><a  name="dhjb" ></a>
		   </div>
        </div>
        <!--ld  end-->


        <!--header start-->
        <!-- guests  start    -->
        <div class="m_guests   item clearfix " id="section3">
            <div class="m_hex mt-30 mb-10">
                <i class="m_icon micon_jiabin "></i>大会嘉宾
            </div>
            <div class="m_guests_list clearfix">
                <!-- 1  start  -->
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/1guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>赵沁平</p>
                        <p>中国工程院院士<br />北京航空航天大学教授</p>
                    </a>
                </div>
               <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/36guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>徐明强</p>
                        <p>微软大中华地区CTO<br /><font color=black>微软大中华地区CTO</font></p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/3guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>周明全</p>
                        <p>教育部VR应用工程研究中心主任<br />北京师范大学教授</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/38guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>鲍永哲</p>
                        <p>HTC虚拟现实副总裁<br /><font color=black>HTC虚拟现实副总裁HTC虚拟现实副总裁</font></p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/24guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>徐涛</p>
                        <p>威盛电子（中国）有限公司中国区行政长<br /><font color=black>徐涛</font></p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/5guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>林浩</p>
                        <p>戴尔全球副总裁<br /><font color=black>戴尔全球副总裁戴尔全球副总裁</font></p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/40guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>熊文</p>
                        <p>爱奇艺智能硬件副总裁</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/32guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>吴灏</p>
                        <p>Epic Games大中华区<br />总经理</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/11guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>黄晓杰</p>
                        <p>暴风魔镜CEO</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/37guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>李丰</p>
                        <p>峰瑞资本创始合伙人</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/43guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>Touradj Ebrahimi</p>
                        <p>全景图像压缩国际标准主席</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/41guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>约翰·D·坎宁</p>
                        <p>美国制片人协会<br />新媒体主席</p>
                    </a>
                </div>
                 <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/35guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>Andrew Beall<font color=black>安</font></p>
                        <p>Worldviz创始人<br /><font color=black>Worldviz创始人</font></p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/12guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>张辉</p>
                        <p>棕榈投资有限公司<br />董事长</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/10guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>周光涛</p>
                        <p>达晨创投合伙人</p>
                    </a>
                </div>

                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/28guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>刘循序</p>
                        <p>创业公社董事长</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/42guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>温江涛</p>
                        <p><font size=1>清华大学计算机科学与技术系教授、博士生导师</font></p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/18guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>楚含进</p>
                        <p>AMD VR计算平台与方案总监</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/15guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>戴悦</p>
                        <p>华录百纳VR</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/14guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>居大功</p>
                        <p>联络互动VR总经理</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/16guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>赵刚</p>
                        <p>京东ARVR业务部负责人</p>
                    </a>
                </div>

                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/23guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>伍经纬</p>
                        <p>松禾VR产业基金合伙人</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/22guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>安乐</p>
                        <p>和君资本VR基金合伙人</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/30guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>许贤</p>
                        <p>微鲸VR 副总裁</p>
                    </a>
                </div>

                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/8guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>邓妍</p>
                        <p>投资时报执行总编辑</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/17guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>何文艺</p>
                        <p>乐客VR创始人 CEO</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/39guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>殷元江</p>
                        <p>七维视觉CEO</p>
                    </a>
                </div>

                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/20guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>廖春元</p>
                        <p>亮风台创始人 CEO</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/33guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>马黎明</p>
                        <p>幻维世界副总裁</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/34guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>郭伟</p>
                        <p>ZVR创始人 CEO</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/19guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>史晓刚</p>
                        <p>枭龙科技创始人 CEO</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/26guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>王磊</p>
                        <p>超级队长创始人 CEO</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/head/29guest.jpg" alt="全球虚拟现实产业峰会" />
                        <p>周志颖</p>
                        <p>梦想人总经理</p>
                    </a>
                </div>
                <div class="guests_box ">
                    <a href="javascript:void(0) ">
                        <img src="images/55.png" alt="全球虚拟现实产业峰会" />
                        <p>更多嘉宾</p>
                        <p>敬请期待</p>
                    </a>
                </div>



            </div>
        </div>
        <!-- guests  end    -->
        <!--header  end-->


        <!--agenda start-->

        <div class="agenda   item bg_w clearfix " id="section4">
            <div class="m_hex mt-30 mb-10">
                <i class="m_icon micon_jiabin "></i> 大会议程
            </div>
            <div class="week_history ">

                <ul class="agenda_box ">
                    <li>
                        <p>
                            <span> 08:30-09:20<b></b> </span>
                            <span>
                                签到及参观<br />嘉宾签到、现场参观体验、播放石景山区宣传片
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 09:30-10:10<b></b> </span>
                            <span>
                              领导致辞
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span>10:10-10:30<b></b> </span>
                            <span>
                               签约仪式<br />中关村虚拟现实产业园揭牌仪式<br />
	战略合作签约<br />
	入驻企业签约<br />
		
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 10:30-10:45<b></b> </span>
                            <span>主题演讲<br />中国工程院院士	赵沁平

                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 10:45-11:00<b></b> </span>
                            <span>
                                 主题演讲<br />微软大中华地区首席技术官（CTO）	徐明强

                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span>11:00-11:15<b></b> </span>
                            <span>
                               主题演讲<br />HTC虚拟现实新科技部门副总经理 	鲍永哲

                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 11:15-11:30<b></b> </span>
                            <span>
                                  主题演讲<br />戴尔全球副总裁	林浩

                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 11:30-11:45<b></b> </span>
                            <span>
                               主题演讲<br />美国全国广播公司（NBC） 互动体验副总裁	John David Canning
	
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 11:45-12:00<b></b> </span>
                            <span>
                               主题演讲<br />暴风魔镜CEO	黄晓杰
	
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 12:00-13:30<b></b> </span>
                            <span>
                               午餐
	
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 13:30-13:35<b></b> </span>
                            <span>
                               开场致辞	青亭网

                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 13:35-13:50<b></b>  </span>
                            <span>
                               主题演讲<br />全景图像压缩国际标准主席，瑞士洛桑理工学院教授<br />Touradj Ebrahimi

                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 13:50-14:05<b></b>  </span>
                            <span>
                               主题演讲<br />Worldviz  CEO 	Andrew Beall
	
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 14:05-14:20<b></b>  </span>
                            <span>
                               主题演讲<br />Epic Games 大中华区总经理	吴灏
	
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 14:20-15:00<b></b>    </span>
                            <span>
                                "VR／AR行业应用：新时代商业变革"<br />主持人：AMDVR计算平台与方案总监	楚含进<br />
	华录百纳VR总经理	戴悦<br />
	威爱教育创始人兼CEO	孙伟<br />
	亮风台创始人CEO	廖春元<br />
	和君资本VR基金合伙人	安乐<br />
	乐客VR创始人	何文艺<br />
	幻维世界副总裁	马黎明<br />
	微视酷创始人兼CEO	杨威

                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span>   15:00-15:15<b></b>      </span>
                            <span>
                              主题演讲<br />威盛电子全球副总裁、中国区行政长	徐涛

                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span>   15:15-15:30<b></b>      </span>
                            <span>
                              主题演讲<br />微鲸VR 副总裁	许贤
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 15:30-16:10<b></b>  </span>
                            <span>
                                VR／AR行业预测：2017趋势与机遇<br />主持人：青亭网联合创始人	王颖
	DCCI*未来智库、FututeLabs未来实验室创始人	胡延平<br />
	京东ARVR业务负责人	赵刚<br />
	七维科技常务副总	文衡<br />
	清华大学计算机科学与技术系教授	温江涛<br />
	超级队长创始人	王磊<br />
	ZVR CEO	郭伟<br />
	枭龙科技CEO	史晓刚
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 16:10-16:25<b></b>  </span>
                            <span>
                               主题演讲<br />教育部虚拟现实应用工程研究中心主任、北京师范大学教授	周明全
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 16:25-17:05<b></b>  </span>
                            <span>
                               VR／AR创新资本论坛：投资正当时？<br />主持人：投资时报执行总编辑	邓妍
	棕榈投资有限公司董事长	张辉<br />
	松禾资本合伙人	伍经纬<br />
	爱奇艺副总裁	熊文<br />
	联络互动VR总经理	居大功<br />
	创业公社创始人	刘循序<br />
	达晨创投董事总经理	周光涛
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span>17:05-17:30   </span>
                            <span>
                                   颁奖典礼
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span> 17:30 </span>
                            <span>
                                  大会结束
                            </span>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <!--agenda  end-->

        <!--header start-->
        <div class="jxsz item   bg_w clearfix " id="section7">
            <div class="m_hex ">
                <i class="m_icon_bj m_icon_bj_1"></i> 奖项设置
            </div>
			<img class = "img" src = "images/jxszmd.jpg?v=2" />
        </div>
        <!--header  end-->
        <!--header start-->
        <div class="dhbg item clearfix" id="section5">
            <div class="dhbg_box ">

            </div>
        </div>
        <!--header  end-->
        <!--dhbm start-->
        <div class="m_cxfs mt-10 clearfix">
            <div class="m_hex ">
                <i class="m_icon_bj_2 m_icon_bj "></i> 参选方式
            </div>
            <div class="m_cxfs_box">
                <div class="ban_date_box ban_time_lx">
                    <i class="i_bd i_bd1 "></i>
                    <i class="i_bd i_bd2 "></i>
                    <i class="i_bd i_bd3 "></i>
                    <i class="i_bd i_bd4 "></i>
                    <i class="i_bd i_bd5 "></i>
                    <i class="i_bd i_bd6 "></i>
                    <i class="i_bd i_bd7 "></i>
                    <i class="i_bd i_bd8 "></i>
                    <div class="ban_time ban_time_lx_ch  clearfix ">
                        请向我们的商务人员提供：企业名称、联系人姓名、 联系人电话和邮箱。
                    </div>
                </div>
            </div>

        </div>

        <!--dhbm start-->
        <!--dhbm start-->
        <div class="dhbm item mt-30  bg_w clearfix" id="section6">
            <div class="icon clearfix">

                <div class="m_hex hex-2 ">
                    <i class="m_icon_bj m_icon_bj_bm1"></i> 大会报名
                </div>


            </div>
            <div class="dhbm_fs">
                <img src="images/bmewm.jpg" alt="全球虚拟现实产业峰会"/>\
                <p>扫一扫，关注青亭网 </p> <p>点击“峰会报名”</p>
            </div>


            </div>
            <!--dhbm  end-->

            <!--zzjg start-->
            <div class="zzjg item mt-30 bg_w clearfix ">

                <div class="m_hex hex-2 ">
                    <i class="m_icon_bj_3 m_icon_bj "></i> 合作机构
                </div>
				<h3 class = "m_h3_hzhb">财经媒体战略合作伙伴</h3>
                <div class="m_box_img">
					<img src="./images/org/0.jpg" alt="全球虚拟现实产业峰会" />
                </div>

				<h3 class = "m_h3_hzhb" >战略合作媒体</h3>	
				 <div class="m_box_img">
					<img src="./images/org/61.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/62.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/63.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/64.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/65.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/66.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/67.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/68.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/69.jpg" alt="全球虚拟现实产业峰会" />
                </div>
				<h3 class = "m_h3_hzhb" >支持媒体</h3>	
				<div class="m_box_img">
					<img src="./images/org/81.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/82.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/83.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/84.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/85.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/86.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/87.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/88.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/89.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/180.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/181.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/182.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/183.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/184.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/185.jpg" alt="全球虚拟现实产业峰会" />
                </div>
				<h3 class = "m_h3_hzhb" >合作媒体</h3>	
				 <div class="m_box_img">
					<img src="./images/org/1.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/2.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/3.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/4.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/5.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/6.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/7.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/8.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/9.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/10.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/11.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/12.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/15.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/16.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/17.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/18.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/19.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/20.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/21.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/22.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/24.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/25.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/75.jpg" alt="全球虚拟现实产业峰会" />
                </div>
				<h3 class = "m_h3_hzhb">合作企业</h3>
                <div class="m_box_img">
					<img src="./images/org/31.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/32.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/33.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/34.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/35.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/36.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/37.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/38.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/39.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/40.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/104.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/41.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/90.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/91.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/92.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/93.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/94.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/95.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/96.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/100.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/97.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/98.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/99.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/101.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/102.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/103.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/105.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/106.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/107.jpg" alt="全球虚拟现实产业峰会" />
                </div>

				<h3 class = "m_h3_hzhb">投资机构</h3>	
				 <div class="m_box_img">
					<img src="./images/org/51.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/52.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/53.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/54.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/55.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/56.jpg" alt="全球虚拟现实产业峰会" />
                </div>
				<h3 class = "m_h3_hzhb">合作机构</h3>
				<div class = "m_box_img">
					<img src="./images/org/70.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/71.jpg" alt="全球虚拟现实产业峰会" />
				</div>
				<h3 class = "m_h3_hzhb">战略合作</h3>
				<div class = "m_box_img">
					<img src="./images/org/43.jpg" alt="全球虚拟现实产业峰会" />
					<img src="./images/org/42.jpg" alt="全球虚拟现实产业峰会" />
				</div>
            </div>
            <!--zzjg  end-->


            <!--zzjg start-->
            <div class="zzjg zzjglx item mt-30 bg_w clearfix ">
                <div class="icon clearfix ">

                    <div class="m_hex hex-2 ">
                        <i class="m_icon_bj_4 m_icon_bj "></i> 联系我们
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
                        报 名 咨 询
                    </div>
                    <div class="fl zzjg_box_dx ">
					 <p>联系人：李小姐</p><p> 手机：15311421106 </p>
                    <p>微信：doraldan</p>
                    <p> 邮箱：lidan@7tin.cn</p>
                      
                    </div>
                    <div class="fr zzjg_box_fr ">
                        <img src="images/lidan.jpg" alt="全球虚拟现实产业峰会">
                    </div>
                </div>
            </div>
            <!--zzjg  end-->

			

            <!--header start-->

        </div>
    </div>




	<!----fotter  start --->


        <div class="m_foot mt-30">
            <div class="m_hex hex-2 ">
                <i class="m_icon_bj_b14 m_icon_bj "></i> 活动地址
            </div>
            <div class="m_foot_img">
                <img width="80%" src="images/map2.jpg" alt="全球虚拟现实产业峰会">
            </div>

            <div class="m_foot_about">
                <span> <a class="qt_a" href="http://www.7tin.cn/page/guanyuqingtingwang" target="_blank">关于我们 </a></span>
                <span><a href="http://www.7tin.cn/page/gtingjidi" target="_blank">亭基地 </a></span>
                <span><a href="http://www.7tin.cn/page/jiaruwomen" target="_blank"> 加入我们</a></span>
            </div>
            <div class="m_foot_cop">
                Copyright©2016青亭网All Rights reserved. 京ICP备16021793号-1
            </div>
        </div>
	<!----fotter  end--->
    <!--引入js文件-->
	 <script src="js/jquery.js"></script>
    <script src="js/index.js"></script>
   

  
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
