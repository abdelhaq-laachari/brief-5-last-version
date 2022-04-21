<?php

require_once "../4test/model/Connection.php";




class AddTrip extends Connection
{
    public function insert($idTrain,$depart,$arrive,$dateD,$dateA,$prix,$dayD,$status)
    {
            $query = "INSERT INTO trip (idTrain, ville_de_depart, ville_darrivée, date_de_depart, date_darrivée, prix, jour_de_depart, status) VALUES ('$idTrain','$depart','$arrive','$dateD','$dateA','$prix','$dayD','$status' )";
            $log = $this->conn()->prepare($query);
            $log->execute();
    }

    
}



?>
