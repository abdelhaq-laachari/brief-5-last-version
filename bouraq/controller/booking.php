<?php
require_once __DIR__."/../model/booking.php";

        class Booking{

            public function index()
            {
                require_once __DIR__."/../view/booking.php";

            }

            public function search()
            {
                if (isset($_POST["submit"])) {

                    $depart = $_POST["depart"];
                    $arrive = $_POST["arrive"];
                    $day = $_POST["day"];

                    $gets = new Search();
                    $getTrips = $gets->reserv($depart,$arrive,$day);
                    
                    if($getTrips)
                    {
                        require_once __DIR__."/../view/search.php";
                    }
                    else
                    {
                        require_once __DIR__."/../view/booking.php";

                        echo"<script language=\"javascript\">";
                        echo"alert('No Results Found')";
                        echo"</script>";
                    }
                   
                }
            }



            public function info()
            {

                require_once __DIR__."/../view/info.php";
                
                

            }

            
            
            
        }
?>