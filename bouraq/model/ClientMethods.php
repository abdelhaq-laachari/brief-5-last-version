<?php


require_once __DIR__."/Connection.php";

class ClientMethods extends Connection{


    public function getProduct(){

        $query=$this->connect()->prepare("SELECT * FROM my_appointment");
            if($query->execute()){
                return $query->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return 0;
            }
    
    }
    public function MyBooking($id_client)
    {
        $query=$this->connect()->prepare("SELECT A.* FROM `my_appointment` my,`client` C,`appointment` A WHERE my.id_client = '$id_client' and my.id_client = C.loginKey and my.id_appointment = A.id ");

        // SELECT `id`, `id_client`, `id_appointment`, `service` FROM `my_appointment` WHERE id_client = "1";
        if($query->execute()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return 0;
        }
    
    }
    public function SelectSingle($id){

        $query=$this->connect()->prepare("SELECT * FROM appointment WHERE id = '$id' ");
            if($query->execute()){
                return $query->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return 0;
            }
    
    }


    function add()
    {
    
            $query=$this->connect()->prepare("INSERT INTO `my_appointment`(`name`,`id_appointment`) VALUES ('parker' , (SELECT id FROM appointment WHERE status = 'disable' ))");
            if($query->execute()){
                return true;
                
            }else{
                return false;
            }
    }


    public function signIn($loginKey)
    {
        
            $query = "SELECT * FROM `client` WHERE loginKey = '$loginKey'";
            $log = $this->connect()->prepare($query);
            if($log->execute())
            {
                return $log->fetchAll(PDO::FETCH_ASSOC);
            }
            else
            {
                return false;
            }
    }


    // public function check($email)
    // {
    //     $query = "SELECT * FROM `client` WHERE  email='$email'";
    //     $log = $this->connect()->prepare($query);
    //     $log->execute();
    //     $res = $log->fetch(PDO::FETCH_ASSOC);
    //     return $res;
    // }

    public function SignUp($email,$loginKey,$Fname,$Lname,$age,$phone)
    {

        // if($this->check($email)==null)
        // {
            $query = "INSERT INTO client (email, loginKey, Fname, Lname, age,phone) VALUES ('$email', '$loginKey', '$Fname', '$Lname', '$age','$phone')";
            $log = $this->connect()->prepare($query);
            $log->execute();
            if($log){
                return true;
            }else{
                return false;
            }
        // }
        
        
    }

    public function Search($date)
    {
        // $query = "SELECT * FROM `appointment` WHERE `date` = '$date'";
        $query = "SELECT * FROM appointment WHERE id NOT IN (SELECT id_appointment FROM my_appointment) AND date = '$date'";
        $log = $this->connect()->prepare($query);
        $log->execute();
        return $log->fetchAll(PDO::FETCH_ASSOC);
    }


    // select * from creneau where idcreneau is not in (select idcreneau from rendez-vous)
    // INSERT INTO my_appointment(name,id_appointment) VALUES ('parker' , (SELECT id FROM appointment WHERE status = "disable" ));
    // INSERT INTO `my_appointment` (`id`, `id_client`, `id_appointment`) VALUES (NULL, '3eef0d1617b7ad2dba09aa84a2182393', '4');
    

    function Booking($id_client,$id_appointment,$service)
    {
        $query=$this->connect()->prepare("INSERT INTO `my_appointment` (`id`, `id_client`, `id_appointment`,`service`) VALUES (NULL, '$id_client', '$id_appointment','$service')");
        if($query->execute()){
            return true;
            
        }else{
            return false;
        }
    }

}