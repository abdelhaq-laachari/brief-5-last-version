<?php

require_once "../4test/model/Connection.php";




class AddTrip extends Connection
{
    public function insert($depart,$arrive,$dateD,$dateA,$prix,$dayD,$status)
    {
            $query = "INSERT INTO trip (ville_de_depart, ville_darrivée, date_de_depart, date_darrivée, prix, jour_de_depart, status) VALUES ('$depart','$arrive','$dateD','$dateA','$prix','$dayD','$status')";
            $log = $this->conn()->prepare($query);
            $log->execute();
    }

    
    // public function update($depart,$arrive,$dateD,$dateA,$prix,$dayD)
    // {
    //     $query = "UPDATE trip SET ville_de_depart = '$depart' , ville_darrivée = '$arrive' , date_de_depart = '$dateD', date_darrivée = '$dateA' , prix = '$prix' , jour_de_depart = '$dayD' ";
    //     $log = $this->conn()->prepare($query);
    //     $log->execute();
    // }

    
}



?>
