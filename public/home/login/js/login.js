$(document).ready(function(){
	var istel=0; var isemail=0; var isac=0;
	//login
	$("input[name=button]").live("click",function( result ){
		var Laccount=$('#Laccount').val();
		var Lpassword=$('#Lpassword').val();
		var is_qqsina=$('#is_qqsina').val();
		var savecookie=0;
		if ( $("input[name='savecookie']:checked").size() == 1 )	savecookie=1;
		if( !Laccount || Laccount == '用户名或手机或邮箱' ){ show_profile_error("请输入您的帐号"); return false; }
		if( !Lpassword ){ show_profile_error("请输入您的密码"); return false; }
		$.post(loginUrl,{Laccount:Laccount,Lpassword:Lpassword,savecookie:savecookie,is_qqsina:is_qqsina},function( result ){
			if( result.status == '0' ){
				window.location.href=result.msg; return true;
			} else {
				show_profile_error( result.msg ); return false;
			}
		},"json");
	});
	get_radio();
	//radio
	$(".radio").live("click",function(){
		get_radio();
	});
	//register
	$("input[name=button2]").live("click",function( result ){
		var mobile = email = "";
		var radio = $('input:radio:checked').val();
		if( radio == 'tel' ){
			 mobile = $("input#mobile").val();
			if( !mobile ){ profile_error_reg("请输入手机号"); return false; }
			if( mobile ){
				var reg = /^1[3|4|5|8]\d{9}$/;
				if( !reg.test(mobile) ){ profile_error_reg("请输入正确的手机号码" ); return false;   }
			}
		}
		if( radio == 'mail' ){
			email = $("input#email").val();
			if( !email ){ profile_error_reg("请输入邮箱"); return false; }
			if( email ){
				var reg =  /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
				if( !reg.test(email) ){ profile_error_reg("请输入正确的邮箱" ); return false;   }
			}
		}
		var ac = $("input#account").val();
		var account = $("input#account").val();
		if( !account ){ profile_error_reg("请输入用户名"); return false; }
		var reg = /^[a-zA-Z0-9_]{6,30}$/;
		if( !reg.test(account) ){ profile_error_reg("用户名由6位以上字母或数字组成" ); return false;   }
		var pwd = $("input#password").val();
		if( !pwd ){ profile_error_reg("请输入密码"); return false; }
		var repwd = $("input#repassword").val();
		if( !repwd ){ profile_error_reg("请输入确认密码"); return false; }
		if( pwd != repwd ){ profile_error_reg("两次密码不一致"); return false; }
		if( radio == 'tel' ){
			var code = $("input#sms_code").val();
			if( !code ){ profile_error_reg("请输入短信验证码"); return false; }
		}
		var ydxy = $("input[name='yuedu']:checked").size();
		if( !ydxy ){ profile_error_reg("请阅读并同意《361°商城协议》！"); return false; }
		var is_qqsina=$('#is_qqsina').val();
		$.post(regUrl,{account:ac,mobile:mobile,email:email,password:pwd,repwd:repwd,radio:radio,code:code,ydxy:ydxy,is_qqsina:is_qqsina},function( result ){
			if( result.status == '0' ){
				if( result.msg.type == 'tel' ){ window.location.href=result.msg.info; }
				if( result.msg.type == 'mail' ) { window.location.href=result.msg.info; }
				return true;
			} else {
				profile_error_reg( result.msg ); return false;
			}
		},"json");
	});
	//获取手机验证码
	$("input#get_code").live("click",function( result ){
		var mobile=$('#mobile').val();
		var type = $(this).attr("data-type");
		if( !mobile ){ profile_error_reg("请输入手机号"); return false; }
		if( mobile ){
			var reg = /^1[3|4|5|8]\d{9}$/;
			if( !reg.test(mobile) ){ profile_error_reg("请输入正确的手机号码" ); return false;   }
		}
		//弹出弹窗
		var iframeStr = show_logincode_iframe(type);
		$("body").append(iframeStr);
		 return true;
	});
	//关闭窗口
	$("div.loginiframeclose a").live("click",function(){
		$("div#loginiframe").remove();
	});
	//修改验证码
	$("div.login-pic-code img").live("click",function(){
		var timenow = new Date().getTime();
		var nowcodeurl = tcodeUrl+'&t='+timenow;
		$(this).attr("src",nowcodeurl);
		return true;
	});
	//发送短信
	$("a.iframebtn").live("click",function(){
		var mobile = $('#mobile').val();
		var tcode = $("input[name=piccode]").val();
		var timenow = new Date().getTime();
		var obj = $("div.login-pic-code img");
		var type = $(this).attr("data-type");
		var nowcodeurl = tcodeUrl+'&t='+timenow;
		if( !tcode ){ alert("请输入验证码"); return false; }
		$.post(codeUrl,{mobile:mobile,tcode:tcode,type:type},function( result ){
			if( result.status == '0' ){
				code_timeout();
				$("div#loginiframe").remove();
				return true;
			} else {
				$("div#loginiframe").remove();
				profile_error_reg( result.msg );
				if( result.status =='2' ){ obj.attr("src",nowcodeurl); }
				return false;
			}
		},"json");
	});
	//发送邮箱
	$('#get_mailcode').click(function(){
		email=$('#email').val();
		if(email){
			var reg =  /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
			if( !reg.test(email) ){ profile_error_reg("请输入正确的邮箱" ); return false;   }
			$.post(emailcodeUrl,{email:email},function(e){
				if(e.status==0){
					code_timeout();		return true;			
				} else{ profile_error_reg( e.msg ); return false; }
			},'json')	
		}else { profile_error_reg("请输入邮箱" ); return false; }
	});
	//绑定登录选项卡
	$(".ynLogin li").click(function(){
			var formindex=$(this).index();
			$(".login_c").find("form").eq(formindex).show().siblings().hide();
			$(this).addClass("on").siblings().removeClass("on");
		});
	//getpwd
	$("input#check_code").live("click",function( result ){
		var mobile = email = "";
		var radio = $('input:radio:checked').val();
		if( radio == 'tel' ){
			 mobile = $("input#mobile").val();
			if( !mobile ){ profile_error_reg("请输入手机号"); return false; }
			if( mobile ){
				var reg = /^1[3|4|5|8]\d{9}$/;
				if( !reg.test(mobile) ){ profile_error_reg("请输入正确的手机号码" ); return false;   }
			}
			var code = $("input#sms_code").val();
			if( !code ){ profile_error_reg("请输入短信验证码"); return false; }
		}
		if( radio == 'mail' ){
			email = $("input#email").val();
			if( !email ){ profile_error_reg("请输入邮箱"); return false; }
			if( email ){
				var reg =  /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
				if( !reg.test(email) ){ profile_error_reg("请输入正确的邮箱" ); return false;   }
			}
			var code = $("input#mail_code").val();
			if( !code ){ profile_error_reg("请输入邮箱验证码"); return false; }
		}
		$.post(getpwdUrl,{radio:radio,mobile:mobile,email:email,code:code,steep:1},function( result ){
			if( result.status == '0' ){
				$("#getpwdsteep1").css("display","none");
				$("#getpwdsteep2").css("display","block");
			} else {
				profile_error_reg(result.msg); return false;
			}
		},"json");
	});
	//确认修改密码
	$("#editpwd_s").click(function() {
		var npwd = $("#newPWD").val();
		var cpwd = $("#newPWD2").val();
		if( !npwd || !cpwd ){profile_error_reg("请输入新密码或者确认密码" ); return false;}
		if( npwd != cpwd){ profile_error_reg("两次输入的密码不一致"); return false }

		if($("#radiomail").attr("checked")=="checked"){
			var account=$('#email').val();
			var code=$('#mail_code').val();
			var getpwdtype=1;
		}
		if($("#radiotel").attr("checked")=="checked"){
			var account=$("#mobile").val();
			var code=$("#sms_code").val();
			var getpwdtype=2;
		}
		if( account==''){	profile_error_reg("帐号不能为空！");return false;	}
		if( code==''){profile_error_reg("验证码不能为空！");return false;}
		$.post(getpwdUrl,{account:account,code:code,getpwdtype:getpwdtype,npwd:npwd,steep:2},function(e){
				if(e.status==0){
					show_profile_success("修改密码成功,请登录会员！");
					window.setTimeout(function(){ location.href=e.msg; },2000); return true;
				}else	{
					profile_error_reg(e.msg);
				}
			},'json')
		return true;
	});
});
function get_radio(){
	 var radio = $('input:radio:checked').val();
	$("#tel").hide();
	$("#mail").hide();
	$("#duanxin").hide();
	$("#maillyz").hide();
	if(radio=='tel')  {  $("#duanxin").show();  $("#tel").show();}
	else	{$("#maillyz").show();$("#mail").show();}
}
function show_profile_error( msg ){
	$("div#profile_error").find("dd.profile_error").html(msg);
	$("div#profile_error").css({"display":"block"});
	setTimeout('$("div#profile_error").css({"display":"none"})',"2000");
}
function show_profile_success( msg ){
	$("div#profile_error_reg").find("dd").removeClass("profile_error").addClass("profile_success").html(msg);
	$("div#profile_error_reg").css({"display":"block"});
	setTimeout('$("div#profile_error_reg").css({"display":"none"})',"2000");
}

