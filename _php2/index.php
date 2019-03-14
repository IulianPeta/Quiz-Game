<?php

session_start();

require_once('classes/Application.php');

$app = new Application();

$app->run();

