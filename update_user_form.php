<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="view/css/style.css">

	<meta charset="utf-8">
	
	<title>Add User</title>
</head>
<body>
	<header class="deep-purple lighten-1">
    	<h1 class="white-text">Update User</h1>
    </header>

	<div class="row flex" id="add-user-form">
		<?php  
		$mail = $_GET["mail"];

		echo 
		"
		<form action='update_user.php?mail={$mail}' method='POST' class='col s11'> 
			<div class='row'>
				<label for='usrnm' class='input-field col s11'>
					User Name: <input type='text' placeholder='User Name' id='usrnm' name='usrnm' class='validate'>
				</label>
			</div>
			<div class='row'>
				<label for='pwd' class='input-field col s11'>
					Password: <input type='password' placeholder='User Name' id='pwd' name='pwd' class='validate'>
				</label>		
			</div>
			<input type='submit' value='Update user' class='btn deep-purple lighten-1 button'> <a href='index.php' class='btn red button'>Users list</a>
		</form>
		";
		?>
	</div>
</body>
</html>