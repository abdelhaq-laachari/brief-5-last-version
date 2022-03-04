<?php

session_start();

        class dashboard{

            public function index()
            {
                if(!empty($_SESSION['idAdmin']))
                {
                    require_once __DIR__."/../view/admin/dashboard.php";
                }
                else{
                    require_once __DIR__."/../view/admin/signIn.php";
                }
                
            
            }
            
            
        }
?>