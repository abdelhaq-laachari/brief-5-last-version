<?php 

require_once "./model/Connection.php";

class Search extends Connection

{

 
    public function reserv($depart,$arrive,$day)
    {
        
        $query = "SELECT * FROM `trip` WHERE ville_de_depart = '$depart' AND ville_darrivée = '$arrive' AND jour_de_depart = '$day' AND status = 'Actived' ";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res; 
       
    }


    
    

}

?>