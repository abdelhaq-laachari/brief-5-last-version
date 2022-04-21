<?php 

class Connection
{ 
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $database="bouraq";
	

	public function conn()
	{

		try {
			  $conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
			  // set the PDO error mode to exception
              return $conn;
			 
		
			} catch(PDOException $e) 
			{
			  echo "Connection failed: " . $e->getMessage();
			}
	}
}





?>