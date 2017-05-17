<?php

require_once ROOT."/models/Tests.php";

class AdminController {
	public function actionIndex() {

		$_SESSION['count'] = 1;

		if ( empty( $_POST ) ) {
			include(ROOT."/views/page-add-test-name.php");						
		} else {
			
			if ( isset($_POST['test_name']) &&  ($_POST['test_name'] != '' ) ) {
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
	 	//header("Location: add-quest");
	}

	public function actionAddQuest($value) {
	 	$_SESSION['quest'][] = $value;
	 	$_SESSION['count']++;
	}

	public function saveTest() {
 	
		$addQuest = new Tests();
	 	$addQuest->addTests();
	 	header("Location: /");
	 } 
}

?>