<?php

define("DB_USER", "root");
define("DB_PASS", "");
define("DB_HOST", "localhost");
define("DB_NAME", "systemtest");

	$db = mysql_connect(DB_HOST, DB_USER, DB_PASS);
	$db_selected  = mysql_select_db(DB_NAME, $db);

	function addTest($testName){
		$_SESSION['testName'] = $testName;
	}

?>