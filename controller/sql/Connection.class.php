<?php

class Connection {
	//Attributes
	private $usr;
	private $pwd;
	private $server;
	private $db;
	private $driver;
	private $pdo;

	function __construct($file) {
		try {
			if (file_exists($file)) {
				$config = parse_ini_file($file);

				$this->usr = $config["user"];
				$this->pwd = $config["password"];
				$this->server = $config["host"];
				$this->db = $config["database"];
				$this->driver = $config["driver"];

				switch($this->driver) {
					case "mysql":
						$this->pdo = new PDO("{$this->driver}:host={$this->server};dbname={$this->db}", $this->usr, $this->pwd);
						$this->getPDO()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						echo "<script> alert('success'); </script>";
						break;
					default:
						die("</script> alert('DBMS Incompatible with the system'); </script>");
				}
			} else {
				die("<script>alert('Configuration file not founded')</script>");
			}
		} catch (PDOException $e) {
			$error = addslashes($e->getMessage());
			echo "<script>alert('Error to connect database {$error}')</script>";
		} catch (exception $e) {
			echo "<script>Error to proccess file</script>";
		}
	}

	function getPDO() {
		return $this->pdo;
	}

	function closeConnection() {
		$this->pdo = null;
	}
}

?>