<?php 

require_once "../4test/model/Connection.php";

class Display extends Connection

{
    public function trips()
    {
        // $query = "SELECT * FROM `trip`";
        $query = "SELECT * FROM `trip` my,`train` T WHERE my.idtrain = T.idTrain";
        // $query = "SELECT T.* FROM `trip` my,`train` T WHERE my.idTrain = '2' and my.idtrain = T.idTrain";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }


    public function CancelTrip($id) 
    {
        $query = "UPDATE trip SET status = 'Canceled' WHERE idTrip = $id ";
        $log = $this->conn()->prepare($query);
        $log->execute();
    }

    public function enable($id)
    {
        $query = "UPDATE trip SET status = 'Actived' WHERE idTrip = $id ";
        $log = $this->conn()->prepare($query);
        $log->execute();
    }

    public function update($depart,$arrive,$dateD,$dateA,$prix,$dayD,$id)
    {
        $query = "UPDATE trip SET ville_de_depart = '$depart' , ville_darrivée = '$arrive' , date_de_depart = '$dateD', date_darrivée = '$dateA' , prix = '$prix' , jour_de_depart = '$dayD' WHERE idTrip = $id ";
        $log = $this->conn()->prepare($query);
        $log->execute();
    }

    
    public function TotalTrips() 
    {
        $query = "SELECT * FROM `trip`";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $total = $log->rowCount();
        return $total;
    }
    public function ActiveTrips()
    {
        $query = "SELECT * FROM `trip` WHERE status = 'Actived'";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $total = $log->rowCount();
        return $total;
    }

    public function sum()
    {
        $query = "SELECT SUM(prix) FROM `trip`";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $Active = $log->fetchColumn();
        return $Active;
    }

}




?>


