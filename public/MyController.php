<?php
namespace Controllers;

use PsrHttpMessageServerRequestInterface as Request;
use PsrHttpMessageResponseInterface as Response;

class MyController{

	public function __construct($container)
	{
		// make the container available in the class
		$this->container = $container;
	}

	public function method1(Request $request, Response $response, $args) {
		//your code
		//to access items in the container... $this->ci->get('');
		var_dump('method1');
	}
	
	public function method2(Request $request, Response $response, $args) {
		//your code
		//to access items in the container... $this->ci->get('');
		var_dump('method2');
	}
	
	public function method3(Request $request, Response $response, $args) {
		//your code
		//to access items in the container... $this->ci->get('');
		var_dump('method3');
	}
	public function users(Request $request, Response $response, $args)
	{
		$users = Users::all();
		$this->container->view->render($response, 'list-users.twig', $users);
	}

	public function create(Request $request, Response $response, $args)
	{
		// proceed to creating a new user
	}


	public function delete(Request $request, Response $response, $args)
	{
		// proceed to deleting a new user
	}


	//...

}