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

    // public function update($depart,$arrive,$dateD,$dateA,$prix,$dayD)
    // {
    //     $query = "UPDATE trip SET ville_de_depart = '$depart' , ville_darrivée = '$arrive' , date_de_depart = '$dateD', date_darrivée = '$dateA' , prix = '$prix' , jour_de_depart = '$dayD' ";
    //     $log = $this->conn()->prepare($query);
    //     $log->execute();
    // }
}




?>


