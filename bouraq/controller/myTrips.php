<?php

    require_once __DIR__."/../model/client/new_booking.php";

    session_start();
    
        class MyTrips{

            public function index()
            {
                $error = "";
            
                if(!empty($_SESSION['idClient']))
                {   

                    $gets = new Search();
                    $getTrips = $gets->myTrips();

                    require_once __DIR__."/../view/client/myTrips.php";
                }
                else{

                    require_once __DIR__."/../view/client/signIn.php";
                }
            }



        }
?>