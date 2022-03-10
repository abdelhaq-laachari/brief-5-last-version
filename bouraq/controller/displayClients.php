<?php
    session_start();


    require_once __DIR__."/../model/admin/displayClient.php";




    class DisplayClients{

        public function index()
        {
            if(!empty($_SESSION['idAdmin']))
                {    
                    $gets = new DisplayClient();
                    $getClients = $gets->clients();

                    require_once __DIR__."/../view/admin/display_client.php";
                }
                else{

                    require_once __DIR__."/../view/admin/signIn.php";
                }
                
            
        }
        
        
        



        public function LogOutAdmin()
        {
            unset($_SESSION['idAdmin']);
            unset($_SESSION['name']);
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            session_unset();
            session_destroy();
            // print_r($_SESSION);
            header("Location: http://localhost/youcode/4test/home");

            //require_once __DIR__."/../view/index.php";
        }


        
    }
?>