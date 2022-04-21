<?php

    require_once __DIR__."/../model/client/new_booking.php";

    session_start();
    
        class MyTrips{

            public function index()
            {
                $error = "";
            
                if(!empty($_SESSION['idClient']))
                {   
                    $idClient = $_SESSION['idClient'];
                    $gets = new Search();
                    $getTrips = $gets->myTrips($idClient);
                    
                    require_once __DIR__."/../view/client/myTrips.php";
                    
                }
                else{

                    require_once __DIR__."/../view/client/signIn.php";
                }
            }

            public function cancel()
            {
                
                $day = strtotime($_POST["jour_de_depart"] . ' ' . $_POST["date_de_depart"]);
                $time =  $day - strtotime('now') + 60 * 60;

                if($time > 1)
                {
                    
                    $idTicket = $_POST["idTicket"];
                    $idClient = $_SESSION['idClient'];
                    $delete = new Search();
                    $cancel = $delete->delete($idClient,$idTicket);

                    $idTrip = $_POST["idTrip"];
                    $seats = $delete->Seats($idTrip);
                    $seats = $seats['seats'] + 1;
                    $delete->UpdateSeats($idTrip,$seats);

                    echo "<script>alert(\"You are canceled this trip successfully \")</script>";
                    echo "<script>window.location.href = \"http://localhost/youcode/4test/mytrips\";</script>";
                }
                else{
                    
                    echo "<script>alert(\"This trip cannot be canceled because it is too late. \")</script>";
                    echo "<script>window.location.href = \"http://localhost/youcode/4test/mytrips\";</script>";
                }
                
                    
            }



        }
?>
