<!DOCTYPE html>
<html>
    <head>
    	<!--Import Google Icon Font-->
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!--Import materialize.css-->
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      	<link rel="stylesheet" href="view/css/dashboard.css">

      	<meta charset="utf-8"/>
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      	<title>Gerenciamento de usuários</title>
    </head>
    <body>
    	<header class="deep-purple lighten-1">
    		<h1 class="white-text">Gerenciamento de usuários</h1>
    	</header>
    	<div>
    		<div class="col s12 m6 push-m3">
	    		<table class="striped">
	    			<thead>
	    				<tr>
	    					<th>E-mail</th>
	    					<th>User</th>
	    					<th>Password</th>
	    				</tr>
	    			</thead>
	    			<tbody>
	    				<?php
	    				require_once('controller/UserController.class.php');
	    				$controller = new UserController();
	    				$list = $controller->read();
	    				if ($list != null) {
	    					foreach ($list as $usr) {
	    						echo 
	    						"
	    						<tr>
	    							<td>{$usr->getEmail()}</td>
	    							<td>{$usr->getUsername()}</td>
	    							<td>{$usr->getPassword()}</td>
	    							<td><a href='update_user_form.php?mail={$usr->getEmail()}' class='btn-floating deep-purple lighten-1'><i class='mediu material-icons'>create</i></a></td>
	    						</tr>
	    						";
	    					}
	    				}
	    				?>
	    		</table>
	    		<br>
	    		<a href="create_user_form.php" class="btn deep-purple lighten-1">Adicionar</a> <a href="delete_user_form.php" class="btn red" id="delete">Deletar</a> <a href="index.php" class="btn amber darken-3" id="delete">Sair</a> 
	    	</div>
    	</div>

      	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
