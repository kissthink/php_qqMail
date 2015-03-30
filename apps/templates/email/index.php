<!DOCTYPE html>
<html lang="zh-cmn">
<head>
<title>163邮箱</title>
<meta content="text/html;charset=utf-8" http-equiv="content-type">
<meta content="IE=Edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="https://res.mail.qq.com/wapmail/zh_CN/htmledition/style/mobile/wap244407.css" type="text/css" rel="stylesheet">
<!--[if lt IE 10]>
<script>
(function() {
var a = ['header','footer','section','aside','article','nav','hgroup','figure','figcaption','time','mark','output','meter'];
for(var i = 0, m = a.length; i < m; i++) {document.createElement(a[i]);}
})();
</script>
<link rel="stylesheet" type="text/css" href="https://res.mail.qq.com/wapmail/zh_CN/htmledition/style/mobile/wap_ie21b7d5.css"/>
<![endif]-->
<link href="/static/img/qqmail_favicon_16h.png" sizes="16x16" type="image/png" rel="icon">
<link href="/static/img/qqmail_favicon_32h.png" sizes="32x32" type="image/png" rel="icon">
<link href="/static/img/qqmail_favicon_48h.png" sizes="48x48" type="image/png" rel="icon">
<link href="/static/img/qqmail_favicon_96h.png" sizes="96x96" type="image/png" rel="icon">
<link href="/static/img/qqmail_logo_ios_60h.png" rel="apple-touch-icon-precomposed">
<link href="/static/img/qqmail_logo_ios_114h.png" sizes="114x114" rel="apple-touch-icon-precomposed">
<link href="/static/img/qqmail_logo_ios_120h.png" sizes="120x120" rel="apple-touch-icon-precomposed">
<link href="/static/img/qqmail_logo_ios_152h.png" sizes="152x152" rel="apple-touch-icon-precomposed">
</head>
<body>
<div class="qm_frame today">
	<nav class="qm_frameNavbar qm_navbar" id="nv" cmd="nav" last="nav" mod="nav"><a href="/cgi-bin/mobile?sid=ntXgCnchp_-rd1IHSYPT6fN-,4,zuEgq4EB8&amp;t=phone#today,reload" class="qm_navbar_logo">163邮箱</a>
	<div class="func_growSpace">
	</div>
	<a href="/email/write" class="qm_btnIcon"><span class="qm_icon qm_icon_Compose"></span></a></nav><section class="qm_frameSidebar" id="fl" cmd="folderlist" last="folderlist" mod="folderlist">
	<div cnt="base">
		<div class="folderlist_content">
			<ul class="folderlist_list qm_list">
				<li class="folderlist_inbox qm_list_item qm_list_item_Accessory"><a cmd="list,1__" onclick="_e(event,this,'shoujianxiang')" class="qm_list_item_content"><span class="qm_list_item_icon"></span><span class="qm_list_item_textWrapper"><span class="qm_list_item_title">收件箱</span><span class="qm_list_item_subtitle"></span></span></a></li>
			</ul>
		</div>
	</div>
	</section><section class="qm_frameCnt" id="main_col">
	<div class="qm_loadingBlock" id="loading" style="display: none;">
		<div class="qm_loadingBlock_content">
			<div class="qm_loadingBlock_item qm_loadingBlock_item_Yellow">
			</div>
			<div class="qm_loadingBlock_item qm_loadingBlock_item_Red">
			</div>
			<div class="qm_loadingBlock_item qm_loadingBlock_item_Green">
			</div>
		</div>
	</div>
	<div style="display:none" id="foldermask" class="">
	</div>
	<div id="ct" cmd="today" last="today" mod="today">
		<div cnt="base">
			<div class="qm_toolbar qm_frameToolbar">
				<div class="qm_toolbar_left qm_toolbarSpace func_hideInPadMode">
					<span class="qm_toolbarTitle"></span>
				</div>
				<div class="qm_toolbar_right func_hideInPadMode">
					
				</div>
			</div>
			
			<div style="border-bottom:none;" class="qm_toolbar func_hideInPhoneMode">
				<div class="qm_toolbar_left qm_toolbarSpace">
					<span class="qm_toolbarTitle">您好，{{ $user }}</span>
				</div>
				<div class="qm_toolbar_right">
					
				</div>
			</div>
			<div class="today_infopanel qm_infopanel qm_infopanel_White qm_infopanel_Block">
				<div class="today_infopanel_item_Birthday today_infopanel_item">

					<div class="today_infopanel_item_content">
						欢迎来到网易邮箱客户端
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="qm_footer" id="footer">
		<p class="qm_footer_userInfo">
			{{ $smarty.session.username }} - <a href="/user/login_out">退出</a>
		</p>
		<nav class="qm_footer_links"><a href="javascript:void(0)">意见反馈</a>&nbsp;|&nbsp;<a href="javascript:void(0">登录查询</a>&nbsp;|&nbsp;基本版&nbsp;|&nbsp;<a href="javascript:void(0">标准版</a></nav>
		<p class="qm_footer_copyright">
			Copyright &copy; {{ $smarty.now|date_format:'%Y' }} Tencent Inc. All Rights Reserved.
		</p>
	</div>
	</section>
	<div id="ol">
	</div>
	<div id="popup">
	</div>
	<div class="qm_tipsAbs" id="tips">
	</div>
	<div style="display:none;" id="log_collect" class="app_wrap app_crash">
		<div class="app_crash_label" id="log_title">
		</div>
		<div class="app_crash_text">
			您可以重试或重新启动程序。<span class="app_crash_refresh" onclick="location.reload()"></span>
		</div>
		<div class="app_crash_links">
			<a href="javascript:;" id="log_detail">了解详情</a><a href="javascript:;" style="" id="log_send">发送错误报告</a>
		</div>
		<div class="app_crash_more" style="display:none;" id="log_console">
		</div>
	</div>
</div>
<script type="text/javascript">
function _e(event,obj,type)
{
	switch(type)
	{
		case 'shoujianxiang':
			location.href = '/email/show_list';
			break;
		default:
	}
}
</script>
</body>
</html>