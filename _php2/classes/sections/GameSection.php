<?php

class GameSection extends AbstractSection {

	private $questions = array(
		'Who is Madonna?',
		'On which continent is Romania?',
		'What is the color of the Planet?'
	);

	public function run() {

		if (!isset($_SESSION['loged_in']))
			header('Location: index.php?section=login');
		
		//$this->displaySectionTemplate('game');

		$question = $this->getCurrentQuestion($_GET['question']);
		echo $question;
 	}

 	private function getCurrentQuestion($questionNumber) {

 		return $this->questions[$questionNumber - 1];
 	}
}