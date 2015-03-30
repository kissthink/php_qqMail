<!DOCTYPE html>
<html lang="zh-cmn">
<head>
<title>163邮箱</title>
<meta content="text/html;charset=utf-8" http-equiv="content-type">
<meta content="IE=Edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="https://res.mail.qq.com/wapmail/zh_CN/htmledition/style/mobile/wap247d20.css" type="text/css" rel="stylesheet">
<!--[if lt IE 10]>
<script>
(function() {
var a = ['header','footer','section','aside','article','nav','hgroup','figure','figcaption','time','mark','output','meter'];
for(var i = 0, m = a.length; i < m; i++) {document.createElement(a[i]);}
})();
</script>
<link rel="stylesheet" type="text/css" href="https://res.mail.qq.com/wapmail/zh_CN/htmledition/style/mobile/wap_ie21b7d5.css"/>
<![endif]-->
<link href="http://mail.qq.com/zh_CN/htmledition/images/favicon/qqmail_favicon_16h.png" sizes="16x16" type="image/png" rel="icon">
<link href="http://mail.qq.com/zh_CN/htmledition/images/favicon/qqmail_favicon_32h.png" sizes="32x32" type="image/png" rel="icon">
<link href="http://mail.qq.com/zh_CN/htmledition/images/favicon/qqmail_favicon_48h.png" sizes="48x48" type="image/png" rel="icon">
<link href="http://mail.qq.com/zh_CN/htmledition/images/favicon/qqmail_favicon_96h.png" sizes="96x96" type="image/png" rel="icon">
<link href="http://rescdn.mail.qq.com/zh_CN/htmledition/images/logo/app/qqmail_logo_ios_60h.png" rel="apple-touch-icon-precomposed">
<link href="http://rescdn.mail.qq.com/zh_CN/htmledition/images/logo/app/qqmail_logo_ios_114h.png" sizes="114x114" rel="apple-touch-icon-precomposed">
<link href="http://rescdn.mail.qq.com/zh_CN/htmledition/images/logo/app/qqmail_logo_ios_120h.png" sizes="120x120" rel="apple-touch-icon-precomposed">
<link href="http://rescdn.mail.qq.com/zh_CN/htmledition/images/logo/app/qqmail_logo_ios_152h.png" sizes="152x152" rel="apple-touch-icon-precomposed">
</head>
<body>
<div class="qm_frame mail_list">
	<nav class="qm_frameNavbar qm_navbar">
	<a href="/email/index" class="qm_navbar_logo">QQ邮箱</a>
	<div class="func_growSpace">
	</div>
	<a href="/email/write" class="qm_btnIcon">
	<span class="qm_icon qm_icon_Compose"></span>
	</a>
	</nav>
	<section class="qm_frameSidebar">
	<div class="folderlist_content">
		<ul class="folderlist_list qm_list">
			<li class="folderlist_inbox qm_list_item qm_list_item_Accessory qm_list_item_Selected">
			<a href="/email/show_list" accesskey="i" class="qm_list_item_content">
			<span class="qm_list_item_icon"></span>
			<span class="qm_list_item_textWrapper">
			<span class="qm_list_item_title">收件箱</span>
			<span class="qm_list_item_subtitle" id="inboxUnread"></span>
			</span>
			</a>
			</li>
		</ul>
	</div>
	</section><section class="qm_frameCnt">
	<div id="ct">
		<div class="qm_module module_mail_list">
			<script>
window.unreadInfo = {
"nInbox": +"0",
"nFolder": +"0",
"nBottle": +"0"
}
			</script>
			<div style="display:none;" mod="hide" class="qm_tipsAbs">
			</div>
			<div id="mod_list">
				<div class="qm_toolbar qm_frameToolbar">
					<div class="qm_toolbar_left">
						<a class="qm_btnIcon func_hideInPadMode" href="/cgi-bin/today?sid=5q0O55rvcjoxQmcySYPT6fN-,4,qTnVQNlhnNzF6alQyZGplM1FYQVVSUG5HWTJ0OW9ua25nWXVmSmpQQWk3Z18.&amp;t=today"><span class="qm_icon qm_icon_Return">返回</span></a>
						<h1 class="qm_toolbarTitle">                    收件箱                                        </h1>
					</div>
					<ul class="qm_toolbar_right">
						<div class="func_hideInPhoneMode">
							<form action="/cgi-bin/mail_list" method="get">
								<input type="hidden" value="5q0O55rvcjoxQmcySYPT6fN-,4,qTnVQNlhnNzF6alQyZGplM1FYQVVSUG5HWTJ0OW9ua25nWXVmSmpQQWk3Z18." name="sid"><input type="hidden" value="mail_list" name="t"><input type="hidden" value="search" name="s"><input type="hidden" value="0" name="page"><input type="hidden" value="10" name="pagesize"><input type="hidden" value="all" name="folderid"><input type="hidden" value="0" name="topmails">
								<div class="qm_formText qm_formText_Input qm_formText_Input_Search">
									<input type="search" autocapitalize="off" autocomplete="off" placeholder="在全部邮件中搜索" title="请输入关键字，回车进行搜索" name="subject" class="">
								</div>
							</form>
						</div>
						<li class="func_hideInPadMode"><a mod="toggle?showel=#searchContainer" title="搜索" class="qm_btnIcon"><span class="qm_icon qm_icon_Search">搜索</span></a></li>
					</ul>
				</div>
				<form method="post" action="/cgi-bin/cgi_redirect" id="form">
					<div class="readmail_list">
{{ foreach key=key item=val from=$list }}
<div class="maillist_listItem">                        
<label class="maillist_listItemLeft">                                                        
<input type="checkbox" context="ZC0917-t_zNku_4gsrCByJ33H8bM53" un="listItemCK" value="ZC0917-t_zNku_4gsrCByJ33H8bM53" name="mailid" tabindex="12" cbmod="mail" mod="selectListItem?context=ZC0917-t_zNku_4gsrCByJ33H8bM53" class="qm_chkb">                                                    
</label>                        
<a href="/email/read?id={{ $val.id }}" tabindex="12" class="maillist_listItemRight">                            
<div class="maillist_listItemLineFirst">                                                                                                                                
<div class="maillist_listItem_title func_ellipsis">{{ $val.fromName}}</div>                                                                                                               
<div class="func_growSpace"></div>                                                                
<span class="maillist_listItem_time">{{ $val.date}}</span>                            
</div>                            
<div class="maillist_listItemLineSecond func_ellipsis"> 
{{ $val.subject}}          
</div>                            
<div class="maillist_listItemLineThird">                                
<div class="maillist_listItem_abstract func_ellipsis">
                             
