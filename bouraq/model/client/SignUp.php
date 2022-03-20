<?php 

require_once "../4test/model/Connection.php";

class Register extends Connection

{
    public function check($email)
    {
        $query = "SELECT * FROM `client` WHERE  email='$email'";
        $log = $this->conn()->prepare($query);
        $log->execute();
        $res = $log->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    

    // sign up method for new client 
    public function signupClient($name,$second,$phone,$email,$hashed_password)
    {
        if(isset($_POST['submit']))
        {

           if($this->check($email)==null)
           {
            //    insert data into table database
            
                $query = "INSERT INTO client (name, second, phone, email, password) VALUES ('$name', '$second', '$phone', '$email', '$hashed_password')";
                $log = $this->conn()->prepare($query);
                $log->execute();
           }
          else{
              return true;
          }
          
              
         
        }
    }

}

?>