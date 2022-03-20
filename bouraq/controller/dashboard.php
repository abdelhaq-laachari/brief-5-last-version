<?php
require_once __DIR__."/../model/admin/displayTrips.php";
// require_once __DIR__."/../model/admin/Add.php";

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

            public function enable($id)
            {
                $gets = new Display();
                $gets->enable($id);

                if($gets)
                {
                    header("Location:http://localhost/youcode/4test/dashboard");
                }
                

            }


            // public function updateTrip()
            // {
            //     if(isset($_POST['update']))
            //     {
            //         $depart = $_POST["ville_de_depart"];
            //         $arrive = $_POST["ville_darrivée"];
            //         $dateD = $_POST["date_de_depart"];
            //         $dateA = $_POST["date_darrivée"];
            //         $prix = $_POST["prix"];
            //         $dayD = $_POST["jour_de_depart"];
            //         $id = $_POST["update"];

            //         $updatTrip = new Display();
            //         $TripUpdate = $updatTrip->update($depart,$arrive,$dateD,$dateA,$prix,$dayD,$id);

            //         if(!$TripUpdate)
            //         {
            //             // $_SESSION["name"] = $Fname;
            //             // $_SESSION["second"] = $Lname;
            //             // $_SESSION["phone"] = $phone;
            //             // $_SESSION["email"] = $email;
                        
            //             require_once __DIR__."/../view/admin/dashboard.php";
            //         }
            //         else
            //         {
            //             echo "error";
            //         }
            //     }
            // }
            
            
            
        }
?>