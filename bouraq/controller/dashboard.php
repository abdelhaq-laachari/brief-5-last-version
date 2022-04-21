<?php
require_once __DIR__."/../model/admin/displayTrips.php";
// require_once __DIR__."/../model/admin/Add.php";

session_start();

class dashboard
{

        public function index()
        {
            $error = "";

            // $gets = new Display();
            // $TotalTrips = $gets->TotalTrips();
            
            if(isset($_SESSION['idAdmin']))
            {
                $gets = new Display();
                $getTrips = $gets->trips();
                $TotalTrips = $gets->TotalTrips();
                $ActiveTrips = $gets->ActiveTrips();
                $TotalEarning = $gets->sum();
                
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

        public function update()
        {
            

            if(isset($_POST['update']))
            {
                $depart = $_POST["ville_de_depart"];
                $arrive = $_POST["ville_darrivée"];
                $dateD = $_POST["date_de_depart"];
                $dateA = $_POST["date_darrivée"];
                $prix = $_POST["prix"];
                $dayD = $_POST["jour_de_depart"];
                $id = $_POST["id"];

                $gets = new Display();
                $gets->update($id,$depart,$arrive,$dateD,$dateA,$prix,$dayD);

                if(!$gets)
                {
                    require_once __DIR__."/../view/admin/dashboard.php";
                }
                else
                {
                    echo "error";
                }
            }
        }
        
}
?>