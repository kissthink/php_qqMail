<!DOCTYPE html>
<html lang="zh-cmn">
<head>
<title>163邮箱</title>
<meta content="text/html;charset=utf-8" http-equiv="content-type">
<meta content="IE=Edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link href="/static/css/wap.css" type="text/css" rel="stylesheet">
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
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="qm_frame compose qm_frame_OnlyContent qm_frame_HideFooter qm_frame_HideTopAnnounce">
	<nav class="qm_frameNavbar qm_navbar" id="nv" cmd="nav" last="nav" mod="nav">
	<div class="func_growSpace">
	</div>
	<a cmd="compose" onclick="_e(event,this,'cmd')" class="qm_btnIcon"><span class="qm_icon qm_icon_Compose"></span></a></nav><section class="qm_frameSidebar" id="fl" cmd="folderlist" last="folderlist" mod="folderlist">
	<div cnt="base">
		<div class="folderlist_content">
			<ul class="folderlist_list qm_list">
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
	<div id="ct" cmd="compose" last="today" mod="compose">
		<div cnt="base">
			<div un="compose" class="compose_topBar">
				<a class="qm_btn" onclick="_e(event,this,'cancel')" id="composeCancel">取消</a>
				<div class="func_growSpace">
				</div>
				<div class="compose_mailType qm_dropdownMenuGroup">

				</div>
				<div class="func_growSpace">
				</div>
				<a class="qm_btn qm_btn_Blue" onclick="_e(event,this,'send')" id="composeSend">发送</a>
			</div>
			<div un="compose" id="composeMain">
				<div class="compose_mainCnt">
					<div class="compose_mainCnt_inner">
						<div class="compose_form_itemWrap" un="suggest">
							<div addr="to" un="address" id="addrto">
								<div class="compose_form_item">
									<label class="compose_form_item_label" for="to" style="width:5%">收件人：</label>
									<div class="compose_form_item_cnt">
										<div class="compose_contact_selectedItemWrap" un="addrEdit">
										</div>
										<input type="text" onkeydown="_e(event, this, 'addrKeydown')" onkeypress="_e(event,this,'addrTyping')" to="" value="" onkeyup="_e(event,this,'suggest')" onfocus="_e(event, this,'hideTopAnnounceBar')" onblur="_e(event,this,'showTopAnnounceBar')" id="to" class="compose_form_item_input">
									</div>
								</div>
								<div class="compose_contact_editItemWrap" addr="to" un="editArea">
								</div>
							</div>
							<div class="compose_contactListWrap" style="display:none;" un="sugList">
							</div>
						</div>
						<div class="compose_form_itemWrap" un="suggest">
							<div addr="cc" un="address" id="addrcc">
								<div class="compose_form_item">
									<label class="compose_form_item_label" for="to">抄送：</label>
									<div class="compose_form_item_cnt">
										<div class="compose_contact_selectedItemWrap" un="addrEdit">
										</div>
										<input type="text" onkeydown="_e(event, this, 'addrKeydown')" onkeypress="_e(event,this,'addrTyping')" cc="" value="" onkeyup="_e(event,this,'suggest')" onfocus="_e(event, this,'hideTopAnnounceBar')" onblur="_e(event,this,'showTopAnnounceBar')" id="cc" class="compose_form_item_input">
									</div>
								</div>
								<div class="compose_contact_editItemWrap" addr="cc" un="editArea">
								</div>
							</div>
							<div class="compose_contactListWrap" style="display:none;" un="sugList">
							</div>
						</div>
						<div class="compose_form_itemWrap" un="suggest">
							<div addr="bcc" un="address" id="addrbcc">
								<div class="compose_form_item">
									<label class="compose_form_item_label" for="to">密送：</label>
									<div class="compose_form_item_cnt">
										<div class="compose_contact_selectedItemWrap" un="addrEdit">
										</div>
										<input type="text" onkeydown="_e(event, this, 'addrKeydown')" onkeypress="_e(event,this,'addrTyping')" bcc="" value="" onkeyup="_e(event,this,'suggest')" onfocus="_e(event, this,'hideTopAnnounceBar')" onblur="_e(event,this,'showTopAnnounceBar')" id="bcc" class="compose_form_item_input">
									</div>
								</div>
								<div class="compose_contact_editItemWrap" addr="bcc" un="editArea">
								</div>
							</div>
							<div class="compose_contactListWrap" style="display:none;" un="sugList">
							</div>
						</div>
						<div class="compose_form_itemWrap" id="addrbcc">
							<div class="compose_form_item">
								<label class="compose_form_item_label" for="to">主题：</label>
								<div class="compose_form_item_cnt">
									<input type="text" subj="" value="" onfocus="_e(event, this,'hideTopAnnounceBar')" onblur="_e(event,this,'showTopAnnounceBar')" id="subject" class="compose_form_item_input">
								</div>
							</div>
						</div>
						<div class="compose_form_itemWrap">
							<div class="compose_form_item">
								<div class="compose_form_item_cnt">
									<textarea onfocus="_e(event, this,'hideTopAnnounceBar')" onblur="_e(event,this,'showTopAnnounceBar')" style="display:none;opacity:0;" id="origin" value="test"></textarea>
                  <textarea oninput="_e(event,this,'typing')" onfocus="_e(event, this,'hideTopAnnounceBar')" onblur="_e(event,this,'showTopAnnounceBar')" cont="" origin="" id="content" class="compose_form_item_textarea" placeholder="请输入邮件内容..."></textarea>
								</div>
							</div>
						</div>
						<div class="qm_actionBar compose_bottomBar" un="attachUpload" id="attachUpload">
							<iframe name="attachFrame" id="attachFrame" style="display:none;">
							</iframe>
							<form target="attachFrame" method="post" action="/cgi-bin/upload?sid=dT4VnuNhJW1oOB1ISYPT6fN-,4,zs6vO0EB9&amp;mode=file&amp;ef=jsonp&amp;resp_charset=UTF8&amp;t=mobile_mgr.json&amp;jsonp=attach_upload" enctype="multipart/form-data" class="compose_addAttach_form">
								<a class="compose_addAttach_panel_uploadBtn qm_btn">上传文件<input type="file" onchange="_e(event,this,'attachSelect')" name="UploadFile" class="compose_addAttach_panel_uploadInput"><input type="hideen" style="display:none;" name="fname" un="fname"></a>
							</form>
							<div style="display:none;" un="attachUploading" class="compose_addAttach_uploading">
								<a disabled="" class="compose_addAttach_panel_uploadBtn qm_btn">
								<div class="qm_loading">
								</div>
								上传中...</a>
							</div>
							<div class="compose_addAttach_panel_tips">
								最大可以发送50M的附件。网络颠簸，建议单个附件不超过5M。
							</div>
							<div style="display:none;" un="attachErr">
							</div>
						</div>
						<div style="display:none;" class="compose_attachListWrap" un="attachLst" id="attachLst">
							<ul class="compose_attachList">
							</ul>
						</div>
						<div style="display:none;" class="compose_attachListWrap" un="attachLst" id="bigattachLst">
							<ul class="compose_attachList">
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="qm_footer" id="footer">
		<p class="qm_footer_userInfo">
			{{ $smarty.session.username }} - <a href="/user/login_out">退出</a>
		</p>
		<nav class="qm_footer_links"><a href="/cgi-bin/readtemplate?sid=dT4VnuNhJW1oOB1ISYPT6fN-,4,zs6vO0EB9&amp;t=compose&amp;s=feedback&amp;from=today">意见反馈</a>&nbsp;|&nbsp;<a href="/cgi-bin/help_static_login?sid=dT4VnuNhJW1oOB1ISYPT6fN-,4,zs6vO0EB9&amp;t=help_static_login&amp;page=1&amp;type=0">登录查询</a>&nbsp;|&nbsp;基本版&nbsp;|&nbsp;<a href="http://mail.qq.com/cgi-bin/frame_html?f=html&amp;sid=dT4VnuNhJW1oOB1ISYPT6fN-">标准版</a></nav>
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
			<!--<a onclick="location.reload()" href="javascript:;">重试</a>--><a href="javascript:;" id="log_detail">了解详情</a><a href="javascript:;" style="" id="log_send">发送错误报告</a>
		</div>
		<div class="app_crash_more" style="display:none;" id="log_console">
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">提示信息</h4>
      </div>
      <div class="modal-body" id="tsxx">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function _e(event,obj,type)
{
	switch(type)
	{
		case 'cancel':
			location.href = '/email/index';
			break;
		case 'send':
			var email_info = {};
			email_info.to = $('#to').val().replace(/(^\s*)|(\s*$)/g, ""); 
			if(email_info.to == '')
			{
				sys_alert('请输入收件人');
				return false;
			}
			if(!checkEmail(email_info.to))
			{
				sys_alert('请输入格式正确的收件人邮箱');
				return false;
			}
			email_info.cc = $('#cc').val().replace(/(^\s*)|(\s*$)/g, ""); 
			if((email_info.cc != '') && !checkEmail(email_info.cc))
			{
				email_info.cc = '';
				sys_alert('请输入格式正确的抄送人邮箱');
				return false;
			}
			email_info.bcc = $('#bcc').val().replace(/(^\s*)|(\s*$)/g, "");
			if((email_info.bcc != '') && !checkEmail(email_info.bcc))
			{
				email_info.bcc = '';
				sys_alert('请输入格式正确的抄送人邮箱');
				return false;
			}
			email_info.subject = $('#subject').val().replace(/(^\s*)|(\s*$)/g, ""); 
			if(email_info.subject == '')
			{
				sys_alert('请输入收件人');
				return false;
			}
			email_info.content = $('#content').val().replace(/(^\s*)|(\s*$)/g, ""); 
			if(email_info.content == '')
			{
				sys_alert('请输入邮件内容');
				return false;
			}
			sys_alert('邮件发送中，请稍后……');
			$.ajax({
			 type: "POST",
			 url: "/email/send",
			 data: email_info,
			 error: function (XMLHttpRequest, textStatus, errorThrown) {
			 },
			 success: function(data){
									sys_alert(data);
								}
	 		});
			break;
		default:
	}	
}

function checkEmail(str)
{
	var re = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
	if(re.test(str))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function sys_alert(mes)
{
	$('#tsxx').html(mes);
	$('#myModal').modal('show');	
}
</script>
</body>
</html>