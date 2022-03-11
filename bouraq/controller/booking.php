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

                    $logC = new Search();
                    $sth=$logC->reserv($depart,$arrive,$day);
                    // require_once __DIR__."/../view/booking.php";
                    require_once __DIR__."/../view/search.php";
                   
                }
            }

            
            
            
        }
?>