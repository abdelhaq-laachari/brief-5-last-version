<?php
 
require_once __DIR__."/../model/admin/Add.php";

session_start();

class Trip{

    public function index()
    {
        if(!empty($_SESSION['idAdmin']))
        {    
            require_once __DIR__."/../view/admin/add_trip.php";
        }
        else{

            require_once __DIR__."/../view/admin/signIn.php";
        }
    }
    

    
    public function LogOutAdmin()
    {
        unset($_SESSION['idAdmin']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        session_destroy();
        // print_r($_SESSION);
        header("Location: http://localhost/youcode/4test/home");
    }




    
    
    
}



?>