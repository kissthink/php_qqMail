<?php
namespace App\Controller;
use Swoole;
use App;
require_once 'Base.php';
class Email extends Base
{
	
	function __construct()
	{
		parent::__construct(Swoole::$php);
		header("Content-type: text/html; charset=utf-8");
	}

	function index()
	{
		$this->tpl->assign('user', str_replace(strstr($_SESSION['username'], '@'), '', $_SESSION['username']));
		$this->tpl->display('email/index.php');
	}

	function write()
	{
		$this->tpl->display('email/write.php');
	}
	
	function send()
	{
		$to = empty($_POST['to'])?'':$_POST['to'];
		$cc = empty($_POST['cc'])?'':$_POST['cc'];
		$bcc = empty($_POST['bcc'])?'':$_POST['bcc'];
		$subject = empty($_POST['subject'])?'':$_POST['subject'];
		$content = empty($_POST['content'])?'':$_POST['content'];
		$config = array();
		$config["protocol"] = "smtp";
		$config['smtp_host'] = 'smtp.163.com';
		$config['smtp_port'] = 25;
		$config['smtp_user'] = $_SESSION['username'];
		$config['smtp_pass'] = encrypt($_SESSION['password'],'D','huanghe1987!*@#%^');
		$config["mailtype"] = "html";
		$config["validate"] = true;
		$config["priority"] = 3;
		$config["crlf"] = "/r/n";
		$config["charset"] = "utf-8";
		$config["wordwrap"] = TRUE;
		$this->smtp->initialize($config);
		$this->smtp->from($config['smtp_user'], str_replace(strstr($config['smtp_user'], '@'), '', $config['smtp_user']));
		$this->smtp->to($to);
		if(!empty($cc) && filter_var($cc, FILTER_VALIDATE_EMAIL))
		{
			$this->smtp->cc($cc);
		}
		if(!empty($bcc) && filter_var($bcc, FILTER_VALIDATE_EMAIL))
		{
			$this->smtp->bcc($bcc);
		}
		$this->smtp->subject($subject);
		$this->smtp->message($content);
		if($this->smtp->send())
		{
			echo '发送成功';	
		}
		else
		{
			echo '发送失败';	
		}
	}
	
	function show_list()
	{
		$page = empty($_GET['page'])?0:$_GET['page'];
		$list = $this->get_list($page);
		$this->tpl->assign('list', $list);
		$this->tpl->display('email/list.php');
	}
	
	function read()
	{
		$id = empty($_GET['id'])?'':urldecode($_GET['id']);
		$id = str_replace(' ', '+', $id);
		$id = encrypt($id,'D','huanghe1987!*@#%^');
		$this->imap->initialize($_SESSION['username'],encrypt($_SESSION['password'],'D','huanghe1987!*@#%^'),$_SESSION['username'],'pop3.163.com','pop3','110',false);
		$this->imap->connect();
		$header = $this->imap->getHeaders($id);
		$body = $this->imap->getBody($id);
		$this->tpl->assign('header', $header);
		$this->tpl->assign('body', $body);
		$this->tpl->display('email/read.php');
	}
	
	function get_list($page)
	{
		$this->imap->initialize($_SESSION['username'],encrypt($_SESSION['password'],'D','huanghe1987!*@#%^'),$_SESSION['username'],'pop3.163.com','pop3','110',false);
		$this->imap->connect();	
		$total = $this->imap->getTotalMails();
		$per_page_limit = 10;
		$total -= $per_page_limit * $page;
		$list = array();
		if($total > 0)
		{
			for($i=$total;$i>0 && $per_page_limit>0;$i--,$per_page_limit--)
			{
				$info = $this->imap->getHeaders($i);
				$info['id'] = encrypt($i,'E','huanghe1987!*@#%^');
				$list[$i] = $info;
	/*			echo "Subjects :: ".$head['subject']."<br>";
				echo "TO :: ".$head['to']."<br>";
				echo "To Other :: ".$head['toOth']."<br>";
				echo "ToName Other :: ".$head['toNameOth']."<br>";
				echo "From :: ".$head['from']."<br>";
				echo "FromName :: ".$head['fromName']."<br>";
				echo "<br><br>";
				echo "<br>*******************************************************************************************<BR>";
				echo $this->imap->getBody($i);  */
				
				/*$str=$obj->GetAttach($i,"./");
				$ar=explode(",",$str);
				foreach($ar as $key=>$value)
					echo ($value=="")?"":"Atteched File :: ".$value."<br>";
				echo "<br>------------------------------------------------------------------------------------------<BR>";*/
				
				//$obj->deleteMails($i);
			}
		}
		$this->imap->close_mailbox();
		return $list;
	}
		
}