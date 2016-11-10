<?php

namespace App\Controllers;
use \Core\View;
use App\Models\Post;
use App\Models\Menu;

class Home extends \Core\Controller 
{

	protected function before()
	{
		echo 'before <br />';
	}

	public function indexAction()
	{
		$menus = Menu::getall();
		$posts = Post::getall();
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

