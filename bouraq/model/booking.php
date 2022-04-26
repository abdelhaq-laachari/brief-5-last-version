<?php 

require_once "./model/Connection.php";

class Search extends Connection

{

 
    public function reserv($depart,$arrive,$day)
    {
        
        $query = "SELECT * FROM `trip` T, `train` Tr  WHERE T.ville_de_depart = '$depart' AND T.ville_darrivée = '$arrive' AND T.jour_de_depart = '$day' AND T.status = 'Actived' AND T.idTrain = Tr.idTrain AND Tr.seats > 0 ";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res; 
       
    }

    function UpdateSeats($id,$num)
   {
        $query = " UPDATE train join trip on train.idTrain = trip.idTrain SET seats = '$num' WHERE trip.idTrip = $id ";
        $log=$this->conn()->prepare($query);
        $log->execute();
        $results = $log->fetch();
        return $results;
   }

   function Seats($id)
   {
        $query = "SELECT train.seats FROM train join trip ON train.idTrain = trip.idTrain WHERE trip.idTrip = $id ";
        $log=$this->conn()->prepare($query);
        $log->execute();
        $results = $log->fetch();
        return $results;
   }


    
    

}

?>