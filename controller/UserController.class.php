<?php

require_once('sql/Connection.class.php');
require_once('model/User.class.php');

class UserController {
	public function create($user){
		try {
			if (get_class($user) == "User") {
				$connection = new Connection("controller/sql/config.ini");
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

	public function read(){
		try{
			$connection= new Connection("controller/sql/config.ini");
        	$command = $connection->getPDO()->prepare("SELECT * FROM users;");
        	if($command->execute()){
            	$list = $command->fetchAll(PDO::FETCH_CLASS, "User");
	            $connection->closeConnection();
    	        return $list;
    	    }else{
				$connection->closeConnection();
        	    return null;
        	 }
     	}catch(PDOException $e){
        	echo ("[-] System error: {$e->getMessage()}");
      	}
    }

    public function update($user, $mail) {
		try {
			if (get_class($user) == "User") {
				$connection = new Connection("controller/sql/config.ini");
				$query = "UPDATE users SET username=:u, password=md5(:p) WHERE email='$mail';";
				$command = $connection->getPDO()->prepare($query);

				$usr = $user->getUsername();
				$pwd = $user->getPassword();

				$command->bindParam("u", $usr);
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

	public function delete($email) {
		try {
			$connection = new Connection('controller/sql/config.ini');
			$query = "DELETE FROM users WHERE email=:e;";
			$command = $connection->getPDO()->prepare($query);
			$command->bindParam("e", $email);
			if ($command->execute()){
				$connection->closeConnection();
				return true;
			} else {
				$connection->closeConnection();
				return false;
			}
		} catch (PDOException $e) {
			echo "Error: {$e->getMessage()}";
		}
	}
}

?>