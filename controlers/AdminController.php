<?php

require_once ROOT."/models/Tests.php";

class AdminController {
	
	public function actionIndex() {

		$_SESSION['count'] = 1;

		if ( empty( $_POST ) ) {
			include(ROOT."/views/page-add-test-name.php");						
		} else {
			
			if ( $_POST['test_name'] != '' ) {
				$this->actionAddTitle($_POST['test_name']);
			}

			if ( isset($_POST['add_quest']) ) {
				$this->actionAddQuest($_POST);
			}

			//print_r($_POST);
			
			if ( isset($_POST['save_test']) ) {
				$this->saveTest();
			}

			include(ROOT."/views/page-add-test-quest.php");

		}

		return true;
	}


	public function actionAddTitle($value) {
	 	$_SESSION['test_name'] = $value;
	}

	public function actionAddQuest($value) {
	 	$_SESSION['quest'][] = $value;
	 	$_SESSION['count']++;
	 	echo "<pre>";
	 	//print_r($_SESSION['quest']);
	 	echo "</pre>";
	}

	public function saveTest() {
		echo "<pre>";
		print_r($_SESSION);
		$_SESSION = array();
		print_r($_SESSION);
		echo "</pre>";
	 	echo "Ok";
	 } 
}

?>