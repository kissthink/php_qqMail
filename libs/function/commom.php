<?php

if ( ! function_exists('is_php'))
{
	function is_php($version = '5.0.0')
	{
		static $_is_php;
		$version = (string)$version;

		if ( ! isset($_is_php[$version]))
		{
			$_is_php[$version] = (version_compare(PHP_VERSION, $version) < 0) ? FALSE : TRUE;
		}

		return $_is_php[$version];
	}
}

/*********************************************************************
    函数名称:encrypt
    函数作用:加密解密字符串
    使用方法:
    加密     :encrypt('str','E','nowamagic');
    解密     :encrypt('被加密过的字符串','D','nowamagic');
    参数说明:
    $string   :需要加密解密的字符串
    $operation:判断是加密还是解密:E:加密   D:解密
    $key      :加密的钥匙(密匙);
    *********************************************************************/
if ( ! function_exists('encrypt'))
{
	function encrypt($string,$operation,$key='')
	{
		$key=md5($key);
		$key_length=strlen($key);
		$string=$operation=='D'?base64_decode($string):substr(md5($string.$key),0,8).$string;
		$string_length=strlen($string);
		$rndkey=$box=array();
		$result='';
		for($i=0;$i<=255;$i++)
		{
				$rndkey[$i]=ord($key[$i%$key_length]);
				$box[$i]=$i;
		}
		for($j=$i=0;$i<256;$i++)
		{
				$j=($j+$box[$i]+$rndkey[$i])%256;
				$tmp=$box[$i];
				$box[$i]=$box[$j];
				$box[$j]=$tmp;
		}
		for($a=$j=$i=0;$i<$string_length;$i++)
		{
				$a=($a+1)%256;
				$j=($j+$box[$a])%256;
				$tmp=$box[$a];
				$box[$a]=$box[$j];
				$box[$j]=$tmp;
				$result.=chr(ord($string[$i])^($box[($box[$a]+$box[$j])%256]));
		}
		if($operation=='D')
		{
				if(substr($result,0,8)==substr(md5(substr($result,8).$key),0,8))
				{
						return substr($result,8);
				}
				else
				{
						return'';
				}
		}
		else
		{
				return str_replace('=','',base64_encode($result));
		}
	}
}

if ( ! function_exists('P'))
{
	function P($var)
	{
		echo '<pre>';
		print_r($var);
		echo '</pre>';	
	}
}

/**
 *  短消息函数,可以在某个动作处理后友好的提示信息
 *
 * @param     string  $msg      消息提示信息
 * @param     string  $gourl    跳转地址
 * @param     int     $onlymsg  仅显示信息
 * @param     int     $limittime  限制时间
 * @return    void
 */
if ( ! function_exists('show_msg'))
{
	function show_msg($msg, $gourl, $onlymsg=0, $limittime=0)
	{
		if(empty($GLOBALS['cfg_plus_dir'])) $GLOBALS['cfg_plus_dir'] = '..';
	
		$htmlhead  = "<html>\r\n<head>\r\n<title>提示信息</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n";
		$htmlhead .= "<base target='_self'/>\r\n<style>div{line-height:160%;}</style></head>\r\n<body leftmargin='0' topmargin='0' bgcolor='#FFFFFF'>".(isset($GLOBALS['ucsynlogin']) ? $GLOBALS['ucsynlogin'] : '')."\r\n<center>\r\n<script>\r\n";
		$htmlfoot  = "</script>\r\n</center>\r\n</body>\r\n</html>\r\n";
	
		$litime = ($limittime==0 ? 1000 : $limittime);
		$func = '';
	
		if($gourl=='-1')
		{
				if($limittime==0) $litime = 5000;
				$gourl = "javascript:history.go(-1);";
		}
	
		if($gourl=='' || $onlymsg==1)
		{
				$msg = "<script>alert(\"".str_replace("\"","'",$msg)."\");</script>";
		}
		else
		{
				//当网址为:close::objname 时, 关闭父框架的id=objname元素
				if(preg_match('/close::/',$gourl))
				{
						$tgobj = trim(preg_replace('/close::/', '', $gourl));
						$gourl = 'javascript:;';
						$func .= "window.parent.document.getElementById('{$tgobj}').style.display='none';\r\n";
				}
				
				$func .= "      var pgo=0;
			function JumpUrl(){
				if(pgo==0){ location='$gourl'; pgo=1; }
			}\r\n";
				$rmsg = $func;
				$rmsg .= "document.write(\"<br /><div style='width:450px;padding:0px;border:1px solid #DADADA;'>";
				$rmsg .= "<div style='padding:6px;font-size:12px;border-bottom:1px solid #DADADA;background:#80bdcb url({$GLOBALS['cfg_plus_dir']}/img/wbg.gif)';'><b>提示信息</b></div>\");\r\n";
				$rmsg .= "document.write(\"<div style='height:130px;font-size:10pt;background:#ffffff'><br />\");\r\n";
				$rmsg .= "document.write(\"".str_replace("\"","'",$msg)."\");\r\n";
				$rmsg .= "document.write(\"";
				
				if($onlymsg==0)
				{
						if( $gourl != 'javascript:;' && $gourl != '')
						{
								$rmsg .= "<br /><a href='{$gourl}'>如果你的浏览器没反应，请点击这里...</a>";
								$rmsg .= "<br/></div>\");\r\n";
								$rmsg .= "setTimeout('JumpUrl()',$litime);";
						}
						else
						{
								$rmsg .= "<br/></div>\");\r\n";
						}
				}
				else
				{
						$rmsg .= "<br/><br/></div>\");\r\n";
				}
				$msg  = $htmlhead.$rmsg.$htmlfoot;
		}
		echo $msg;
		exit;
	}
}