</div>
<div class="maillist_listItem_mailtag"></div>                            
</div>                        
</a>                    
</div>				
{{ foreachelse  }}
无邮件	
{{ /foreach }}		
					</div>
					<div id="listToolBarWrapper" class="actionBarWrap maillist_actionBar">
						<div id="listToolBar" class="qm_actionBar">
							<div class="qm_actionBar_list">
								<label class="qm_actionBar_listItem qm_actionBar_listItem_SelectAll"><input type="checkbox" usemod="mail" mod="selectAll?context=#mod_list" name="" id="selectall" tabindex="21" class="qm_chkb"></label>
								<div style="display:none;" class="qm_actionBar_listItem_Text qm_actionBar_listItem func_ellipsis" id="selectCount">
									<span un="num"></span>
								</div>
								<div class="qm_actionBar_listItem qm_btnGroup func_posRelative">
									<input type="submit" value="标为已读" name="RedirectbWFpbF9tZ3I/bW9iaWxlcmVhZD0xJnQ9bWFpbF9tZ3I_" class="qm_btn" tabindex="22"><input type="submit" value="删除" name="RedirectbWFpbF9tZ3I/bW9iaWxlbWFpbGRlbGV0ZT0xJnQ9bWFpbF9tZ3I_" class="qm_btn">
									<div class="qm_btn qm_dropdownMenuGroup" href="javascript:;" mod="switchDropDown">
										<span class="qm_icon qm_icon_BtnMore"></span>
										<div style="display: none;" class="qm_dropdownMenuGroupCnt" id="switchDropDownMenu">
											<ul style="bottom: 38px;right: -46px;" class="qm_dropdownMenu qm_dropdownMenu_ArrowDown qm_dropdownMenu_ArrowCenter">
												<li><input type="submit" value="标为未读" name="RedirectbWFpbF9tZ3I/bW9iaWxldW5yZWFkPTEmdD1tYWlsX21ncg__" class="qm_dropdownMenu_item"></li>
												<li><input type="submit" value="举报..." name="RedirectbWFpbF9tZ3I/bW9iaWxlc3BhbT0xJnQ9bWFpbF9tZ3ImbGlzdGFjdGlvbj10YWc_" class="qm_dropdownMenu_item"></li>
												<li><input type="submit" value="移动到..." name="RedirectbWFpbF9saXN0P3NpZD01cTBPNTVydmNqb3hRbWN5U1lQVDZmTi0sNCxxVG5WUU5saG5OekY2YWxReVpHcGxNMUZZUVZWU1VHNUhXVEowT1c5dWEyNW5XWFZtU21wUVFXazNaMTguJnQ9dGFnbGlzdCZsaXN0YWN0aW9uPW1vdmV0byZyZWNvcmQ9bg__" class="qm_dropdownMenu_item"></li>
												<li><input type="submit" value="标签..." name="RedirectbWFpbF9tZ3I/bW9iaWxlbW92ZXJlZGlyZWN0PTEmdD10YWdsaXN0Jmxpc3RhY3Rpb249dGFnJnRhZ21haWw9bXVsdGk_" class="qm_dropdownMenu_item"></li>
											</ul>
											<div class="qm_dropdownMenuGroupMask">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="func_growSpace">
							</div>
							<a style="display:none;" href="javascript:;" class="qm_btnIcon qm_btnIcon_ActionBarClose" mod="selectCancel" id="selectCancel"><span class="qm_icon qm_icon_BarClose"></span></a>
						</div>
					</div>
					<div class="qm_page qm_page_Block">
						<a href="javascript:;" class="qm_page_item qm_page_item_Disabled"><span class="qm_icon qm_icon_Previous"></span></a><span class="qm_page_item qm_page_item_Mid">1 / 7</span><a href="/cgi-bin/mail_list?sid=5q0O55rvcjoxQmcySYPT6fN-,4,qTnVQNlhnNzF6alQyZGplM1FYQVVSUG5HWTJ0OW9ua25nWXVmSmpQQWk3Z18.&amp;t=mail_list&amp;pagesize=10&amp;sorttype=time&amp;page=1&amp;flag=&amp;folderid=1&amp;fun=" tabindex="23" title="下一页" class="qm_page_item"><span class="qm_icon qm_icon_Next"></span></a>
					</div>
					<input type="hidden" value="5q0O55rvcjoxQmcySYPT6fN-,4,qTnVQNlhnNzF6alQyZGplM1FYQVVSUG5HWTJ0OW9ua25nWXVmSmpQQWk3Z18." name="sid"><input type="hidden" value="1" name="srcfolderid"><input type="hidden" value="" id="mailaction" name="mailaction"><input type="hidden" value="new" id="flag" name="flag"><input type="hidden" value="" id="status" name="status"><input type="hidden" value="" id="flag_" name="flag_"><input type="hidden" value="" id="s_" name="s_">
				</form>
				<div style="display:none;" class="func_hideInPadMode" id="searchContainer">
					<form class="qm_searchBar maillist_searchBar" action="/cgi-bin/mail_list" method="get">
						<input type="hidden" value="5q0O55rvcjoxQmcySYPT6fN-,4,qTnVQNlhnNzF6alQyZGplM1FYQVVSUG5HWTJ0OW9ua25nWXVmSmpQQWk3Z18." name="sid"><input type="hidden" value="mail_list" name="t"><input type="hidden" value="search" name="s"><input type="hidden" value="0" name="page"><input type="hidden" value="10" name="pagesize"><input type="hidden" value="all" name="folderid"><input type="hidden" value="0" name="topmails">
						<div class="qm_formText qm_formText_Input qm_formText_Input_Search">
							<input type="search" autocapitalize="off" autocomplete="off" autofocus="" placeholder="在全部邮件中搜索" title="请输入关键字，回车进行搜索" name="subject">
						</div>
						<a mod="toggle?showel=#searchContainer" href="javascript:;" class="qm_btn">取消</a>
					</form>
				</div>
			</div>
		</div>
		<div class="qm_footer" id="footer">
			<p class="qm_footer_userInfo">
				{{ $smarty.session.username }} - <a href="/user/login_out">退出</a>
			</p>
			<nav class="qm_footer_links"><a href="/cgi-bin/readtemplate?sid=5q0O55rvcjoxQmcySYPT6fN-,4,qTnVQNlhnNzF6alQyZGplM1FYQVVSUG5HWTJ0OW9ua25nWXVmSmpQQWk3Z18.&amp;t=compose&amp;s=feedback&amp;from=today">意见反馈</a>&nbsp;|&nbsp;<a href="/cgi-bin/help_static_login?sid=5q0O55rvcjoxQmcySYPT6fN-,4,qTnVQNlhnNzF6alQyZGplM1FYQVVSUG5HWTJ0OW9ua25nWXVmSmpQQWk3Z18.&amp;t=help_static_login&amp;page=1&amp;type=0">登录查询</a>&nbsp;|&nbsp;基本版&nbsp;|&nbsp;<a href="http://mail.qq.com/cgi-bin/frame_html?f=html&amp;sid=5q0O55rvcjoxQmcySYPT6fN-">标准版</a></nav>
			<p class="qm_footer_copyright">
				Copyright &copy; {{ $smarty.now|date_format:'%Y' }} Tencent Inc. All Rights Reserved.
			</p>
		</div>
	</div>
	</section>
	<div id="ol">
	</div>
	<div id="popup">
	</div>
	<div class="qm_tipsAbs" id="tips">
	</div>
	<div style="display:none;" class="qm_loadingBlock" id="loading">
		<div class="qm_loadingBlock_content">
			<div class="qm_loadingBlock_item qm_loadingBlock_item_Yellow">
			</div>
			<div class="qm_loadingBlock_item qm_loadingBlock_item_Red">
			</div>
			<div class="qm_loadingBlock_item qm_loadingBlock_item_Green">
			</div>
		</div>
	</div>
	<div class="qm_dropdownMenuMask">
	</div>
</div>
<input type="hidden" value="625507659" id="uin" name="uin">
<script src="https://res.mail.qq.com/wapmail/zh_CN/htmledition/js/comm/qmwl0826b9.js" type="text/javascript"></script>
<script charset="utf-8" src="https://res.mail.qq.com/wapmail/zh_CN/htmledition/js//basic/dist/mail_basic2193b4.js" type="text/javascript"></script>
<script type="text/javascript">
document.getElementById('moreMenu').style.maxWidth = window.document.body.offsetWidth + 'px';
</script>
</body>
</html>