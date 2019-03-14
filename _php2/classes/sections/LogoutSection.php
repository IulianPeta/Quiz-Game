<?php

class LogoutSection {

	public function run() {

		unset($_SESSION['loged_in']);

		session_destroy();

		header('Location: index.php');

	}
}