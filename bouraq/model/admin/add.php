<?php

require_once "../4test/model/Connection.php";




class AddTrip extends Connection
{
    public function display()
    {
            $query = "SELECT * FROM `trip` ";
            $log = $this->conn()->prepare($query);
            $log->execute();
            $res = $log->fetch(PDO::FETCH_ASSOC);
            return $res;
    }
}




?>