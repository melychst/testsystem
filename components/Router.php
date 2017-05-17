<?php

class Router {
	
	private $router;

	public function __construct() {

		$pathRouters = ROOT.'/inc/routers.php';
		$this->routers = include($pathRouters);

	}

	private function getURL() {

		if ( !empty($_SERVER['REQUEST_URI']) ) {
			$url = trim( $_SERVER['REQUEST_URI'], '/' );
			return $url;
		}		
	}

	public function run() {

		$url = $this->getURL();
		
		foreach ($this->routers as $patern => $path) {
			if ( preg_match("`$patern`", $url) ) {
				
				$pathArgs = explode("/", $path);

				$controller = ucfirst( array_shift($pathArgs)."Controller" );
				$action = 'action'.ucfirst( array_shift($pathArgs) );

				//echo $controller."<br>";
				//echo $action."<br>";

				$controlFile = ROOT . "/controlers/".$controller.".php";

				if ( file_exists($controlFile) )  {
					include($controlFile);
				}

				$controllerObj = new $controller;
				$result = $controllerObj->$action();

				if ( $result != NULL ) {
					break;
				}
				
			}
		}

	}
}

?>