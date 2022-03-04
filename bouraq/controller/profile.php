<?php


    require_once __DIR__."/../model/admin/displayClient.php";

    session_start();

    class Profile{



        public function index()
        {
        require_once __DIR__."/../view/client/profile.php";
        }
        
        // public function LogOutClient()
        // {
        //     unset($_SESSION['idAdmin']);
        //     unset($_SESSION['name']);
        //     unset($_SESSION['email']);
        //     unset($_SESSION['password']);
        //     session_destroy();
        //     // print_r($_SESSION);

        //     require_once __DIR__."/../view/index.php";
        // }


        
    }
?>