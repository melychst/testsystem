<?php
session_start();

ini_set("display errors", 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

define('ROOT', dirname(__FILE__));
require_once(ROOT."/components/Router.php");
require_once ROOT."/inc/db.php";

$router = new Router();
$router->run();

require_once("header.php");

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
