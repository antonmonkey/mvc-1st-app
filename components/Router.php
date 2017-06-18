<?php 

class Router 
{

	private $routes;

	public function __construct() {

		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);

	}

	// Return request string
	private function getURI() 
	{
		if(!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}		
	}

	public function run() {

		// Get request string
		$uri = $this->getURI();

		// Check for request in routes.php
		foreach ($this->routes as $uriPattern => $path) {

			// Compare $uriPattern and $uri	
			if (preg_match("~$uriPattern~", "$uri")) {

				// Get internal route from request
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

				// Identify controller and action
				$segments = explode("/", $internalRoute	);

				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);

				$actionName = 'action'.ucfirst(array_shift($segments));

				$parameters = $segments;

				// Link Controller file
				$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
// echo $controllerName.'<br>'.$actionName;die;
				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}
				// Create object, call action
				$controllerObject = new $controllerName;
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
				if ($result != null) {
					break;
				}

			}


		}

	}
}