<?php 

require_once "../4test/model/Connection.php";

class DisplayClient extends Connection

{
    public function clients()
    {
       
            
            // $query = "SELECT * FROM `client`";
            $query = "SELECT * FROM `booking` my,`client` C,`trip` T WHERE my.id_client = C.idClient and my.id_trip = T.idTrip;";
            $log = $this->conn()->prepare($query);
            $log->execute();
            $res = $log->fetchAll(PDO::FETCH_ASSOC);
            return $res; 
       
    }

}

?>