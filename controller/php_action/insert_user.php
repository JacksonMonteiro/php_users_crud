<?php

require_once('../UserController.class.php');
require_once('../../model/User.class.php');

$usr = new User();
$usr->setUsername($_POST["usrnm"]);
$usr->setEmail($_POST["mail"]);
$usr->setPassword($_POST["pwd"]);

$controller = new UserController();

if ($controller->insert($usr)) {
	header ("Location: http://localhost/Users-Management/index.php");
} else {
	echo "<h2>Erro</h2>";
}

?>