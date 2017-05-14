<?php
session_start();
require_once("header.php");
ini_set("display errors", 1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once(ROOT."/components/Router.php");

$router = new Router();
$router->run();

?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Test page</h1>
			<a href="/admin">Sign in</a>			
		</div>
	</div>
</div>

<?php 
	require_once("footer.php");
?>
