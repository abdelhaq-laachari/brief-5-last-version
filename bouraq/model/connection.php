<?php 

class Connection
{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $database="bouraq";
	private $conn;

	public function __construct()
	{

		try {
			  $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
			  // set the PDO error mode to exception
			 
		
			} catch(PDOException $e) 
			{
			  echo "Connection failed: " . $e->getMessage();
			}
	}
}





?>