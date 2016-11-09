<?php
namespace App\Controllers\Admin;

use \Core\View;
use App\Models\Menu;

class Users extends \Core\Controller 
{

	protected function before()
	{
		echo 'before <br />';
	}

	public function indexAction()
	{

		echo 'Welcome to ADMIN area!';
		$menus = Menu::getall();
		$root = $_SERVER['SERVER_NAME'];
		view::renderTemplate('Home/index.html', [

			'menus' => $menus,
			'root' => $root

		]);	
		
	}

	protected function after()
	{
		echo ' <br />after';
	}

}

