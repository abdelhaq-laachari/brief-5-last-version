<?php

require_once __DIR__."/../model/client/new_booking.php";

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


            public function searchClient()
            {
                if (isset($_POST["submit"])) {

                    $depart = $_POST["depart"];
                    $arrive = $_POST["arrive"];
                    $day = $_POST["day"];

                    // $logC = new Search();
                    // $sth=$logC->reserv($depart,$arrive,$day);

                    $gets = new Search();
                    $getClients = $gets->reserv($depart,$arrive,$day);
                    if($getClients)
                    {
                        require_once __DIR__."/../view/client/searchClient.php";
                    }
                    else
                    {
                        require_once __DIR__."/../view/client/new_booking.php";

                        echo"<script language=\"javascript\">";
                        echo"alert('No Results Found')";
                        echo"</script>";
                    }
                   
                }
            }


            public function getOnetrip(){

                if(isset($_POST['idTrip'])){
                    $data = array(
                        'idTrip' => $_POST['idTrip']
                    );
                    $trip = Search::gettrip($data);
                    return $trip;
                }
            }
            
            
        }
?>