<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>361°多一度热爱，361°官方商城</title>
<meta name="keywords" content="作为中国领先的专业运动品牌，361°提供给所有热爱运动的年轻消费者设计与科技兼备的运动产品，并鼓励他们全情投入，不计得失地热爱运动。在“多一度热爱”品牌精神的指引下，361°积极践行“热爱”文化，将品牌、研发、设计、生产、经销融为一体，产品包括运动鞋、服及相关配件、童装、时尚休闲等多种品类，致力成为全球最令人尊敬的运动品牌企业之一。">
<meta name="description" content="作为中国领先的专业运动品牌，361°提供给所有热爱运动的年轻消费者设计与科技兼备的运动产品，并鼓励他们全情投入，不计得失地热爱运动。在“多一度热爱”品牌精神的指引下，361°积极践行“热爱”文化，将品牌、研发、设计、生产、经销融为一体，产品包括运动鞋、服及相关配件、童装、时尚休闲等多种品类，致力成为全球最令人尊敬的运动品牌企业之一。">
<link href="../../home/css00/css.css" rel="stylesheet" type="text/css" />
<link href="../../home/css00/product-new.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
<link href="../../home/css00/default.css" rel="stylesheet" type="text/css" />
</head>
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
					<li class="pointer"><a href="{{ URL('/info') }}" target="_blank" class="dd">品牌新闻</a></li>
					<!--<li class="pointer"><a href="http://rio2016.361sport.com.br/" target="_blank" class="dd" style="color:red;">里约奥运</a></li>-->
					<li class="pointer"><a href="{{ URL('/pages') }}" target="_blank" class="dd" style="color:red;">敢超10K</a></li>
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
					<a class="topcart" href="{{ URL('/count') }}" target="_blank" >(<span class="gouwuche-num">0</span>)</a>
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

<!--flash Begin-->

