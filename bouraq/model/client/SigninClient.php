<?php 

require_once "../4test/model/Connection.php";

class SignIn extends Connection

{
    
    public function signinClient($email,$password)
    {
        if(isset($_POST['submit']))
        {

           
            $query = "SELECT * FROM `client` WHERE  email='$email' AND password='$password'";
            $log = $this->conn()->prepare($query);
            $log->execute();
            $res = $log->fetch(PDO::FETCH_ASSOC);
            return $res;
              
         
        }
    }

}

?>