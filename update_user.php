<?php

require_once('controller/UserController.class.php');
require_once('model/User.class.php');

$usr = new User();
$usr->setUsername($_POST["usrnm"]);
$usr->setPassword($_POST["pwd"]);
$mail = $_GET["mail"];

$controller = new UserController();

if ($controller->update($usr, $mail)) {
	header("Location: http://localhost/Users-Management/index.php");
}
?>