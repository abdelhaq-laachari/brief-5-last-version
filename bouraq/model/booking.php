<?php 

require_once "./model/Connection.php";

class Search extends Connection

{

 
    public function reserv($depart,$arrive,$day,$status)
    {
        
        $query = "SELECT * FROM `trip` WHERE ville_de_depart = '$depart' AND ville_darrivée = '$arrive' AND jour_de_depart = '$day' AND availability = '$status'";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res; 
       
    }

    public function information()
    {
        
    }

    
    

}

?>