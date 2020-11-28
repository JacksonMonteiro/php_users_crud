<?php

require_once('sql/Connection.class.php');
require_once('../../model/User.class.php');

class UserController {
	public function insert($user){
		try {
			if (get_class($user) == "User") {
				$connection = new Connection("../sql/config.ini");
				$query = "INSERT INTO users (username, email, password) values (:u, :e, md5(:p));";
				$command = $connection->getPDO()->prepare($query);

				$usr = $user->getUsername();
				$mail = $user->getEmail();
				$pwd = $user->getPassword();

				$command->bindParam("u", $usr);
				$command->bindParam("e", $mail);
				$command->bindParam("p", $pwd);

				if ($command->execute()){
					$connection->closeConnection();
					return true;
				} else {
					$connection->closeConnection();
					return false;
				}
			}
		} catch (PDOException $e) {
			echo "Error: ${$e->getMessage()}";
		}
	}
}

?>