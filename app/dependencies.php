<?php

$container = $app->getContainer();


// Add our invokable class to the container
// Choose a name for it in the container

$container['App\Controllers\MyController'] = function ($c) {
	return new App\Controllers\MyController($c);
};
?>