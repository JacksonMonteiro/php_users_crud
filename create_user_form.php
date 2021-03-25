<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="view/css/dashboard.css">

	<meta charset="utf-8">
	
	<title>Add User</title>
</head>
<body>
	<header class="deep-purple lighten-1">
    	<h1 class="white-text">Adicionar Usuário</h1>
    </header>

	<div class="row flex" id="add-user-form">
		<form action="create_user.php" method="POST" class="col s11">
			<div class="row">
				<label for="usrnm" class="input-field col s11">
					Nome de usuário: <input type="text" placeholder="Jackson" id="usrnm" name="usrnm" class="validate" autofocus>
				</label>
			</div>
			<div class="row">
				<label for="mail" class="input-field col s11">
					E-mail: <input type="text" placeholder="email@email.com" id="mail" name="mail" class="validate">
				</label>
			</div>
			<div class="row">
				<label for="pwd" class="input-field col s11">
					Senha: <input type="password" id="pwd" name="pwd" class="validate">
				</label>		
			</div>
			<input type="submit" value="Adicionar" class="btn deep-purple lighten-1 button"> <a href="read_data.php" class="btn amber darken-3 button">Voltar</a>
		</form>
	</div>
</body>
</html>