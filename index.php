<?php 
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
	include_once("controllers/controller.php");
	include_once("controllers/controllerwebsite.php");

$controllerweb = new controllerwebsite();
	$controllerweb->index();
?>