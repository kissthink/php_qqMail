<?php
namespace Swoole;
class Imap
{
	var $server='';
	var $username='';
	var $password='';
	
	var $marubox='';					
	
	var $email='';
	
	function __construct()
	{
		
	}	
	
	function initialize($username,$password,$EmailAddress,$mailserver='localhost',$servertype='pop',$port='110',$ssl = false) //Constructure
	{
		if($servertype=='imap')
		{
			if($port=='') $port='143'; 
			$strConnect='{'.$mailserver.':'.$port. '}INBOX'; 
		}
		else
		{
			$strConnect='{'.$mailserver.':'.$port. '/pop3'.($ssl ? "/ssl" : "").'}INBOX'; 
		}
		$this->server			=	$strConnect;
		$this->username			=	$username;
		$this->password			=	$password;
		$this->email			=	$EmailAddress;
	}
	
	function connect() //Connect To the Mail Box
	{
		$this->marubox=@imap_open($this->server,$this->username,$this->password);
		
		if(!$this->marubox)
		{
			echo "Error: Connecting to mail server";
			exit;
		}
	}
	
	function getHeaders($mid) // Get Header info
	{
		if(!$this->marubox)
			return false;

		$mail_header=imap_header($this->marubox,$mid);
		$mail_header = $this->decode_mime_object($mail_header);
		$sender=$this->decode_mime_object($mail_header->from[0]);
		$sender_replyto=$this->decode_mime_object($mail_header->reply_to[0]);
		if(strtolower($sender->mailbox)!='mailer-daemon' && strtolower($sender->mailbox)!='postmaster')
		{
			$mail_details=array(
					'from'=>strtolower($sender->mailbox).'@'.$sender->host,
					'fromName'=>empty($sender->personal)?'':$sender->personal,
					'toOth'=>strtolower($sender_replyto->mailbox).'@'.$sender_replyto->host,
					'toNameOth'=>empty($sender_replyto->personal)?'':$sender_replyto->personal,
					'subject'=>empty($mail_header->subject)?'':$mail_header->subject,
					'to'=>empty($mail_header->toaddress)?'':strtolower($mail_header->toaddress),
					'date'=>date('Y-m-d H:i:s', $mail_header->udate),
				);
		}
		return $mail_details;
	}
	
	function decode_mime_object($object)
	{
		foreach($object as $k=>$v)
		{
			if(is_object($v))
			{
				$this->decode_mime_object($v);
			}
			else if(is_array($v))
			{
				$this->decode_mime_array($v);
			}
			else if(is_string($v))
			{
				$object->$k = $this->decode_mime($v);
			}
		}
		return $object;
	}
	
	function decode_mime_array($array)
	{
		foreach($array as $k=>$v)
		{
			if(is_object($v))
			{
				$this->decode_mime_object($v);
			}
			else if(is_array($v))
			{
				$this->decode_mime_array($v);
			}
			else if(is_string($v))
			{
				$array[$k] = $this->decode_mime($v);
			}
		}
		return $array;
	}
	
	function auto_iconv($string)
	{
		$encode_arr = array('UTF-8','ASCII','GBK','GB2312','BIG5','JIS','eucjp-win','sjis-win','EUC-JP');
		$encoded = mb_detect_encoding($string, $encode_arr);
		return mb_convert_encoding($string, 'UTF-8', $encoded);	
	}
	
	function decode_mime($string)
	{
		$pos = strpos($string, '=?');
		if (!is_int($pos))
		{
			return $string;
		}
		
		$preceding = substr($string, 0, $pos); // save any preceding text
		$search = substr($string, $pos+2); /* the mime header spec says this is the longest a single encoded word can be */
		$d1 = strpos($search, '?');
		if (!is_int($d1)) 
		{
			return $string;
		}
		
		$charset = substr($string, $pos+2, $d1); //取出字符集的定义部分
		$search = substr($search, $d1+1); //字符集定义以后的部分＝>$search;
		$d2 = strpos($search, '?');
		
		if (!is_int($d2)) 
		{
			return $string;
		}
		
		$encoding = substr($search, 0, $d2); ////两个?　之间的部分编码方式　：ｑ　或　ｂ
		$search = substr($search, $d2+1);
		$end = strpos($search, '?='); //$d2+1 与 $end 之间是编码了　的内容：=> $endcoded_text;
		
		if (!is_int($end)) 
		{
			return $string;
		}
		
		$encoded_text = substr($search, 0, $end);
		$rest = substr($string, (strlen($preceding . $charset . $encoding . $encoded_text)+6)); //+6 是前面去掉的　=????=　六个字符
		switch ($encoding) 
		{
			case 'Q':
			case 'q':
				//$encoded_text = str_replace('_', '％20', $encoded_text);
				//$encoded_text = str_replace('=', '％', $encoded_text);
				//$decoded = urldecode($encoded_text);
				$decoded=quoted_printable_decode($encoded_text);
				
				if (strtolower($charset) == 'windows-1251') 
				{
					$decoded = convert_cyr_string($decoded, 'w', 'k');
				}
				break;
			case 'B':
			case 'b':
			$decoded = base64_decode($encoded_text);
			if (strtolower($charset) == 'windows-1251') 
			{
				$decoded = convert_cyr_string($decoded, 'w', 'k');
			}
			break;
			default:
				$decoded = '=?' . $charset . '?' . $encoding . '?' . $encoded_text . '?=';
				break;
		}
		return $this->auto_iconv($preceding . $decoded . $this->decode_mime($rest));
	}

