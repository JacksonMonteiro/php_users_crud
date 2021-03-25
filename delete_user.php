<?php

require_once('controller/UserController.class.php');

$controller = new UserController();

if ($controller->delete($_POST['mail'])) {
	header ('Location: http://localhost/Users-Management/read_data.php');
}

?>