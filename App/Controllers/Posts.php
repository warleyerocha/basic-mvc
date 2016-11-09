<?php

namespace App\Controllers;
use \Core\View;
use App\Model\Post;
use App\Models\Menu;

class Posts extends \Core\Controller 
{

	public function index()
	{
		$menus = Menu::getall();
		$root = $_SERVER['SERVER_NAME'];
		View::renderTemplate('Posts/index.html', [

			'menus' => $menus,
			'root' => $root

		]);
	}

	public function addNew()
	{
		echo "Hello from posts addNew";
	}

	public function edit()
	{
		echo "Hello from the edit action in the Posts controller!";
		echo "<p>Route parameters: <pre>" . htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
	}

}
