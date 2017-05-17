<?php

class Tests {

	public $testName;
	public $tests = array();
	public $idTestName;
	
	public function addTests() {
		
		$this->testName = $_SESSION['test_name'];

		foreach ($_SESSION['quest'] as $key => $value) {
			array_push($this->tests, $value);
		}
		
		$_SESSION = array();
		
		$this->add_test_name();
		$this->add_test_quest();

		return "All tests";
	}


	public function add_test_name() {

		$sql = "INSERT INTO tests (name) VALUE ('$this->testName')";
		mysql_query($sql);
		$this->idTestName = (int)mysql_insert_id();
	}

	public function add_test_quest() {


		foreach ($this->tests as $key => $value) {
			$quest = $value['quest'];
			$ans1 = $value['ans1'];
			$ans2 = $value['ans2'];
			$ans3 = $value['ans3'];
			$ans4 = $value['ans4'];
			$bal_ans1 = (int)$value['bal_ans1'];
			$bal_ans2 = (int)$value['bal_ans2'];
			$bal_ans3 = (int)$value['bal_ans3'];
			$bal_ans4 = (int)$value['bal_ans4'];
			$right_ans = $value['right_ans'];		
		
			$sql = "INSERT INTO questions (id_test, quest, ans1, ans2, ans3, ans4, bal_ans1, bal_ans2, bal_ans3, bal_ans4, right_ans) 
					VALUE ('$this->idTestName', '$quest', '$ans1', '$ans2',	'$ans3', '$ans4',	'$bal_ans1', '$bal_ans2',	'$bal_ans3', '$bal_ans4',	'$right_ans')";

			$result = mysql_query($sql);

			if (!$result) {
			    $message  = 'Неверный запрос: ' . mysql_error() . "\n";
			    $message .= 'Запрос целиком: ' . $sql;
			    die($message);
			}

		}
	}	
}
?>