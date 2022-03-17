<?php 

require_once "./model/Connection.php";

class Search extends Connection

{

 
    public function reserv($depart,$arrive,$day,$status)
    {

        $query = "SELECT * FROM `trip` WHERE ville_de_depart = '$depart' AND ville_darrivée = '$arrive' AND jour_de_depart = '$day' AND availability = '$status' ";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res; 
       
    }
 
    public function insert($depart,$arrive,$dateD,$dateA,$prix,$Ddepart)
    {
        
        $query = "INSERT INTO reservation (ville_de_depart, ville_darrivée, date_de_depart, date_darrivée, prix, jour_de_depart) VALUES ('$depart', '$arrive', '$dateD', '$dateA', '$prix', '$Ddepart')";
        $new = $this->conn()->prepare($query);
        $new->execute();
        
    }

    public function myTrips()
    {
        $query = "SELECT * FROM `reservation`";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    
    

}

?>