<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
	$name = $request->getAttribute('name');
	$response->getBody()->write("Hello, $name");

	return $response;
});
	
	
	// Set up dependencies
require __DIR__ . '/../app/dependencies.php';
	
	/* $container = $app->getContainer();
	$container[MyController::class] = function ($c) {
		return new MyController();
	}; */
	
ini_set('display_errors', 'On');
$app->get('/method1', '\MyController:method1');
$app->get('/method2', '\MyController:method2');
$app->get('/method3', '\MyController:method3');

$app->error(function (\Exception $e) use ($app) {
	$app->render('error.php');
});
$app->run();