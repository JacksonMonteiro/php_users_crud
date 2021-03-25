<!DOCTYPE html>
<html>
    <head>
    	<!--Import Google Icon Font-->
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!--Import materialize.css-->
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      	<link rel="stylesheet" href="view/css/index.css">

      	<meta charset="utf-8"/>
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      	<title>Gerenciamento de Usuários</title>
    </head>
    <body>
    	<header class="deep-purple lighten-1">
    		<h1 class="center-align white-text center-align">Gerenciamento de usuários</h1>
    	</header>
    	<main class="container">
    		<div class="row">
    		<form action="login.php" class="col s12">
    			<div class="input-field col s12">
    				<div class="row">
    					<div class="input-field col s12">
   							<label for="email">Email</label>
   							<input type="email" class="validate" id="email" name="email" required="required">
    				    </div>
    				</div>
    				<div class="row">
    					<div class="input-field col s12">
    						<label for="password">Senha:</label>
    						<input type="password" id="password" name="password" required="required" class="validate">
    					</div>
    				</div>
    				<div class="row">
    					<div class="input-field col s12">
    						<button class="waves-effect waves-light btn-large deep-purple lighten-1" type="submit">Login</button>
    						<a class="waves-effect waves-light btn-large amber darken-3">Registrar-se</a>
    					</div>
    				</div>
    			</div>
    		</form>
    	</div>	
    	</main>	

      	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