function profile_error_reg( msg ){
	$("div#profile_error_reg").find("dd.profile_error").html(msg);
	$("div#profile_error_reg").css({"display":"block"});
	setTimeout('$("div#profile_error_reg").css({"display":"none"})',"2000");
}

//重载验证码
 function fleshVerify(){ 
        $('#verifyImg').attr('src',"{:U('Member/verify',array('t'=>time()))}");
    }
//判断密码长度
function getStrength(passwd){
	var intScore = 0;
	if (passwd.match(/[a-z].*[a-z].*[a-z]/))	intScore = (intScore+1)
	if (passwd.match(/[A-Z].*[A-Z].*[A-Z]/))	intScore = (intScore+1)
	if (passwd.match(/(\d.*\d.*\d)/))	intScore = (intScore+1)
	return intScore;
}
//判断密码强度
function getStrong(obj) {
	var string = $(obj).val();
	var intScore = getStrength(string);
	if( intScore <=1 ){ $(".grade>ul").find("li.grade_1").addClass("check"); $(".grade>ul").find("li").not(".grade_1").removeClass("check"); return true; }
	if( intScore <=2 && intScore>1 ){ $(".grade_2").addClass("check"); $(".grade>ul").find("li").not(".grade_2").removeClass("check"); return true; }
	if( intScore <=3 && intScore>2 ){ $(".grade>ul").find("li.grade_3").addClass("check"); $(".grade>ul").find("li").not(".grade_3").removeClass("check"); return true;}
}
//倒计时
var seconds=120;
function code_timeout(){
	var radio = $('input:radio:checked').val();
	if(seconds>0){
		var strTimeOut = '<a class="code_timeout">'+seconds+' 秒后可重新发</a>';
		$("dl#maillyz>dd,dl#duanxin>dd").find("a.code_timeout").remove()
		if(radio=="tel"){
			$('#get_code').hide();
			$("dl#duanxin>dd").append(strTimeOut);
		} else{
			$('#get_mailcode').hide();
			$("dl#maillyz>dd").append(strTimeOut);
		}
	}else	{
		$("dl#maillyz>dd").find("a.code_timeout").remove();
		$("dl#duanxin>dd").find("a.code_timeout").remove();
	    if(radio=="tel")	$('#get_code').show();
		if(radio=="mail")$('#get_mailcode').show();
		seconds=120;
		return false;
	}
	seconds--;
	setTimeout('code_timeout()',1000);
}

function show_logincode_iframe( type ){
	//获取当前时间
	var timenow = new Date().getTime();
	var nowcodeurl = tcodeUrl+'&t='+timenow;
	var str = '<div id="loginiframe">';
	str += '<div class="loginiframe"></div>';
	str += '<div class="loginiframetab">';
	str += '<div class="loginiframetab">';
	str += '<div class="loginiframeclose clearfix"><a href="javascript:void(0);">&nbsp;</a></div>';
	str += '<div class="logincode">请输入验证码</div>';
	str += '<div class="login-pic-code clearfix"><label>验证码：</label><input type="text" name="piccode" value="" size="10"/><img src="'+nowcodeurl+'" title="看不清？换一张"/></div>';
	str += '<a class="iframebtn" data-type="'+type+'" href="javascript:void(0);">发送短信</a>';
	str += '</div>';
	str += '</div>';
	return str;
}