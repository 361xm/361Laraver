/**
 * public js 2015/5/11 @Ljp
 */
 $(function(){
	var scroll_timer;
    var displayed = false;
    var $message = $(".backtop");
    var $window = $(window);
    var top = $(document.body).children(0).position().top;
    //澶撮儴瀵艰埅鍧�  渚ц竟鏍忓埌涓€瀹氶珮搴︽偓娴甁Q
	
   $(window).scroll(function(){
		if($(window).scrollTop() >685){
			$('.newfloat').addClass('comDiv');
			$('.newfloat2').addClass('comDiv');
		}
		else{
			$('.newfloat').removeClass('comDiv');
			$('.newfloat2').removeClass('comDiv');
		}
		
	});
	//鎵爜
	$(".float-saoma").mouseover( function(){
		  $(".float-saoma-erweima").show();
	});
	$(".float-saoma").mouseleave( function(){
	  $(".float-saoma-erweima").hide();
	});
	$(".float-down").click(function(){
		$(this).toggleClass('float-down2').toggleClass('float-down3');
		$(".float-download").fadeToggle("slow");
	});
	//header menu
	$('.mainlevel').mousemove(function(){
		$(this).find('.menusub').show();
		$(this).addClass('select');
	});
	$('.mainlevel').mouseleave(function(){
		$(this).find('.menusub').hide();
		$(this).removeClass('select');
	});
	//搴曢儴寰俊浜岀淮鐮�
	$(".weixin").hover(function(){
		$(this).find(".erweim").show();
	},function(){
		$(this).find(".erweim").hide();
	});
	  artDialog.confirm = function (content, yes, no) {
		return artDialog({
			id: 'Confirm',
			icon: 'question',
			fixed: true,
			lock: true,
			opacity: .1,
			content: content,
			ok: function (here) {
				return yes.call(this, here);
			},
			cancel: true
		});
	};
	artDialog.tips = function (content, time, icon) {
		return artDialog({
			id: 'Tips',
			title: false,
			cancel: false,
			fixed: true,
			icon:icon,
			padding: 0,
			lock: false
		})
		.content('<div style="padding: 0 1em; font-size:16px; color:#4d4d4d;">' + content + '</div>')
		.time(time || 1);
	};
	artDialog.notice = function (options) {
		var opt = options || {},
			api, aConfig, hide, wrap, top,
			duration = 800;
		var config = {
			id: 'Notice',
			left: '100%',
			top: '100%',
			padding:'11px 14px',
			fixed: true,
			drag: false,
			resize: false,
			follow: null,
			lock: false,
			init: function(here){
				api = this;
				aConfig = api.config;
				wrap = api.DOM.wrap;
				top = parseInt(wrap[0].style.top);
				hide = top + wrap[0].offsetHeight;
				wrap.css('top', hide + 'px')
					.animate({top: top + 'px'}, duration, function () {
						opt.init && opt.init.call(api, here);
					});
			},
			close: function(here){
				wrap.animate({top: hide + 'px'}, duration, function () {
					opt.close && opt.close.call(this, here);
					aConfig.close = $.noop;
					api.close();
				});
				return false;
			}
		};	
		for (var i in opt) {
			if (config[i] === undefined) config[i] = opt[i];
		};
		return artDialog(config);
	};

	artDialog.login = function(title){
		return artDialog({ 
			id: 'iframeLogin', 
			title: title, 
			content: $("#iframeLogin").html(),
			fixed: true,
			lock: true
		});
	}
	//iframelogin
	$("input.iframebutton").live("click",function(){
		var Laccount = $("input[name=Laccount]").val();
		var Lpassword = $("input[name=Lpassword]").val();
		if( !Laccount || Laccount == '鎵嬫満鍙�/浼氬憳鍚�/閭' ){ show_profile_error2("杈撳叆鐧诲綍鍚�"); return false; }
		if( !Lpassword ){ show_profile_error2("杈撳叆鐧诲綍瀵嗙爜"); return false; }
		$.post(loginUrl,{Laccount:Laccount,Lpassword:Lpassword},function( result ){
			if( result.status == '0' ){
				window.location.href=result.msg; return true;
			} else {
				show_profile_error2( result.msg ); return false;
			}
		},"json");
	});
	$("span.signIn").find("a.in").live("click",function( result ){
		$.post(signUrl,{},function( result ){
			if( result.status == '0' ){
				$("span.signIn").find("a.in").html( result.msg ).removeClass("in"); return true;
			} else if( result.status == '1' ) {
				artDialog.tips( result.msg,3,"error" ); return false;
			} else{
				artDialog.login("璐︽埛鐧婚檰"); return false;
			}
		},"json");
	});
	//鐖卞績閫氶亾
	$(".aixintd").click(function(){
		$("#aixintd").show();
	});
	//鏅鸿兘绔ラ瀷鍏戞崲
	$(".zntxduihuan").click(function(){
		$("#zntxdhan").show();
	});
	//鏅鸿兘绔ラ瀷鍏戞崲
	$(".zntxduihuan").click(function(){
		$("#zntxdhan").show();
	});
	$(".zhm_submit").click(function(){
		var code=$(".zntxinput").val();
		$.post(zhm_Url,{code:code},function( result ){
			if( result.status == '0' ){
				window.location.href=result.msg; return true;
			} 
			if( result.status == '1' ){
				artDialog.tips( result.msg,3,"error" ); return false;
			} 
		},"json");
		$("#zntxdhan").hide();
		$("#zntxdh").show();
	})
 });
 function show_profile_error2( msg ){
	$("div#profile_error").find("dd.profile_error").html(msg);
	$("div#profile_error").css({"display":"block"});
	setTimeout('$("div#profile_error").css({"display":"none"})',"2000");
}