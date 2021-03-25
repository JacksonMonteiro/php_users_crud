<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="view/css/dashboard.css">

	<meta charset="utf-8">
	
	<title>Atualizar Usuário</title>
</head>
<body>
	<header class="deep-purple lighten-1">
    	<h1 class="white-text">Atualizar Usuário</h1>
    </header>

	<div class="row flex" id="add-user-form">
		<?php  
		$mail = $_GET["mail"];

		echo 
		"
		<form action='update_user.php?mail={$mail}' method='POST' class='col s11'> 
			<div class='row'>
				<label for='usrnm' class='input-field col s11'>
					Nome de usuário: <input type='text' placeholder='Jackson' id='usrnm' name='usrnm' class='validate'>
				</label>
			</div>
			<div class='row'>
				<label for='pwd' class='input-field col s11'>
					Senha: <input type='password' id='pwd' name='pwd' class='validate'>
				</label>		
			</div>
			<input type='submit' value='Atualizar' class='btn deep-purple lighten-1 button'> <a href='read_data.php' class='btn amber darken-3'>Voltar</a>
		</form>
		";
		?>
	</div>
</body>
</html>