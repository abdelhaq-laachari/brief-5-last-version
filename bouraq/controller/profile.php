<?php


    require_once __DIR__."/../model/admin/displayClient.php";

    session_start();

    class Profile{



        public function index()
            {
            
                if(!empty($_SESSION['idClient']))
                {    
                    require_once __DIR__."/../view/client/profile.php";
                }
                else{

                    require_once __DIR__."/../view/client/signIn.php";
                }
            }
        


        
    }
?>