<!--flash End-->
<div class="fl-category"><b>所有分类</b> </div>
<div class="search-result clearfix">
	<div class="search-menu">
			<div class="smenu-list">
			<h4 class=" clearfix">选择品牌<span>&nbsp;</span></h4>
			<ul class="clearfix" style="display:block;">
				<a href="http://www.361sport.com/index.php?m=Product&a=index&brand=5"><li><img src="../../home/images/5618cf09a4db1.jpg" /></li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&brand=6"><li><img src="../../home/images/5618ceee526e3.jpg" /></li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&brand=2"><li><img src="../../home/images/5618cee3cca0d.jpg" /></li></a>			</ul>
		</div>
		<div class="smenu-list border-top">
			<h4 class="open clearfix">性别<span>&nbsp;</span></h4>
			<ul class="smenulist clearfix" >
				<a href="http://www.361sport.com/index.php?m=Product&a=index&sex=1"><li>男子</li></a>
				<a href="http://www.361sport.com/index.php?m=Product&a=index&sex=0"><li>女子</li></a>
				<!--<a href="#"><li>成人通用</li></a>
				<a href="#"><li>儿童通用</li></a>
				<a href="#"><li>男童</li></a>
				<a href="#"><li>女童</li></a>-->
			</ul>
		</div>
		<div class="smenu-list border-top">
			<h4 class="open clearfix">运动类型<span>&nbsp;</span></h4>
			<ul class="smenulist clearfix" >
				<a href="http://www.361sport.com/index.php?m=Product&a=index&sports=12"><li>跑步</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&sports=13"><li>篮球</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&sports=14"><li>足球</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&sports=15"><li>小球类</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&sports=16"><li>户外</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&sports=17"><li>运动生活</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&sports=20"><li>综训</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&sports=42"><li>时尚休闲</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&sports=47"><li>游泳</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&sports=77"><li>情侣专区</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&sports=79"><li>海外</li></a>			</ul>
		</div>
		</div>
	<div class="search-list">
				<div class="search-choose clearfix">
			<div class="youchoose"><b>您的选择：</b></div>
			<div class="chooseleft">
							</div>
			<div class="chooseright"><a href="/index.php?m=Product&a=index">全部撤销</a><span>共<em>2376</em>件产品</span></div>
		</div>
		<div class="sr-chooseCon">
			<div id="other-search">
				<div class="chooseCon01">
					<table  cellpadding="0" cellspacing="0">
						<tr valign="top">
							<td class="choosetitle">尺&nbsp;&nbsp;&nbsp;码</td>
							<td  id="chimasize">
								<ul class="clearfix">
									<li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=XS">XS</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=S">S</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=M">M</a></li>
								</ul>
							</td>
							<td id="more"><a href="javascript:void(0);"></a></td>
						</tr>
					</table>
				</div>
				<div class="chooseCon01">
					<table cellpadding="0" cellspacing="0">
						<tr  valign="top">
							<td  class="choosetitle">颜&nbsp;&nbsp;&nbsp;色</td>
							<td>
								<ul class="clearfix">
									<li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E7%99%BD">白</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E7%BA%A2">红</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E9%BB%84">黄</a>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class="chooseCon01">
					<table  cellpadding="0" cellspacing="0">
						<tr valign="top">
							<td class="choosetitle">上市时间</td>
							<td id="chimasize">
								<ul class="clearfix">
									<li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016%E6%98%A5%E5%AD%A3">2016春季</a></li>

									<li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016%E5%B9%B4%E5%A4%8F%E5%AD%A3">2016年夏季</a></li>

									<li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016%E5%B9%B4%E7%A7%8B%E5%AD%A3">2016年秋季</a></li>
									
									<li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016%E5%B9%B4%E5%86%AC%E5%AD%A3">2016年冬季</a></li>
									

																	</ul>
							</td>
							<td id="more"><a href="javascript:void(0);"></a></td>
						</tr>
					<table>
				</div>
				<div class="chooseCon01 chooselast">
					<table cellpadding="0" cellspacing="0">
						<tr  valign="top">
							<td class="choosetitle">价&nbsp;&nbsp;&nbsp;格</td>
							<td>
								<ul class="clearfix">
									<li class="choosetitle">价&nbsp;&nbsp;&nbsp;格</li>
									<li><a href="http://www.361sport.com/index.php?m=Product&a=index&price=1">0-100</a></li><li><a href="http://www.361sport.com/index.php?m=Product&a=index&price=2">100-200</a></li><li><a href="http://www.361sport.com/index.php?m=Product&a=index&price=3">200-300</a></li><li><a href="http://www.361sport.com/index.php?m=Product&a=index&price=4">300-1000</a></li><li><a href="http://www.361sport.com/index.php?m=Product&a=index&price=5">1000以上</a></li>									<li><input type="text" name="minprice" value="¥" />&nbsp;-&nbsp;<input type="text" name="maxprice" value="¥" /><input type="submit" name="submit" class="submit" value="确定" /></li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<a href="javascript:void(0);" class="openicon"><span>收起</span></a>
		</div>
		<div class="search-order">
            <span class="pxfs">排序方式：</span><a class=" order-time" href="http://www.361sport.com/index.php?m=Product&a=index&groupby=1&sort=ASC"><span >按上市时间排序</span></a><a href="http://www.361sport.com/index.php?m=Product&a=index&groupby=2&sort=ASC"><span  >按价格排序</span></a><a href="http://www.361sport.com/index.php?m=Product&a=index&groupby=3&sort=ASC"><span >按销量排序</span></a>
        </div>
		<div class="p_right">
			<ul class="clearfix"  id="container">
				<!-- 遍历以下<li>  内容 </li> -->
			<li>
            	<div class="prli">
                	<div class="prl_top"></div>
                    <div class="prl_c">
                    	<div class="prl_pic" style="position:relative;">
                        	<a id="masterMap" href="{{ URL('/ShopList') }}" target="_blank"><img src="../../home/images/5618cee3cca0d.jpg" class="bigpic scrollLoading" height="189" width="189"> </a>
                        </div>
                        <div class="prl_2 clearfix">
                            <div class="prl_color">3色</div>
                            <div class="prl_title">
                            <div class="title">长袖T恤</div>
                            </div>
                            <div class="prl_des">
                            	￥159.00                                <span>吊牌价<font>￥159.00</font></span>
                            </div>
                        </div>
                    </div>
                    <div class="prl_bottom"></div>
                </div>
            </li>

        </div>
		<div class="page" >
        	2376 条记录 1/60 页    <span class='current'>1</span> <a href='/index.php?m=Product&a=index&p=2'>&nbsp;2&nbsp;</a> <a href='/index.php?m=Product&a=index&p=3'>&nbsp;3&nbsp;</a> <a href='/index.php?m=Product&a=index&p=4'>&nbsp;4&nbsp;</a> <a href='/index.php?m=Product&a=index&p=5'>&nbsp;5&nbsp;</a> <a href='/index.php?m=Product&a=index&p=6'>&nbsp;6&nbsp;</a> <a href='/index.php?m=Product&a=index&p=7'>&nbsp;7&nbsp;</a> <a href='/index.php?m=Product&a=index&p=8'>&nbsp;8&nbsp;</a> <a href='/index.php?m=Product&a=index&p=9'>&nbsp;9&nbsp;</a> <a href='/index.php?m=Product&a=index&p=10'>&nbsp;10&nbsp;</a> <a href='/index.php?m=Product&a=index&p=2'>下一页></a> <a href='/index.php?m=Product&a=index&p=60' >最后一页</a>        </div>
	</div>
