<?php 

require_once "../4test/model/Connection.php";

class DisplayClient extends Connection

{
    public function clients()
    {
       
            
            $query = "SELECT * FROM `client`";
            $log = $this->conn()->prepare($query);
            $log->execute();
            $res = $log->fetchAll(PDO::FETCH_ASSOC);
            return $res; 
       
    }

}

?>