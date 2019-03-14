<?php
abstract class AbstractSection {

	protected function displaySectionTemplate($template) {

		$htmlContent = file_get_contents('templates/' . $template . '.html');
		
		echo $htmlContent;
	}
}