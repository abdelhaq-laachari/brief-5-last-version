<?php 

require_once "./model/Connection.php";

class Search extends Connection

{

 
    public function reserv($depart,$arrive,$day)
    {
        
        $sth = $this->conn()->prepare("SELECT * FROM `trip` WHERE ville_de_depart = '$depart' AND ville_darrivée = '$arrive' AND jour_de_depart = '$day'");
        $sth->setFetchMode(PDO:: FETCH_ASSOC);
        $sth -> execute();
        $res=$sth->fetch();
        return $res;
       
    }

    public function information()
    {
        
    }

    
    

}

?>