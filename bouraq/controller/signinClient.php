<?php


require_once __DIR__."/../model/client/SigninClient.php";

session_start();

class SignInClient
{
    public function index()
    {
    require_once __DIR__."/../view/client/signIn.php";
    }


    public function profile()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $logC = new SignIn();
        $var=$logC->signinClient($email,$password);
        if($var)
        {   
            $_SESSION['idClient'] =$var['idClient'];
            $_SESSION['name'] =$var['name'];
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            require_once __DIR__."/../view/client/profile.php";
        }
        else{
            require_once __DIR__."/../view/client/signIn.php";
        }
    }


    public function LogOutClient()
    {
        unset($_SESSION['idClient']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        session_destroy();
        // print_r($_SESSION);

        require_once __DIR__."/../view/index.php";
    }
    
}




?>