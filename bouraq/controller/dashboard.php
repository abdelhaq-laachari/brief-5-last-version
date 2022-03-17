<?php
require_once __DIR__."/../model/admin/displayTrips.php";
session_start();

        class dashboard{

            public function index()
            {
                $error = "";
                
                if(isset($_SESSION['idAdmin']))
                {
                    $gets = new Display();
                    $getTrips = $gets->trips();
                 
                    require_once __DIR__."/../view/admin/dashboard.php";
                
                }
                else{
                    require_once __DIR__."/../view/admin/signIn.php";
                 
                }
                
            
            }

            public function cancel($id)
            {
                $gets = new Display();
                $gets->CancelTrip($id);

                if($gets)
                {
                    header("Location:http://localhost/youcode/4test/dashboard");
                }
                

            }
            
            
        }
?>