</div>
<script src="../../home/Scripts00/wb.js" type="text/javascript" charset="utf-8"></script>
<div id="bottom">
	<!--商标-->
    <div class="trademark">
    	<div class="trademark-content" style="width:1180px;">
            <div class="trademark-tip">
            	<img src="../../home/images/foot2016.png" />
             </div> 
     </div>
      <div class="promis">
             	<div class="promis-content">
                	<div class="promise-con">
                    	<ul>
                           <li>
                            	<div class="promise-left"><img src="../../home/images/guanfang-pic.png" width="91" height="34" /></div>
                                <div class="promise-right" style="width:77px;">所售商品 均为官方正品</div>
                                <div class="promise-bot"></div>
                          </li>
                            <li>
                            	<div class="promise-left"><img src="../../home/images/sever.png" width="134" height="34" /></div>
                              <div class="promise-right">7天无理由退换货 贴心售后服务</div>
                              <div class="promise-bot"></div>
                          </li>
                            <li>
                            	<div class="promise-left"><img src="../../home/images/shiwu.png" width="136" height="34" /></div>
                              <div class="promise-right">100%实物拍摄 如实详情描述</div>
                              <div class="promise-bot"></div>
                          </li>
                          <li>
                            	<div class="promise-left"><img src="../../home/images/baoyou.png" width="136" height="34" /></div>
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
                <dd><a href="http://ir.361sport.com/s/index.php" target="_blank">投资者关系</a></dd>
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
                            <dt>联系敢死队官方商城</dt>
                            <dd class="tel">
                                <div class="phone-left"><img src="../../home/images/phone.png" width="42" height="42" /></div>
                                <div class="phone-right">
                                    <span class="p1">110/120</span>
                                    <span class="p2">&nbsp;&nbsp;在线时间：周一至周五<br>(9:00-12:00   13:00-18:00)<br></span>
                                </div>
                            </dd>
                            <dd style="margin-bottom:0px;">
                                <div class="phone-left"><a href="tencent://message/?uin=476849964&Site=qq&Menu=yes"><img src="../../home/images/qq.png" width="45" height="43" /></a></div>
                                <div class="phone-right">
                                    <div class="fourtime"><a href="tencent://message/?uin=476849964&Site=qq&Menu=yes">== 敢死队在线客服 ==</a></div>
                                </div>
                            </dd>
                            <dd style="padding-left:78px;">
                                <div class="phone-right">
                                    <div class="fourtime5"><a href="tencent://message/?uin=1317103248&Site=qq&Menu=yes">QQ:1317103248</a></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
					<div class="clear"></div>

                  </div>
                </div>
                
      </div>
      <div class="Certificate">中国 闽ICP备05003868号 ©2013 三六一度(中国)有限公司 All Rights Reserved</div>
    </div>
