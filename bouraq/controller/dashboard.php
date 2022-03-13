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
            
            
        }
?>