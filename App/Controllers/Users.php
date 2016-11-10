<?php

namespace App\Controllers;
use \Core\View;
use App\Models\User;
use App\Models\Menu;

class Users extends \Core\Controller 
{

	public function index()
	{
		$menus = Menu::getall();
		$root = $_SERVER['SERVER_NAME'];

		View::renderTemplate('Users/index.html', [

			'menus' => $menus,
			'root' => $root

		]);

	}

	public function addNew()
	{
		echo "Hello from Users";
	}

	public function edit()
	{
		echo "Hello from the edit action in the Posts controller!";
		echo "<p>Route parameters: <pre>" . htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
	}

}
