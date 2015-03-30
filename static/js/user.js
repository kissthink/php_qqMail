function yz()
{
	var uin = $('#uin').val().replace(/(^\s*)|(\s*$)/g, "");
	if(uin == '')
	{
		$('#validcodeMsg').show().html('请输入163邮箱');
		return false;
	}
	else if(!checkEmail(uin))
	{
		$('#validcodeMsg').show().html('请输入格式正确的163邮箱');
		return false;
	}
	var pwd = $('#pwd').val();
	if(pwd == '')
	{
		$('#validcodeMsg').show().html('请输入163密码');
		return false;
	}
	return true;
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