<?php
class LoginSection extends AbstractSection {

	public function run() {

		if(isset($_POST['submit_login']))
			$this->logUserIn();

		$this->displaySectionTemplate('login');
	}

	private function logUSerIn() {

		$userName=$_POST['user_input'];
		$password=$_POST['pass_input'];

		if($userName == 'admin' && $password == 'admin') {
			$_SESSION['loged_in']=true;
			header('Location: index.php?section=game');

		}

	}

}