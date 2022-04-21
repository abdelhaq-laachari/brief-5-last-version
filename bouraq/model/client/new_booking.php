<?php 

require_once "./model/Connection.php";

class Search extends Connection

{

 
    public function reserv($depart,$arrive,$day)
    {

        $query = "SELECT * FROM `trip` WHERE ville_de_depart = '$depart' AND ville_darrivée = '$arrive' AND jour_de_depart = '$day' AND status = 'Actived' ";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res; 
       
    }
 
    
    public function insert($idClient,$idTrip)
    {
        $query = "INSERT INTO `booking`(`id_client`, `id_trip`) VALUES ('$idClient','$idTrip')";
        $new = $this->conn()->prepare($query);
        $new->execute();
        
    }

    public function myTrips($idClient)
    {
        // $query = "SELECT * FROM `reservation`";
        $query = "SELECT * FROM `booking` my,`client` C,`trip` T WHERE my.id_client = '$idClient' and my.id_client = C.idClient and my.id_trip = T.idTrip";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function delete($idClient,$idTicket)
    {
        $query = "DELETE FROM `booking` WHERE id_client = '$idClient' and idTicket = '$idTicket'";
        $log = $this->conn()->prepare($query);
        $log->execute();
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