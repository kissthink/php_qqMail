<?php
namespace App\Controller;
use Swoole;
use App;

class Base extends Swoole\Controller
{
	
	function __construct()
	{
		parent::__construct(Swoole::$php);
		$this->session->start();
		if(empty($_SESSION['username']) || empty($_SESSION['password']))
		{
			header('Location: /user/login');
		}
	}
	
}