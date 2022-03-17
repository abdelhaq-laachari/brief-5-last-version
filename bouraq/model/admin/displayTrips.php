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


    public function CancelTrip($id)
    {
        $query = "UPDATE trip SET availability = 0 WHERE idTrip = $id ";
        $log = $this->conn()->prepare($query);
        $log->execute();
    }
}




?>


