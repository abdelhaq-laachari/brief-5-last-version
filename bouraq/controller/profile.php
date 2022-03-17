<?php


    require_once __DIR__."/../model/client/new_booking.php";
    require_once __DIR__."/../model/client/updateClient.php";

    session_start();

    class Profile{



        public function index()
            {
                $error = '';
            
                if(!empty($_SESSION['idClient']))
                {    
                    require_once __DIR__."/../view/client/profile.php";

                    
                }
                else{

                    require_once __DIR__."/../view/client/signIn.php";
                }
            }


        public function update()
        {
            if(isset($_POST['update']))
            {
                $Fname = $_POST["Fname"];
                $Lname = $_POST["Lname"];
                $phone = $_POST["phone"];
                $email = $_POST["email"];
                $id = $_POST["update"];

                $updatInfo = new Update();
                $InfoUpdate = $updatInfo->updates($id,$Fname,$Lname,$phone,$email);

                if(!$InfoUpdate)
                {
                    $_SESSION["name"] = $Fname;
                    $_SESSION["second"] = $Lname;
                    $_SESSION["phone"] = $phone;
                    $_SESSION["email"] = $email;
                    
                    require_once __DIR__."/../view/client/profile.php";
                }
                else
                {
                    echo "error";
                }
            }

        }
        


        
    }
?>