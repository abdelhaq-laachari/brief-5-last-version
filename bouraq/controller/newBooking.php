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
                    $status = 1;

                    $gets = new Search();
                    $getTrips = $gets->reserv($depart,$arrive,$day,$status);
                    
                    if($getTrips)
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


            public function insert()
            {
                

                if(isset($_POST["insert"]))
                {
                    $depart = $_POST["Departure_City"];
                    $arrive = $_POST["Arrivale_City"];
                    $dateD = $_POST["Date_of_Departure"];
                    $dateA = $_POST["Arrival_Date"];
                    $Ddepart = $_POST["jour_de_depart"];
                    $prix = $_POST["Price"];

                    $insert = new Search();
                    $insertTrips = $insert->insert($depart,$arrive,$dateD,$dateA,$prix,$Ddepart);

                    if(!$insertTrips)
                    {
                        // echo"<script language=\"javascript\">";
                        // echo"alert('Great you can see your reservation in your profile')";
                        // echo"</script>";
                        
                        header("Location:http://localhost/youcode/4test/myTrips");
                    }
                    else
                    {
                        echo "error";
                    }
                }
            }
            
            
        }
?>