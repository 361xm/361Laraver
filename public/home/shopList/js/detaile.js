/**
 * detaile js 2015/5/8 @Ljp
 */
$(function(){
	$(window).scroll(function(){
		if($(window).scrollTop() >740){
			if($('.pv_topgm').hasClass('active')){
			}
			else{
				$(".pv_topgm").show();
			}
		}
		else{
			$(".pv_topgm").hide();
		}
	});
	$(".jqzoom").imagezoom({xzoom:"415",yzoom:"415"});
	$("div.smallpic").find("a").hover(function(){
		$("div.smallpic").find("a").removeClass("check");
		$(this).addClass("check");
		$(".jqzoom").attr('src',$(this).find("img").attr("data-mig"));
		$(".jqzoom").attr('rel',$(this).find("img").attr("data-big"));
	},function(){});
	//滚动
	//$(".kjdpic").jdMarquee({width:268,auto:true,height:20,step:1});
	$(".kjdpic").find("li").hover(function(){
		var thumb = $(this).attr("data-thumb");
		$("#bigkjdpic").find("img").attr("src",thumb);
		$("#bigkjdpic").fadeIn("slow");
	},function(){ $("#bigkjdpic").fadeOut("slow"); });
	//收藏js 
	$("span.favorites").live("click",function(){
		var proId = $(this).attr("data-tid");
		if( !proId ) { return false; }
		$.post(collectUrl,{proid:proId},function( result ){
			if( result.status == '1' ){
				artDialog.tips(result.msg,2,"error"); return false;
			}else if( result.status == '2' ){
				artDialog.login("账户登陆"); return false;
			} else{
				artDialog.tips(result.msg,2,"succeed"); return true;
			}
		},"json");
	});
	//热销款刷新
	$("a.hotrefresh").live("click",function(){
		$.post(hotsellUrl,{},function( result ){
			$(".hotsell dl").html(result);
		});
	});
	//套餐切换
	$("#topul").find("li").hover(function(){
		var index=$(this).index();
		$(this).addClass("topname").siblings().removeClass("topname");
		$(".package").find(".package-list").hide();
		$(".package").find(".package-list").eq(index).show();
	});
	//color and picture
	$("div.contnet_color>dl").find("dd.doselected").live("click",function( result ){
		$(this).addClass("check").siblings("dd").removeClass("check");
		var color = $(this).attr("data-color");
		var size = $("div.contnet_size>dl").find("dd.check").attr("data-sizes");
		var sizeStr = changeColorSize(color,1,size);
		$("div.contnet_size>dl").html(sizeStr); 
		changePicList(color);
		$("input#cartnum").val("1");
		return true;
	});
	//size
	$("div.contnet_size>dl").find("dd.doselected").live("click",function( result ){
		$(this).addClass("check").siblings("dd").removeClass("check");
		var size = $(this).attr("data-sizes");
		var color = $("div.contnet_color>dl").find("dd.check").attr("data-color");
		var colorStr = changeColorSize(size,2,color);
		$("input#cartnum").val("1");
		$("div.contnet_color>dl").html(colorStr); return true;
	});

	/**
	 *  add number 2015/5/13 @Ljp
	 */
	$("dd.input2").find("span.up").live("click",function(){
		var nowNumber = $("input#cartnum").val();
		var maxNumber = $("em#pro_count_ku").html();
		nowNumber++;
		$("input#cartnum").val(nowNumber);
		if( nowNumber > maxNumber ) {
			$("div.buy>span.buynow").find("a").addClass("nopost");
			$("div.buy>span.addmycart").find("a").addClass("noaddcard");
			$("div.kuc-error").fadeIn("slow");
			return true;
		}
	});

	/**
	 * less number 2015/5/13 @Ljp
	 */
	$("dd.input2").find("span.down").live("click",function(){
		var nowNumber = $("input#cartnum").val();
		var maxNumber = $("em#pro_count_ku").html();
		nowNumber--;
		if(nowNumber <= 0) return false; 
		else {
			$("input#cartnum").val(nowNumber);
			if( nowNumber <= maxNumber ){
				$("div.buy>span.buynow").find("a").removeClass("nopost");
				$("div.buy>span.addmycart").find("a").removeClass("noaddcard");
				$("div.kuc-error").fadeOut("slow");
			}
			return true;
		}
	});
	/**
	 * package 2015/5/14 @Ljp
	 */
	$("div.shop-other>div.shop-items").find("i.chose").live("click",function(){
		var tcp = $("p.now-price").find("em").html();
		var yjp = $("p.old-price").find("em").html();
		var nowp = $(this).attr("data-oldprice");
		var price = $(this).parent().siblings("p.shop-price").find("em").html();
		$(this).toggleClass("owner");
		if( $(this).hasClass("owner") ){ //selected
			var ntcp = Number(tcp)+Number(price);
			var oyjp = Number(yjp)+Number(nowp);
		} else { //noselected
			var ntcp = Number(tcp)-Number(price);
			var oyjp = Number(yjp)-Number(nowp);
		}
		var savep = Number(oyjp)-Number(ntcp);
		$("p.save-price").find("em").html(savep.toFixed(2));
		$("p.now-price").find("em").html(ntcp.toFixed(2));
		$("p.old-price").find("em").html(oyjp.toFixed(2));
		return true;
	});
	/**
	 * 单品添加购物车 2015/5/13 @Ljp
	 */
	$("div.buy>span.addmycart").find("a:not(.noaddcard)").live("click",function(){
		if($(this).parents().hasClass('pv_topgm')){
			$('html,body').animate({scrollTop:105}, 100);
		}
		var color = $("div.contnet_color").find("dd.check").attr("data-color");
		var size = $("div.contnet_size").find("dd.check").attr("data-sizes");
		var number = $("input#cartnum").val();
		var proid = $(this).attr("data-tid");
		if( !color ) { artDialog.tips("请选择商品颜色",2,"warning"); return false; }
		if( !size ) { artDialog.tips("请选择商品尺码",2,"warning"); return false; }
		if( !number || number<=0 ) { artDialog.tips("请输入购买数量",2,"warning"); return false; }
		//submit
		$.post(cartAjax,{color:color,size:size,number:number,proid:proid},function( result ){
			if( result.status == '0' ){
				$("span.gouwuche-num").html(result.msg);
				$("div.gouwuche-num").html(result.msg);
				artDialog.tips("商品已加入购物车",2,"succeed"); return true;
			} else if( result.status == '2' ) {
				artDialog.login("账户登陆"); return false;
			} else {
				artDialog.tips(result.msg,2,"error"); return false;
			}
		},"json");
	});

	/**
	 * 单个商品购买 2015/6/4 @Ljp
	 */
	$("div.buy>span.buynow").find("a:not(.nopost)").live("click",function(){
		if($(this).parents().hasClass('pv_topgm')){
			$('html,body').animate({scrollTop:105}, 100);
		}
		var color = $("div.contnet_color").find("dd.check").attr("data-color");
		var size = $("div.contnet_size").find("dd.check").attr("data-sizes");
		var number = $("div.num").find("input#cartnum").val();
		var proid = $(this).attr("data-tid");
		var zti = $("#zti").val();
		var tg_id = $(this).attr("tg_id");
		if( !tg_id ) { tg_id=0; }
		if( !color ) { artDialog.tips("请选择商品颜色",2,"warning"); return false; }
		if( !size ) { artDialog.tips("请选择商品尺码",2,"warning"); return false; }
		if( !number || number<=0 ) { artDialog.tips("请输入购买数量",2,"warning"); return false; }
		$.post(buyUrl,{color:color,size:size,number:number,proid:proid,tg_id:tg_id,zti:zti},function( result ){
			if( result.status == '0' ){	
				window.location.href=result.msg; return true;
			} else if( result.status == '2' ) {
				artDialog.login("账户登陆"); return false;
			} else {
				artDialog.tips(result.msg,2,"error"); return false;
			}
		},"json");
	});

	/**
	 * package addCart 2015/5/25 @Ljp
	 */
	 $("div.iframefooter").find("a").live("click",function(){
		var len = $(this).parent().siblings("div.iframebody").find("div.iframeitem").find("div.iteminfo:not(.frame-hide)").length;
		if( len<=1 ){ artDialog.tips("请选择搭配的商品",2,"error"); return false; }
		 var color = size = proid = kunum = tcnum = "";
		var tcnum = parseInt($("p.tc-num").find("input").val());
		var tcId = $(this).attr("data-tcId");
		var dtype = $(this).attr("data-type");
		for(var i=0; i<len; i++){
			var nsize = $(this).parent().siblings("div.iframebody").find("div.iframeitem").find("div.iteminfo:not(.frame-hide)").eq(i).find("dd#du-size").find("li.check").attr("data-size");
			var ncolor = $(this).parent().siblings("div.iframebody").find("div.iframeitem").find("div.iteminfo:not(.frame-hide)").eq(i).find("dd#du-color").find("li.check").attr("data-color");
			var nproid = $(this).parent().siblings("div.iframebody").find("div.iframeitem").find("div.iteminfo:not(.frame-hide)").eq(i).find("dd#du-color").attr("data-tid");
			var kunum = parseInt($(this).parent().siblings("div.iframebody").find("div.iframeitem").find("div.iteminfo:not(.frame-hide)").eq(i).find("span.tm-stock").html());
			if( !nsize || !ncolor || !nproid || !kunum ) { artDialog.tips("请选择套餐内的商品信息",2,"error"); return false;}
			if( kunum<tcnum ) { artDialog.tips("您所填写的商品数量超过库存",2,"error"); return false; }
			color += ncolor+",";
			size += nsize+",";
			proid += nproid+",";
		}
		$.post(tcAjax,{color:color.substring(0,color.length-1),size:size.substring(0,size.length-1),proid:proid.substring(0,proid.length-1),tcnum:tcnum,tcid:tcId,dtype:dtype},function( result ){
			if( result.status=='0' ){
				$("span.gouwuche-num").html(result.msg);
				$("div.gouwuche-num").html(result.msg);
				$("div.iframe").fadeOut("slow");
				artDialog.tips("商品已加入购物车",2,"succeed"); return true;
			} else if( result.status == '1') {
				artDialog.tips(result.msg,2,"error"); return false;
			} else if( result.status == '2' ){
				artDialog.login("账户登陆"); return false;
			} else {
				window.location.href=result.msg; return true;
			}
		},"json");
	 });
	 /*
	 头部立即购买关闭
	 */
	$(".gmclose").live("click",function(){
		$(".pv_topgm").hide();
		$(".pv_topgm").addClass("active");
		$(".pv_dh").css("padding-top","35px")
	});
	/**
	 * package 2015/5/18 @Ljp
	 */
	$("a.iframeclose").live("click",function(){
		$(this).parent().parent().parent().fadeOut("slow"); return true;
	});
	$("a.shop_buynow,a.shop-addcart").live("click",function(){
		var dtype = $(this).attr("data-type");
		var dcId = $(this).attr("data-tcid");
		if( !$("div.shop-other").find("i").hasClass("owner") ) { artDialog.tips("请选择搭配商品","2","warning"); return false; }
		$("div.shop-other").find("i").each(function(i){
			var ntid = $("div.shop-other").find("i").eq(i).attr("data-tid");
			if( $("div.shop-other").find("i").eq(i).hasClass("owner") ){
				$("div.iframe").find("div#iteminfo-"+ntid).removeClass("frame-hide");
			} else {
				$("div.iframe").find("div#iteminfo-"+ntid).addClass("frame-hide");
				$("div.iframe").find("div#iteminfo-"+ntid).find("li").removeClass("check");
			}
		});
		//price 
		$("div#iframe-tab-"+dcId).find("div.iframefooter").find("em").html($("div#package-list-"+dcId).find("p.now-price").find("em").html());
		//selected
		$("div#iframe-tab-"+dcId).find("div.iframe").fadeIn("slow"); 
		$("div#iframe-tab-"+dcId).find("div.iframefooter").find("a").attr("data-type",dtype);
		return true;
	});
	// tc size->color
	$("dd#du-size>ul").find("a:not(.no)").live("click",function(){
		var nsize = $(this).parent().attr("data-size");
		var ntid = $(this).parent().parent().parent().attr("data-tid");
		var ncolor = $(this).parent().parent().parent().parent().siblings("dl.tb-prop").find("ul").find("li.check").attr("data-color");
		var otherKuArr = $(this).parent().parent().parent().parent().parent().parent().parent().attr("data-kuId");
		$(this).parent().addClass("check").siblings().removeClass("check");
		var lastStr = changeOtherCS(nsize,ntid,ncolor,"",otherKuArr);
		$(this).parent().parent().parent().parent().siblings("dl.tb-prop").find("ul").html(lastStr);
	});
	//tc color->size
	$("dd#du-color").find("a:not(.no)").live("click",function(){
		var ncolor = $(this).parent().attr("data-color");
		var ntid =  $(this).parent().parent().parent().attr("data-tid");
		var nsize = $(this).parent().parent().parent().parent().siblings("dl.tb-prop").find("ul").find("li.check").attr("data-size");
		var otherKuArr = $(this).parent().parent().parent().parent().parent().parent().parent().attr("data-kuId");
		$(this).parent().addClass("check").siblings().removeClass("check");
		var lastStr = changeOtherCS(ncolor,ntid,nsize,"1",otherKuArr);
		$(this).parent().parent().parent().parent().siblings("dl.tb-prop").find("ul").html(lastStr);
	});
	//js tab
	$("div.tm_left").find("a").live("click",function(){
		var index = $(this).index();
		if(parseInt(index)==1){
			$("#sppl2").hide();
		}
		else{
			$("#sppl2").show();
		}
		$('html,body').animate({scrollTop:$('.dh3').offset().top-165}, 500);
		$(this).addClass("on").siblings("a").removeClass("on");
		$("div.dh3>ul li").eq(index).addClass("check").siblings().removeClass("check");
		$("div.splm").css({"display":"none"}).eq(index).css({"display":"block"});
		return true;
	});
	$("div.dh3>ul").find("li").live("click",function(){
		var index = $(this).index();
		if(parseInt(index)==1){
			$("#sppl2").hide();
		}
		else{
			$("#sppl2").show();
		}
		$(this).addClass("check").siblings("li").removeClass("check");
		$(".tm_left a").eq(index).addClass("on").siblings().removeClass("on");
		$("div.splm").css({"display":"none"}).eq(index).css({"display":"block"});
		return true;
	});
	//js for express
	$("div.pricekt>span").find("a").hover(function(){
		$("div#postage-express").show(); return true;
	},function(){
		$("div#postage-express").hide(); return true;
	});
	//input buy number
	$("input#cartnum").live("keyup",function(){
		var num = $(this).val();
		var now = $("em#pro_count_ku").html();
		if( parseInt(num)>parseInt(now) ) {
			$("div.buy>span.buynow").find("a").addClass("nopost");
			$("div.buy>span.addmycart").find("a").addClass("noaddcard");
			$("div.kuc-error").fadeIn("slow");
		} else {
			$("div.buy>span.buynow").find("a").removeClass("nopost");
			$("div.buy>span.addmycart").find("a").removeClass("noaddcard");
			$("div.kuc-error").fadeOut("slow");
		}
	});
});
/**
 * other change size or color 2015/5/18 @Ljp
 */
