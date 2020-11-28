<?php

class User {
	// Attributes
	private $username;
	private $email;
	private $password;

	// Getters
	public function getUsername() {
		return $this->username;
	}
	
	public function getEmail() {
		return $this->email;
	}

	public function getPassword() {
		return $this->password;
	}

	// Setters
	public function setUsername($u) {
		$this->username = $u;
	}

	public function setEmail($e) {
		$this->email = $e;
	}

	public function setPassword($p) {
		$this->password = $p;
	}
}

?>