<?php
class Application {

	const PARAMETER_NAME = 'section';

	public function run() {

		$section = $this->getCurrentSection();

		$section->run();
	}

	private function getCurrentSection() {

		$sectionParameter = $this->getSectionParameterValue(Application::PARAMETER_NAME);

		return $this->createSectionClass($sectionParameter);
	}

	private function getSectionParameterValue($parameter) {

		if (isset($_GET[$parameter]) && $_GET[$parameter])
			return strtolower($_GET[$parameter]);

		return 'index';
	}

	private function createSectionClass($section) {

		$sectionClassName = ucfirst($section) . 'Section';

		require_once('classes/sections/AbstractSection.php');
		require_once('classes/sections/' . $sectionClassName . '.php');

		return new $sectionClassName();
	}
}