function changeOtherCS(colsize,ntid,ncs,type,otherKuArr){
	var kuStr = $.parseJSON(otherKuArr); //解析json
	var returnStr = "";
	if( kuStr ){
		for(var i=0; i<kuStr.length;i++){
			for(var j=0; j<kuStr[i].length;j++){
				if( type == '1' ){
					if( kuStr[i][j].proid == ntid && colsize == kuStr[i][j].pro_color){
						for( var k=(kuStr[i][j].number-1); k>=0; k-- ){
							var isSelected = '';
							var isSize = '';
							if( kuStr[i][j].colorsize[k].pro_count<=0 ) isSelected = 'class="no"';
							if( kuStr[i][j].colorsize[k].pro_sizes == ncs ) isSize = 'check';
							if( colsize && ncs && kuStr[i][j].colorsize[k].pro_sizes == ncs ) $("span#tm-stock-"+ntid).html(kuStr[i][j].colorsize[k].pro_count);
							returnStr += '<li class="'+isSize+'" data-size="'+kuStr[i][j].colorsize[k].pro_sizes+'"><a '+isSelected+' href="javascript:void(0);">'+kuStr[i][j].colorsize[k].pro_sizes+'</a></li>';
						}
					}
				} else {
					if( kuStr[i][j].proid == ntid ){
						var isSelected = '';
						var isSize = '';
						for( var k=0; k<kuStr[i][j].number;k++ ){
							if( colsize == kuStr[i][j].colorsize[k].pro_sizes && kuStr[i][j].colorsize[k].pro_count<=0 ) isSelected = 'class="no"';
							if( colsize && ncs && colsize == kuStr[i][j].colorsize[k].pro_sizes ) $("span#tm-stock-"+ntid).html(kuStr[i][j].colorsize[k].pro_count);
						}
						if( ncs == kuStr[i][j].pro_color ) isSize = 'check';
						returnStr += '<li class="tb-img '+isSize+'" data-color="'+kuStr[i][j].pro_color+'"><a '+isSelected+' style="background:url('+kuStr[i][j].pic1+') center center no-repeat; display:block; background-size:35px 35px;" title="'+kuStr[i][j].pro_color+'" alt="'+kuStr[i][j].pro_color+'"></a></li>';
					}
				}		
			}
		}
	}
	return returnStr;
}
/**
 * change size or color 2015/5/13 @Ljp
 */
