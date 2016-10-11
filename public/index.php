<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App;
use Slim\Slim;

require '../vendor/autoload.php';
// use App\Controllers;
/* $app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
	$name = $request->getAttribute('name');
	$response->getBody()->write("Hello, $name");

	return $response;
}); */
// 	$myClass = new \App\Controllers\MyController($container);
	
	
	// Set up dependencies


ini_set('display_errors', 'On');
// Instantiate the app
$settings = require __DIR__ . '/../app/settings.php';
$app = new \Slim\App($settings);

require __DIR__ . '/../app/dependencies.php';

$app->get('/method1', 'App\Controllers\MyController:method1');
$app->get('/method2', 'App\Controllers\MyController:method2');
$app->get('/method3', '\MyController:method3');
/* echo "<pre>";
$app->error(function (\Exception $e) use ($app) {
	
	$app->render('error.php');
	
});
	echo "</pre>"; */
$app->run();