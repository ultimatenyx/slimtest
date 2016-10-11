<?php
namespace App\Controllers;

use PsrHttpMessageServerRequestInterface as Request;
use PsrHttpMessageResponseInterface as Response;

class MyController{

	public function __construct($container)
	{
		// make the container available in the class
		$this->container = $container;
	}

	public function method1($request, $response, $args) {
		//your code
		//to access items in the container... $this->ci->get('');
		var_dump('method1');
		echo "<pre>";
		var_dump($args);
		echo "</pre>";
	}
	
	public function method2($request, $response, $args) {
		//your code
		//to access items in the container... $this->ci->get('');
		var_dump('method2');
	}
	
	public function method3($request, $response, $args) {
		//your code
		//to access items in the container... $this->ci->get('');
		var_dump('method3');
	}
	

}