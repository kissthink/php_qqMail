<?php
namespace App\Controller;
use Swoole;
use App;

class User extends Swoole\Controller
{
	
	function __construct()
	{
		parent::__construct(Swoole::$php);
		header("Content-type: text/html; charset=utf-8");
	}

	function index()
	{
		$this->session->start();
		if(empty($_SESSION['username']))
		{
			$this->login();
		}
		else
		{
			header('Location: /email/index');
		}
	}

	function login()
	{
		$this->tpl->display('user/login.php');
	}
	
	function sign_up()
	{
		$this->session->start();
		$username = empty($_POST['uin'])?'':$_POST['uin'];
		if(empty($username))
		{
			show_msg('请输入邮箱', '/user/login', 0, 3000);
		}
		else if(!filter_var($username, FILTER_VALIDATE_EMAIL))
		{
			show_msg('请输入格式正确的邮箱', '/user/login', 0, 3000);
		}
		else if(!strpos($username, '@163.com'))
		{
			show_msg('请输入格式正确的163邮箱', '/user/login', 0, 3000);	
		}
		$password = empty($_POST['pwd'])?'':$_POST['pwd'];
		if(empty($password))
		{
			show_msg('请输入密码', '/user/login', 0, 3000);
		}
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.163.com';
		$config['smtp_port'] = 25;
		$config['smtp_user'] = $username;
		$config['smtp_pass'] = $password;
		$this->smtp->initialize($config);
		if($this->smtp->_smtp_connect())
		{
			if($this->smtp->_smtp_authenticate())
			{
				$_SESSION['username'] = $username;
				$_SESSION['password'] = encrypt($password,'E','huanghe1987!*@#%^');
				show_msg('登陆成功', '/user/index', 0, 3000);		
			}
			else
			{
				show_msg('您填写的帐号或密码不正确', '/user/login', 0, 3000);	
			}
		}
		else
		{
			show_msg('连接QQ邮箱服务器失败，请稍后重试', '/user/login', 0, 3000);	
		}
	}
	
	function login_out()
	{
		$this->session->start();
		session_destroy();
		show_msg('退出成功', '/user/index', 0, 3000);		
	}
		
}