</div>
<div class="newfloat">
    <div class="float-tip"><img src="../../home/images/float-tip.png" /></div>
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
         <img src="../../home/images/index2_01.jpg" width="174" height="174" />
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
  <div class="back-top"><a href="#"><img src="../../home/images/back-top.png" width="48" height="48" /></a></div>
  </div>
</div>
<div style="display:none;">
<div id="inline6" style="width:820px;height:600px;overflow:auto; margin:auto;">
    <img src="../../home/images/qureai-tanchuang.jpg"/>
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
<script type="text/javascript" src="../../home/Scripts00/jquery.js"></script>
<script type="text/javascript" src="../../home/Scripts00/artdialog.js"></script>
<script type="text/javascript" src="../../home/Scripts00/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="../../home/Scripts00/common.js"></script>
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
<script type="text/javascript" src="../../home/Scripts00/jquery.scrollloading-min.js"></script>
<script type="text/javascript" src="../../home/Scripts00/superslide.2.1.js"></script>
<script type="text/javascript" src="../../home/Scripts00/artdialog.js"></script>
<script type="text/javascript">
$(function(){
	//flash
	$(".variousv").fancybox({
            'padding' : 0, 'autoScale' : false, 'transitionIn' : 'none', 'transitionOut' : 'none', 'width' : 860, 'height' : 524, 'overlayColor' : '#000'
     });
	//silde
		//other-search
	$("a.openicon").click(function(){
		if( $(this).find("span").hasClass("up") ){
			$("#other-search").slideDown("slow");
			$(this).find("span").removeClass("up").html("收起");
			return true;
		} else { //不存在时候为展开
			$("#other-search").slideUp("slow");
			$(this).find("span").addClass("up").html("展开");
			return true;
		}
	});
	//left-menu
	$(".smenu-list>h4").click(function(){
		if( $(this).hasClass("open") ){
			$(this).siblings("ul").slideDown("slow");
			$(this).removeClass("open");
			return true;
		} else {
			$(this).siblings("ul").slideUp("slow");
			$(this).addClass("open");
			return true;
		}
	});
	//左边JS
	$("td#more>a").click(function(){
		var height = $(this).parent().parent().parent().parent().parent().height();
		if( height == '34' ){
			$(this).parent().parent().parent().parent().parent().animate({"height":"68px"});
		} else {
			$(this).parent().parent().parent().parent().parent().animate({"height":"34px"});
		}
	});
	//itemlist
	$(".scrollLoading").scrollLoading();
	$(".pclass_title").live("click",function() {
		if(!($(this).hasClass("open"))){
			var $pclass = $(this).parent().find(".pclass");
			$(this).addClass("open").removeClass("close");
			$pclass.slideDown()	
		} else {
			var $pclass = $(this).parent().find(".pclass");
			$(this).addClass("close").removeClass("open");
			$pclass.slideUp()
		}	
	});
	$(".pre-pic").click(function() {
		n=parseInt($(this).parent().find(".num").html());
		videoWidth = $(this).parent().find("li").width();
		n=n-3;
		if(n<0) { n=n+3; return false; } else {
			$(this).parent().find(".spiclist>ul").animate({left:-n*videoWidth});
			$(this).parent().find(".num").html(n)
		}
	});
	$(".next-pic").click(function() {
		n=parseInt($(this).parent().find(".num").html());
		n=n+3;
		videoLen = $(this).parent().find("li").length;
		videoWidth = $(this).parent().find("li").width();
		if(n>=videoLen) { n=n-3; return false; } else {
			$(this).parent().find(".spiclist>ul").animate({left:-n*videoWidth});
			$(this).parent().find(".num").html(n)
		}
	});
	$(".p_right ul li").hover(function() {
		$(this).css("z-index","100");
		$(this).find(".prli").addClass("check");
		videoLen = $(this).find("li").length;
		videoWidth = $(this).find("li").width();
		$(this).find("ul").css({width:videoLen*videoWidth,left:"0"});
	},function(){
		$(this).css("z-index","0");
		$(this).find(".prli").removeClass("check");	
	});
	$(".spiclist ul li").find("img").hover(function() {
		var src=$(this).attr("data-img");
		$(this).parents(".prl_pic").find(".bigpic").attr("src",src);
	});
});
</script>
</body>
</html>