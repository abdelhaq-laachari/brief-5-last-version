<?php 

require_once "../4test/model/Connection.php";

class Update extends Connection

{
    public function updates($id,$Fname,$Lname,$phone,$email)
    {
        $query = "UPDATE client SET name = '$Fname' , second = '$Lname' , phone = '$phone' , email = '$email'  WHERE idClient = '$id' ";
        $log = $this->conn()->prepare($query);
        $log->execute();
    } 

}

 
?>