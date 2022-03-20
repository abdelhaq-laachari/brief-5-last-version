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

        header("Location: http://localhost/youcode/4test/home");
    }

    public function AddTrip()
    {
        $depart = $_POST["Departure_City"];
        $arrive = $_POST["Arrivale_City"];
        $dateD = $_POST["Date_of_Departure"];
        $dateA = $_POST["Arrival_Date"];
        $prix = $_POST["Price"];
        $dayD = $_POST["dayD"];
        $status = "actived" ;

        $insert = new AddTrip();
        $insertTrips = $insert->insert($depart,$arrive,$dateD,$dateA,$prix,$dayD,$status);

        if(!$insertTrips)
        {
            echo"<script language=\"javascript\">";
            echo"alert('Great  ')";
            echo"</script>";
            
            header("Location:http://localhost/youcode/4test/dashboard");
        }
        else
        {
            echo "error";
        }
    }


    
    
    
}



?>