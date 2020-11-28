<!DOCTYPE html>
<html>
    <head>
    	<!--Import Google Icon Font-->
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!--Import materialize.css-->
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      	<link rel="stylesheet" href="view/css/style.css">

      	<meta charset="utf-8"/>
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      	<title>User Management System</title>
    </head>
    <body>
    	<header class="deep-purple lighten-1">
    		<h1 class="white-text">User Management System</h1>
    	</header>
    	<div>
    		<div class="col s12 m6 push-m3">
	    		<table class="striped">
	    			<thead>
	    				<tr>
	    					<th>User</th>
	    					<th>E-mail</th>
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
	    							<td>{$usr->getUsername()}</td>
	    							<td>{$usr->getEmail()}</td>
	    							<td>{$usr->getPassword()}</td>
	    							<td><a href='#' class='btn-floating deep-purple lighten-1'><i class='mediu material-icons'>create</i></a></td>
	    						</tr>
	    						";
	    					}
	    				}
	    				?>
	    		</table>
	    		<br>
	    		<a href="view/add_user_form.php" class="btn deep-purple lighten-1">Add User</a> <a href="view/delete_user_form.php" class="btn red" id="delete">Delete user</a>
	    	</div>
    	</div>

      	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