function changeColorSize(colsize,type,select){
	//$("div.buy>span.buynow").find("a").removeClass("nopost");
	//$("div.buy>span.addmycart").find("a").removeClass("noaddcard");
	$("div.kuc-error").fadeOut("slow");
	if( type=='1' ){
		var optStr = $.parseJSON(skulist); //解析json
		var reStr = '<dt>尺码选择</dt>';
		if( optStr ){
			for(var i=0; i<optStr.length;i++){
				if( optStr[i].pro_color == colsize ){
					if( optStr[i].number > 0 ){
						for(var j=0; j<optStr[i].number; j++){
							var classStr = "";
							if(optStr[i].colorsize[j].pro_count >0) {
								classStr += 'doselected';
								if(optStr[i].colorsize[j].pro_sizes == select) classStr += ' check';
							} else classStr = 'no';
							reStr += '<dd class="'+classStr+'" data-sizes="'+optStr[i].colorsize[j].pro_sizes+'">';
							reStr += '<a>'+optStr[i].colorsize[j].pro_sizes+'</a>';
							reStr += '</dd>';
							if( optStr[i].pro_color === colsize && optStr[i].colorsize[j].pro_sizes === select ) $("em#pro_count_ku").html( optStr[i].colorsize[j].pro_count );
						}
					}
				}
			}
		}
	} else {
		var optStr = $.parseJSON(piclist);
		var optSku = $.parseJSON(skulist); //解析json
		 var reStr = '<dt>颜色分类</dt>';
		 if( optSku ){
			 for(var i=0; i<optSku.length;i++){
				if( optSku[i].number > 0 ){
					for(var j=0; j<optSku[i].number; j++){
						if( optSku[i].colorsize[j].pro_sizes == colsize ){
							if( optStr ){
								if( optStr[i].pro_color == optSku[i].pro_color ){
									var classStr = "";
									if(optSku[i].colorsize[j].pro_count >0) {
										classStr += 'doselected';
										if(optStr[i].pro_color == select) classStr += ' check';
									} else classStr = 'no';
									reStr += '<dd class="'+classStr+'" data-color="'+optSku[i].pro_color+'">';
									reStr += '<a title="'+optSku[i].pro_color+'" id="color_id"><img src="'+optStr[i].sig1+'" width="38" height="38"/></a>';
									reStr += '</dd>';
									if( optSku[i].colorsize[j].pro_sizes === colsize && optSku[i].pro_color === select ) $("em#pro_count_ku").html( optSku[i].colorsize[j].pro_count );
								}
							}
						}
					}
				}
			 }
		 }
	}
	return reStr;
}
/*
* change piclist 2015/5/13 @Ljp
*/
function changePicList(color){
	var picStr = '';
	var optStr = $.parseJSON(piclist); //解析json
	if( optStr ){
		for( var i=0; i<optStr.length; i++ ){
			if( optStr[i].pro_color == color ){
				if(optStr[i].pic1) picStr += '<a class="check"><img src="'+optStr[i].sig1+'" data-mig="'+optStr[i].mig1+'" data-big="'+optStr[i].pic1+'" width="97" height="97"/></a>';
				if(optStr[i].pic2) picStr += '<a><img src="'+optStr[i].sig2+'" data-mig="'+optStr[i].mig2+'" data-big="'+optStr[i].pic2+'" width="97" height="97"/></a>';
				if(optStr[i].pic3) picStr += '<a><img src="'+optStr[i].sig3+'" data-mig="'+optStr[i].mig3+'" data-big="'+optStr[i].pic3+'" width="97" height="97"/></a>';
				if(optStr[i].pic4) picStr += '<a><img src="'+optStr[i].sig4+'" data-mig="'+optStr[i].mig4+'" data-big="'+optStr[i].pic4+'" width="97" height="97"/></a>';
				$("div.smallpic").html(picStr);
				$("div.bigpic").find("img").attr("src",optStr[i].mig1);
				$("div.bigpic").find("img").attr("rel",optStr[i].pic1);
			}
		}
	}
	$(".jqzoom").imagezoom({xzoom:"415",yzoom:"415"});
	$("div.smallpic").find("a").hover(function(){
		$("div.smallpic").find("a").removeClass("check");
		$(this).addClass("check");
		$(".jqzoom").attr('src',$(this).find("img").attr("data-mig"));
		$(".jqzoom").attr('rel',$(this).find("img").attr("data-big"));
	},function(){});
}