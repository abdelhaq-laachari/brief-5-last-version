<?php

require_once "../4test/model/Connection.php";




class AddTrip extends Connection
{
    public function insert($depart,$arrive,$dateD,$dateA,$prix,$dayD)
    {
            $query = "INSERT INTO trip (ville_de_depart, ville_darrivée, date_de_depart, date_darrivée, prix, jour_de_depart) VALUES ('$depart','$arrive','$dateD','$dateA','$prix','$dayD')";
            $log = $this->conn()->prepare($query);
            $log->execute();
    }

    public function 
}



?>
