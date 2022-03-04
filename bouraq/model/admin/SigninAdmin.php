<?php 

require_once "../4test/model/Connection.php";

class login extends Connection

{
    public function signin($email,$password)
    {
        if(isset($_POST['submit']))
        {

           
            $query = "SELECT * FROM `admin` WHERE  email='$email' AND password='$password'";
            $log = $this->conn()->prepare($query);
            $log->execute();
            $res = $log->fetch(PDO::FETCH_ASSOC);
            return $res;
              
         
        }
    }

}

?>