	function get_mime_type(&$structure) //Get Mime type Internal Private Use
	{ 
		$primary_mime_type = array("TEXT", "MULTIPART", "MESSAGE", "APPLICATION", "AUDIO", "IMAGE", "VIDEO", "OTHER"); 
		
		if($structure->subtype) { 
			return $primary_mime_type[(int) $structure->type] . '/' . $structure->subtype; 
		} 
		return "TEXT/PLAIN"; 
	} 
	function get_part($stream, $msg_number, $mime_type, $structure = false, $part_number = false) //Get Part Of Message Internal Private Use
	{ 
		if(!$structure) { 
			$structure = imap_fetchstructure($stream, $msg_number); 
		} 
		if($structure) { 
			if($mime_type == $this->get_mime_type($structure))
			{ 
				if(!$part_number) 
				{ 
					$part_number = "1"; 
				} 
				$text = imap_fetchbody($stream, $msg_number, $part_number); 
				if($structure->encoding == 3) 
				{ 
					return imap_base64($text); 
				} 
				else if($structure->encoding == 4) 
				{ 
					return imap_qprint($text); 
				} 
				else
				{ 
					return $text; 
				} 
			} 
			if($structure->type == 1) /* multipart */ 
			{ 
				while(list($index, $sub_structure) = each($structure->parts))
				{ 
					if($part_number)
					{ 
						$prefix = $part_number . '.'; 
					} 
					else
					{
						$prefix = '';	
					}
					$data = $this->get_part($stream, $msg_number, $mime_type, $sub_structure, $prefix . ($index + 1)); 
					if($data)
					{ 
						return $data; 
					} 
				} 
			} 
		} 
		return false; 
	} 
	function getTotalMails() //Get Total Number off Unread Email In Mailbox
	{
		if(!$this->marubox)
			return false;

		$headers=imap_headers($this->marubox);
		return count($headers);
	}
	function GetAttach($mid,$path) // Get Atteced File from Mail
	{
		if(!$this->marubox)
			return false;

		$struckture = imap_fetchstructure($this->marubox,$mid);
		$ar="";
		if(!empty($struckture->parts))
        {
			foreach($struckture->parts as $key => $value)
			{
				$enc=$struckture->parts[$key]->encoding;
				if($struckture->parts[$key]->ifdparameters)
				{
					$name=$struckture->parts[$key]->dparameters[0]->value;
					$message = imap_fetchbody($this->marubox,$mid,$key+1);
					if ($enc == 0)
						$message = imap_8bit($message);
					if ($enc == 1)
						$message = imap_8bit ($message);
					if ($enc == 2)
						$message = imap_binary ($message);
					if ($enc == 3)
						$message = imap_base64 ($message); 
					if ($enc == 4)
						$message = quoted_printable_decode($message);
					if ($enc == 5)
						$message = $message;
					$fp=fopen($path.$name,"w");
					fwrite($fp,$message);
					fclose($fp);
					$ar=$ar.$name.",";
				}
				// Support for embedded attachments starts here
				if(!empty($struckture->parts[$key]->parts))
				{
					foreach($struckture->parts[$key]->parts as $keyb => $valueb)
					{
						$enc=$struckture->parts[$key]->parts[$keyb]->encoding;
						if($struckture->parts[$key]->parts[$keyb]->ifdparameters)
						{
							$name=$struckture->parts[$key]->parts[$keyb]->dparameters[0]->value;
							$partnro = ($key+1).".".($keyb+1);
							$message = imap_fetchbody($this->marubox,$mid,$partnro);
							if ($enc == 0)
								   $message = imap_8bit($message);
							if ($enc == 1)
								   $message = imap_8bit ($message);
							if ($enc == 2)
								   $message = imap_binary ($message);
							if ($enc == 3)
								   $message = imap_base64 ($message);
							if ($enc == 4)
								   $message = quoted_printable_decode($message);
							if ($enc == 5)
								   $message = $message;
							$fp=fopen($path.$name,"w");
							fwrite($fp,$message);
							fclose($fp);
							$ar=$ar.$name.",";
						}
					}
				}				
			}
		}
		$ar=substr($ar,0,(strlen($ar)-1));
		return $ar;
	}
	function getBody($mid) // Get Message Body
	{
		if(!$this->marubox)
			return false;

		$body = $this->get_part($this->marubox, $mid, "TEXT/HTML");
		if ($body == "")
			$body = $this->get_part($this->marubox, $mid, "TEXT/PLAIN");
		if ($body == "") { 
			return "";
		}
		return $this->auto_iconv($body);
	}
	function deleteMails($mid) // Delete That Mail
	{
		if(!$this->marubox)
			return false;
	
		imap_delete($this->marubox,$mid);
	}
	function close_mailbox() //Close Mail Box
	{
		if(!$this->marubox)
			return false;

		imap_close($this->marubox,CL_EXPUNGE);
	}
}