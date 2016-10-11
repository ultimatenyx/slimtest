<?php

$container = $app->getContainer();


// Add our invokable class to the container
// Choose a name for it in the container

$container['App\Controllers\MyController'] = function ($c) {
	return new App\Controllers\MyController($c);
};
$container['notFoundHandler'] = function ($c) {
	return function ($request, $response) use ($c) {
		return $c['response']
		->withStatus(404)
		->withHeader('Content-Type', 'text/json')
		->write('{"status":404,"msg":"Page not found"}');
	};
};

?>