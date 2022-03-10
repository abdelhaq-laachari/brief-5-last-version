<?php 

require_once "../4test/model/Connection.php";

class Display extends Connection

{
    public function trips()
    {
       
           
            $query = "SELECT * FROM `trip`";
            $log = $this->conn()->prepare($query);
            $log->execute();
            $res = $log->fetchAll(PDO::FETCH_ASSOC);
            return $res;
       
    }

}

?>