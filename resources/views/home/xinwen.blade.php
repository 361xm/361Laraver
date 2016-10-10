<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>品牌新闻</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../../home/css01/css.css" rel="stylesheet" type="text/css" />
<link href="../../home/css01/product.css" rel="stylesheet" type="text/css" />
<link href="../../home/css01/about.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../home/css01/style.css" />
<link href="../../home/css01/default.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
.showpdl{padding-left:20px;}
.p_left .pl_c .pclass ul li.showcurrent{background:#f79300; width:130px;}
.p_left .pl_c .pclass ul li.showcurrent a{ color:#FFFFFF;}
</style>
<body>
<div class="newheader361"> 
	<!--登陆/注册-->
	<div class="toplogin">
		<div class="logincont"> <a href="#" class="area"  target="_blank" ></a> <a href="http://www.361sport.com/index.php?m=Index&a=country" class="english"  target="_blank" ></a> <a href="http://ir.361sport.com/html/index.php" class="english"  target="_blank"  style="width:140px;"></a> <a href="http://ir.361sport.com/s/index.php" class="english"  target="_blank" ></a> <a href="/index.php?m=Jobs&a=index" class="english"  target="_blank" style="width:auto; padding:0px 20px;">招聘</a>
							<span class="signIn" style="line-height: 12px;"><a href="javascript:void(0);" class="in" >马上签到</a></span> <a href="/index.php?m=Member&a=login"  class="in" >登录/注册</a><em>您好</em>		</div>
	</div>
	<!--导航-->
	<div class="top_nav">
		<div class="navcon"> <a class="logo" ></a>
			<div class="newshop_menu" style="width:684px;">
				<ul>
					<li><a href="/" style="background:none;" target="_blank" class="dd" >首页</a></li>
					<li class="mainlevel"><a href="{{ URL('/product') }}" target="_blank" class="dd"><em></em>所有产品</a>
					</li>
					<li class="pointer"><a href="/info" target="_blank" class="dd">品牌新闻</a></li>
					<!--<li class="pointer"><a href="http://rio2016.361sport.com.br/" target="_blank" class="dd" style="color:red;">里约奥运</a></li>-->
					<li class="pointer"><a href="/pages" target="_blank" class="dd" style="color:red;">敢超10K</a></li>
					<!--<li class="zntxduihuan pointer" style="padding-top:14px;"><a class="dd">智能童鞋<br />兑换通道</a></li>-->
				</ul>
			</div>
			<div class="serch">
				<div class="clearfix">
					<form id="search" name="search" method="get" action="/index.php?m=Product&a=index">
						<input type="text" name="keyword" id="keyword" class="input" onblur="if(value ==''){value='跑鞋'}" onfocus="if(value =='跑鞋'){value =''}" value="跑鞋"/>
						<input type="hidden" value="Product" name="m"/>
						<input type="hidden" value="index" name="a"/>
						<input type="submit" class="submit pointer" />
					</form>
					<a class="topcart" href="/index.php?m=Cart&a=cart" target="_blank" >(<span class="gouwuche-num">0</span>)</a>
					<div style="clear:both;"></div>
				</div>
				<div class="search-hots-keywords"> 热门搜索：
					<a href="http://www.361sport.com/index.php?m=Product&a=index&sports=12&pclass=4&sex=1">跑步鞋</a>
					<a href="http://www.361sport.com/index.php?m=Product&a=index&keyword=短T">短T恤</a>
					<a href="http://www.361sport.com/index.php?m=Pages&a=keji160323">科技助跑</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="newheaderno"></div>
<!-- 智能童鞋兑换窗口开始 2015/10/29 @yzw-->
<div class="autumn" id="zntxdhan" style="display:none;">
	<div class="iframetab"></div>
	<div class="iframeinfo2">
		<div class="iframebody" style="text-align:center;">
			<a class="iframeclose" href="javascript:void(0);">×</a>
			<div class="zhm1_tit yahei">请输入兑换码</div>
			<input id="keyword" class="zntxinput" type="text" name="keyword"  placeholder="输入兑换码" /><br />
			<input class="zhm_submit pointer" type="submit" value="提交兑换码">
		</div>
	</div>
</div>
<script>
var zhm_Url="/index.php?m=Exchange&a=checkdhm";
</script>
<style type="text/css">
.autumn .iframetab{width:100%; height:100%; position:fixed; background:#000; z-index:1000; filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5; top:0px; left:0px;}
.autumn .iframeinfo{width:552px; background:#ffffff; z-index:1001; height:303px; left:50%; top:50%; margin-left:-310px; margin-top:-180px; position:fixed;}
.autumn .iframeinfo2{width:300px; background:#ffffff; z-index:1001; height:200px; left:50%; top:50%; margin-left:-150px; margin-top:-100px; position:fixed;}
.autumn .iframeinfo3{width:1038px; background:#ffffff; z-index:1001; height:590px; left:50%; top:50%; margin-left:-519px; margin-top:-295px; position:fixed;}
.autumn .iframebody{ background:#F5F5F5; position:relative; padding-left: 0px;}
#zntxdhan .zhm1_tit{font-size:18px; padding:32px 0px 16px;}
#zntxdhan .zntxinput{border: 1px solid #9aa4ad;border-radius: 5px; padding:5px; width:205px;}
#zntxdhan .zhm_submit{ background:#fb9306;border-radius: 5px; color:#fff; width:215px; margin-top:16px; height:36px; line-height:36px;}
.autumn .iframeclose{position:absolute; top:0px;right:0px; background:#F39800; width:34px; height:34px; color:#ffffff; font-weight:bolder; font-size:34px; line-height:34px; text-align:center;}
.autumn a.iframeclose:hover{text-decoration:none;}
.axtdlink{ width:974px;margin:auto; padding-top:52px;}
.axtdlink a{ display:inline-block; float:left; width:194px; height:70px; font-size:20px; color:#f99205; padding-top:185px; text-decoration:none; text-align:center}
</style>
<!--中秋博饼兑换窗口结束 2015/9/19 @txx-->

<!--内容-->
<div class="mcontop">
	<div class="mcon clearfix">
    	<div class="m_left f_l"><b><a href="/index.php?m=Index&a=index" style="color:#000">首页</a></b> > 
集团简介 > 2016年品牌新闻
        </div>
    </div>
</div>
<div class="pcon clearfix" style="margin-top:10px;">
	<div class="p_left">
    	<div class="pl_top"></div>
        <div class="pl_c">
        	<div class="plnum"><span>集团简介</span></div>
            <div class="selection">
				<div>
                	                     <div class="pclass" style='display:block'>
                    	<ul style="padding:6px 0px 22px 24px">
                        	<li class="showpdl"><a href="/index.php?m=Info&a=show&id=10&cate_id=6">361°集团</a></li><li class="showpdl"><a href="/index.php?m=Info&a=show&id=11&cate_id=6">社会责任</a></li><li class="showpdl"><a href="/index.php?m=Info&a=show&id=12&cate_id=6">品牌历程</a></li><li class="showpdl showcurrent"><a href="/index.php?m=Info&a=index&id=13">品牌新闻</a></li><li class="showpdl"><a href="/index.php?m=Jobs&a=index">集团招聘</a></li><li class="showpdl"><a href="/index.php?m=Info&a=show&id=14&cate_id=6">联系我们</a></li>     
                        </ul>
                    </div>
				</div>        	</div>
        </div>
        <div class="pl_bottom2"></div>
    </div>
    <div class="pa_right">
    	<h1>2016年品牌新闻</h1>
        <div class="content">
			<div class="pp_news" style="margin-top:50px;">
				<h1>361°全新专业跑鞋 助力跑步爱好者敢超自己，敢超10K</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57e226ebb6f05.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">体力耗尽的时刻，毅力才正要开始！相信自己，不仅如此，敢超自己，敢超10K！</div>
						<div class="pp-date">【2016年09月21日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=38">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>里约残奥会闭幕中国再居榜首，361°用热爱支持运动员再创奇迹</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57e089b309630.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">中国残奥代表团以107金81银51铜共计239枚奖牌占据绝对领先优势，连续第四次获得金牌榜和奖牌榜“双冠王”。</div>
						<div class="pp-date">【2016年09月20日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=37">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>361度助力里约残奥会 从奥运到残奥热爱在延续</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57d217f191158.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">巴西当地时间2016年9月7日晚6时45分（北京时间9月8日清晨5点），里约残奥会开幕式在巴西马拉卡纳体育场掀起大幕。
361°作为里约奥运会及残奥会的官方合作伙伴，同时还赞助了中国代表团和南非代表团，在此次里约残奥会上继续践行“用热爱赞助热爱”的奥运核心理念，助力残奥会成功。</div>
						<div class="pp-date">【2016年09月09日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=36">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>用热爱赞助热爱丨中国残奥代表团着361°领奖服及礼服亮相</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57c78925705f7.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">361°将用同样的热爱助力中国残奥代表团在赛场上夺得佳绩，用热爱继续诠释其奥运核心理念，用热爱持续践行其奥运梦想！</div>
						<div class="pp-date">【2016年09月01日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=35">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>361˚二零一六年上半年营业额上升15.7%</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57b3c5c234521.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">持续深耕五大事业体　推动业务发展</div>
						<div class="pp-date">【2016年08月17日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=34">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>热爱无国界 希腊与南非代表团着361°入场服亮相里约奥运开幕式 </h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57a57854527f2.png" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc"> 巴西当地时间8月5日晚上8点，万众瞩目的里约奥运会在巴西马拉卡纳体育场拉开帷幕。</div>
						<div class="pp-date">【2016年08月06日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=33">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>361°总裁丁伍号里约传递奥运圣火  8年用热爱延续奥运梦想 </h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57a7f7eef12c0.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">用热爱赞助热爱，361°总裁丁伍号里约传递奥运圣火，让我们一起用热爱期待今年的体育盛会，一起为中国加油！</div>
						<div class="pp-date">【2016年08月05日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=32">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>361°领跑贵阳国际马拉松</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57987f6b02f70.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc"> 7月23号，由361°热跑团成员组成的17位领跑者圆满完成了贵阳国际马拉松的领跑任务。</div>
						<div class="pp-date">【2016年07月27日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=31">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>用热爱赞助热爱 361°执着践行奥运梦想</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/578df30a6af71.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">作为中国首个登陆奥运舞台的体育用品品牌，361°此次将以”用热爱赞助热爱”的奥运核心理念更好地践行奥运梦想，让全世界的运动爱好者都感受到中国品牌的奥运热情，共襄奥运盛举！</div>
						<div class="pp-date">【2016年07月19日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=30">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>里约奥运赞助热爱新体验：361°迷你体育公园为运动爱好者带来更多便利</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57861d689f37e.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">361°在里约海岸最著名的科帕卡巴那纳海滩的滨海公路边为运动爱好者们创建了新的“休息加油站”-- 361°迷你体育公园（361° Parklet），同时将其作为集结地定期开展不同主题的运动派对，极好地满足了运动爱好者们的需求。</div>
						<div class="pp-date">【2016年07月13日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=29">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>传递热爱 | 里约奥运火炬传递的美丽风景</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57739cef01d05.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">传递热爱，361°助力里约奥运火炬传递！5月3日正式开始在热情似火的桑巴国度开始火炬传递，期间将有总共1.2万名火炬手参加。</div>
						<div class="pp-date">【2016年06月29日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=28">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>361°热跑团亮相兰马 引领路跑热潮</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57739c6544c44.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">6月11日，由361°热跑团成员组成的领跑团，与4万多名来自不同地区的跑者，带着同样的热爱，汇聚在著名的黄河风情线赛道，向2016兰州国际马拉松赛发起挑战！</div>
						<div class="pp-date">【2016年06月29日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=27">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>361°助力“益启跑”公益活动  厦门鸣枪开跑</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/575e7e823a8e4.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">为紧密团结海峡两岸同胞，加强两岸青少年在公益、体育等方面的交流，2016年6月13日上午，361°助力“益启跑·海峡两岸青年共筑中国梦”公益慈善路跑活动在厦门五缘湾音乐广场鸣枪开跑。
</div>
						<div class="pp-date">【2016年06月13日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=26">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>2016年里约奥运会官方制服于巴西正式发布</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57357357b6390.png" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc"> 巴西里约热内卢当地时间5月12日上午10时，2016年里约奥运会及残奥会官方制服正式发布。</div>
						<div class="pp-date">【2016年05月13日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=25">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>361°助力点燃奥林匹克圣火</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/57baa306ddcbc.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">北京时间4月21日17时(希腊当地时间中午12时)，2016年里约奥运会圣火在希腊奥林匹亚的赫拉神庙前成功采集。</div>
						<div class="pp-date">【2016年04月22日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=23">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>体博会开幕  361°奥运火炬服中国首次曝光</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/5715fd5dd0c5a.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">第18届中国(晋江)国际鞋业博览会升级为体育产业博览会于4月18日-21日在晋江举行，361°奥运火炬服中国首次曝光。</div>
						<div class="pp-date">【2016年04月19日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=22">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>361°公布2015全年业绩   净利上升30.2%</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/56fb8e242b6e7.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">3月8日，361°集团在香港公布了截至2015年12月31日止的全年业绩。
财报显示，361°集团于2015年的营业额上升14.1%至人民币44.59亿元。</div>
						<div class="pp-date">【2016年03月29日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=20">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>361°携手金马开跑 “战地”特色强调两岸互动</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/56fb8e16e0d2d.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">2016年2月28日上午，第九届金门马拉松赛于金门大学鸣枪开跑。作为推动金门旅游、经济发展，也是促进两岸人民体育文化交流、互动合作的重要文化盛典，金马已然成为两岸交流最具影响力的标杆赛事。</div>
						<div class="pp-date">【2016年03月29日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=19">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>361°与新浪共建跑步社群  成立热跑团跨年耀跑</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/56fb8e0cd9e42.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">广州，12月31日晚，361°携手新浪举办“2016 HAPPY RUN YEAR 361°跨年耀跑”大型跨年活动，双方共同宣布联合成立361°热跑团，共建跑步社群。</div>
						<div class="pp-date">【2016年03月29日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=18">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>361°童装获“中国十大童装品牌”称号</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/56fb8e029eafd.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">日前，由中国服装协会主办的第四届“中国十大童装品牌”评选活动在北京圆满落幕。评选活动旨在加强中国童装企业品牌意识和知识产权保护意识，进一步扩大中国原创童装品牌的社会知名度和社会影响力。</div>
						<div class="pp-date">【2016年03月29日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=17">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div><div class="pp_news" >
				<h1>361°童装荣获“中国消费市场行业影响力品牌”称号</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img src="../../home/images01/56fb8df4c97ba.jpg" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">为纪念“3.15消费者权益日”的到来，以“企业发展与线上线下营销”为研讨主题的2016年“3.15中国消费市场行业影响力品牌”推荐研讨活动暨颁奖盛典于2016年3月14日—15日在北京隆重举行。</div>
						<div class="pp-date">【2016年03月29日】</div>
						<a class="pp-more" href="/index.php?m=Info&a=detaile&newid=16">查看详细</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>					</div>
    </div>
</div>
<div class="clear"></div>
<script src="../../home/Scripts01/wb.js" type="text/javascript" charset="utf-8"></script>
<div id="bottom">
	<!--商标-->
    <div class="trademark">
    	<div class="trademark-content" style="width:1180px;">
            <div class="trademark-tip">
            	<img src="../../home/images01/foot2016.png" />
<!--            	<ul>
                	<li>
                        <div class="trademark-logo"><a href="#"></a></div>
                        <div class="trademark-weibo">
                            <div class="weibo-title">361°官方商城</div>
                            <div class="weibo-tip">
                                <a href="#" class="wangyi"><wb:follow-button uid="1768294591" type="gray_1" width="22" height="30" ></wb:follow-button></a>
                                <a href="#" class="weixin"><img src="../../home/images01/weixin.png" width="30" height="30" />
                                <div class="erweim">
                               		<img src="../../home/images01/index2_01.jpg">
                                </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="trademark-left" style="display:none">
                        <div class="trademark-logo-a"><a href="#"></a></div>
                        <div class="trademark-weibo">
                            <div class="weibo-title">尚品牌</div>
                            <div class="weibo-tip">
                                <a href="#" class="wangyi"><wb:follow-button uid="1893774250" type="gray_1" width="22" height="24" ></wb:follow-button></a>
                                <a href="#" class="weixin"><img src="../../home/images01/weixin.png" width="30" height="30" />
                                <div class="erweim"><img src="../../home/images01/index2_02.jpg"/></div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="trademark-left">
                        <div class="trademark-logo-b"><a href="#"></a></div>
                        <div class="trademark-weibo">
                            <div class="weibo-title">361°童装</div>
                            <div class="weibo-tip">
                                <a href="#" class="wangyi"><wb:follow-button uid="1902011922" type="gray_1" width="22" height="24" ></wb:follow-button></a>
                                <a href="#" class="weixin"><img src="../../home/images01/weixin.png" width="30" height="30" /><div class="erweim"><img src="../../home/images01/index2_06.jpg" /></div></a>
                            </div>
                        </div>
                    </li>
                    <li class="trademark-left">
                        <div class="trademark-logo-c"><a href="#"></a></div>
                        <div class="trademark-weibo">
                            <div class="weibo-title">361°买一善一</div>
                            <div class="weibo-tip">
                                <a href="#" class="wangyi"><wb:follow-button uid="3222649242" type="gray_1" width="22" height="24" ></wb:follow-button></a>
                                <a href="#" class="weixin"><img src="../../home/images01/weixin.png" width="30" height="30" /><div class="erweim"><img src="../../home/images01/index2_03.jpg" /></div></a>
                            </div>
                        </div>
                    </li>
                </ul>-->
                
             </div> 
             <!--
             <div class="btnleftright">
               <a href="#" class="left"></a>
               <a href="#" class="right"></a>
             </div>
             -->
     </div>
      <div class="promis">
             	<div class="promis-content">
                	<div class="promise-con">
                    	<ul>
                           <li>
                            	<div class="promise-left"><img src="../../home/images01/guanfang-pic.png" width="91" height="34" /></div>
                                <div class="promise-right" style="width:77px;">所售商品 均为官方正品</div>
                                <div class="promise-bot"></div>
                          </li>
                            <li>
                            	<div class="promise-left"><img src="../../home/images01/sever.png" width="134" height="34" /></div>
                              <div class="promise-right">7天无理由退换货 贴心售后服务</div>
                              <div class="promise-bot"></div>
                          </li>
                            <li>
                            	<div class="promise-left"><img src="../../home/images01/shiwu.png" width="136" height="34" /></div>
                              <div class="promise-right">100%实物拍摄 如实详情描述</div>
                              <div class="promise-bot"></div>
                          </li>
                          <li>
                            	<div class="promise-left"><img src="../../home/images01/baoyou.png" width="136" height="34" /></div>
                            <div class="promise-right" >满179元包邮 <br />包邮服务轻松购</div>
                            <div class="promise-bot"></div>
                          </li>
                        </ul>
                    </div>
                    
                </div>
                <div class="communite">
                  <div class="communite-content">
                  	<div class="newfoot_cl">
        	<dl>
            	<dt>关于361°</dt>
                <dd><a href="http://ir.361sport.com/s/index.php" target="_blank"></a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=10">集团简介</a></dd>
                <dd><a href="http://cn.361sport.com/shop.asp" target="_blank">店铺查询</a></dd>
                <dd><a href="http://361bift.361sport.com" target="_blank">361°BIFT</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=14">联系我们</a></dd>
            </dl>
            <dl>
            	<dt>如何购物</dt>
                <dd><a href="/index.php?m=Info&a=show&id=1&cate_id=7">购物流程</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=2&cate_id=7">订单查询</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=15&cate_id=7">会员及积分体系</a></dd>
                <!--<dd><a href="#">常见问题</a></dd>
                <dd><a href="#">帮助中心</a></dd>-->
            </dl>
            <dl>
            	<dt>支付方式</dt>
                <dd><a href="/index.php?m=Info&a=show&id=3&cate_id=7">支付方式</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=4&cate_id=7">发票说明</a></dd>
            </dl>
            <dl>
            	<dt>物流配送</dt>
                <dd><a href="/index.php?m=Info&a=show&id=5&cate_id=7">配送时间和范围</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=6&cate_id=7">配送费用</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=7&cate_id=7">商品验收</a></dd>
            </dl>
            <dl style="width:95px;">
            	<dt>售后服务</dt>
                <dd><a href="/index.php?m=Info&a=show&id=9&cate_id=7">退换货流程</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=8&cate_id=7">售后服务政策</a></dd>
            </dl>
        </div>
                    <div class="newfoot_cr">
                        <dl>
                            <dt>联系361°官方商城</dt>
                            <dd class="tel">
                                <div class="phone-left"><img src="../../home/images01/phone.png" width="42" height="42" /></div>
                                <div class="phone-right">
                                    <span class="p1">0592-3790038</span>
                                    <span class="p2">&nbsp;&nbsp;在线时间：周一至周五<br>(9:00-12:00   13:00-18:00)<br></span>
                                </div>
                            </dd>
                            <dd style="margin-bottom:0px;">
                                <div class="phone-left"><a href="tencent://message/?uin=476849964&Site=qq&Menu=yes"><img src="../../home/images01/qq.png" width="45" height="43" /></a></div>
                                <div class="phone-right">
                                    <div class="fourtime"><a href="tencent://message/?uin=476849964&Site=qq&Menu=yes">== 361在线客服 ==</a></div>
                                </div>
                            </dd>
                            <dd style="padding-left:78px;">
                                <div class="phone-right">
                                    <div class="fourtime5"><a href="tencent://message/?uin=476849964&Site=qq&Menu=yes">QQ:476849964</a></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
					<div class="clear"></div>

                  </div>
                </div>
                
      </div>
      <div class="Certificate">兄弟连 153期 敢死队 二期项目</div>
    </div>
</div>
<div class="newfloat">
    <div class="float-tip"><img src="../../home/images01/float-tip.png" /></div>
    <div class="float-down float-down2"></div>
     <div class="float-download">
	<div class="float-gouwuche">
    <a href="/index.php?m=Cart&a=cart">
        <div class="gouwuche-tip"></div>
        <div class="gouwuche-font">购<br />物<br />车</div>
        <div class="gouwuche-num">0</div>
    </a>
  </div>
  <div class="float-kefu">
    <a href="tencent://message/?uin=476849964&Site=qq&Menu=yes">
        <div class="kefu-tip"></div>
        <div class="gouwuche-font">客<br />服</div>
        <div class="float-saoma-erweima" style="display:none;">
         <img src="../../home/images01/index2_01.jpg" width="174" height="174" />
        </div> 
    </a>
  </div>
 <div class="float-shoucang">
    <a  href="/index.php?m=User&a=collect">
        <div class="shoucang-tip"></div>
        <div class="gouwuche-font">收<br />藏<br /></div>
      </a>
  </div>
   <div class="float-saoma">
    <a href="#">
        <div class="saoma-tip"></div>
        <div class="gouwuche-font">扫<br />码<br /></div>
        
      </a>
  </div>
  <div class="back-top"><a href="#"><img src="../../home/images01/back-top.png" width="48" height="48" /></a></div>
  </div>
</div>
<div style="display:none;">
<div id="inline6" style="width:820px;height:600px;overflow:auto; margin:auto;">
    <img src="../../home/images01/qureai-tanchuang.jpg"/>
</div>
</div>
<script type="text/html" id="iframeLogin">
<div class="iframeLogin">
	<div class="iframeform">
		<label>登录名：<a href="/index.php?m=Member&a=login">免费注册&nbsp;&nbsp;</a></label>
		<input type="text" id="input" name="Laccount" value="" placeholder="手机号/会员名/邮箱">
		<label>登录密码：<a href="/index.php?m=Member&a=getpwd">忘记密码?</a></label>
		<input type="password" id="input" name="Lpassword" value="">
		<div class="formlist" id="profile_error" style="display:none; margin-top:10px; ">
			<dl style="padding:0px;">
				<dd class="profile_error" style="width:85%;"></dd>
			</dl>
		</div>
		<input type="button" id="button" class="iframebutton" value="登&nbsp;&nbsp;&nbsp;陆" style="margin-top:10px;"/>
		<label class="otherlogin">第三方登陆</label>
		<label style="width:100%; text-align:center;"><a class="loginbyqq" href="/index.php?m=Loginby&a=index&ltype=qq" target="_blank"></a><a href="/index.php?m=Loginby&a=index&ltype=sina" class="loginbysina"  target="_blank"></a></label>
		<div style="clear:both;"></div>
	</div>
</div>
</script>
<script type="text/javascript" src="../../home/Scripts01/jquery.js"></script>
<script type="text/javascript" src="../../home/Scripts01/artdialog.js"></script>
<script type="text/javascript" src="../../home/Scripts01/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="../../home/Scripts01/common.js"></script>
<script type="text/javascript">
var signUrl = "/index.php?m=User&a=signIn";
</script>
<!--双十一领优惠券-->
<script type="text/javascript">
$(document).ready(function(){
	$("map#Mapjtr").find("area").live("click",function(){
		var type = $(this).attr("data-type");
		var linkurl = "/index.php?m=Pages&a=getcoupon3";
		$.post(linkurl,{type:type},function( result ){
			if( result.status == '1' ){
				artDialog.login("账户登陆"); return false;
			} else if( result.status == '2' ){
				artDialog.tips(result.msg,2,"error"); return false;
			} else {
				artDialog.tips(result.msg,2,"succeed"); return true;
			}
		},"json")
	});
	$("map#Mapschl").find("area").live("click",function(){
		var type = $(this).attr("data-type");
		var linkurl = "/index.php?m=Pages&a=getcoupon3";
		$.post(linkurl,{type:type},function( result ){
			if( result.status == '1' ){
				artDialog.login("账户登陆"); return false;
			} else if( result.status == '2' ){
				artDialog.tips(result.msg,2,"error"); return false;
			} else {
				artDialog.tips(result.msg,2,"succeed"); return true;
			}
		},"json")
	});
});
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?30e32478a250ebe4ba15f477df282ae7";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript">
var  loginUrl="/index.php?m=Member&a=checkLogin";
$(document).ready(function() {
	$(".variousv").fancybox({
		'padding'			: 0,
		'autoScale'			: false,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'width'    : 860,
		'height'   : 600,
		'overlayColor' : '#000'
	});
		// 中秋博饼兑换窗口开始 2015/9/19 @txx
	$("a.btn_exchange").live("click",function(){
		$(".autumn").fadeIn("fast");
	});
	$("a.iframeclose").live("click",function(){
		$(".autumn").hide("fast");
	});
	//中秋博饼兑换窗口结束  2015/9/19 @txx
});
</script>
</body>
</html>