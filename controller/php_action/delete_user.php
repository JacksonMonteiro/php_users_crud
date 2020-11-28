<?php

require_once('../UserController.class.php');

$controller = new UserController();

if ($controller->delete($_POST['mail'])) {
	header ('Location: http://localhost/Users-Management/view/delete_user_form.php');
}

?>