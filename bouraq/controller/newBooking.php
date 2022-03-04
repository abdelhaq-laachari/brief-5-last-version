<?php

session_start();



        class NewBooking{
            public function index()
            {
            
                if(!empty($_SESSION['idClient']))
                {    
                    require_once __DIR__."/../view/client/new_booking.php";
                }
                else{

                    require_once __DIR__."/../view/client/signIn.php";
                }
            }
            
            
        }
?>