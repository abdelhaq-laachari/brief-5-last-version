<?php 

require_once "./model/Connection.php";

class Search extends Connection

{

 
    public function reserv($depart,$arrive,$day)
    {
        
        // $sth = $this->conn()->prepare("SELECT * FROM `trip` WHERE ville_de_depart = '$depart' AND ville_darrivée = '$arrive' AND jour_de_depart = '$day'");
        // $sth->setFetchMode(PDO:: FETCH_ASSOC);
        // $sth -> execute();
        // $res=$sth->fetch();
        // return $res;

        $query = "SELECT * FROM `trip` WHERE ville_de_depart = '$depart' AND ville_darrivée = '$arrive' AND jour_de_depart = '$day'";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res; 
       
    }

    // static public function gettrip($data){
	// 	$idTrip = $data['idTrip'];
	// 	try{
	// 		$query = 'SELECT * FROM `trip` WHERE idTrip=:idTrip';
	// 		$stmt = Connection::conn()->prepare($query);
	// 		$stmt->execute(array(":idTrip" => $idTrip));
	// 		$post = $stmt->fetch(PDO::FETCH_OBJ);
	// 		return $post;
	// 	}catch(PDOException $ex){
	// 		echo 'erreur' . $ex->getMessage();
	// 	}
	// }

    
    

}

?>