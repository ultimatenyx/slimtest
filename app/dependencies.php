<?php

$container = $app->getContainer();


// Add our invokable class to the container
// Choose a name for it in the container

$container['MyController'] = function() {

	// note the use of the namespace
	// $container is injected to pass it to the class
	// constructor
	return new ControllersUserController($container);

}
?>