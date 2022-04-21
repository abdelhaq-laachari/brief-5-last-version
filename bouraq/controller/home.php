<?php


        class home{
            public function index()
            {
            require_once __DIR__."/../view/index.php";
            }
            
            public function popup()
            {
                require_once __DIR__."/../view/message.php";
            }
        }
?>