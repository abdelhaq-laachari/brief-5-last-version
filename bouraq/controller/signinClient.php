<?php


require_once __DIR__."/../model/client/SigninClient.php";

session_start();

class SignInClient
{
    public function index()
    {
        $error = "";
        require_once __DIR__."/../view/client/signIn.php";
    }


    public function profile()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $second = $_POST['second'];
        $phone = $_POST['phone'];
        $logC = new SignIn();
        $var=$logC->signinClient($email,$password,$second,$phone);
        if($var)
        {   
            $_SESSION['idClient'] =$var['idClient'];
            $_SESSION['name'] =$var['name'];
            $_SESSION['second'] =$var['second'];
            $_SESSION['phone'] =$var['phone'];
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

            // require_once __DIR__."/../view/client/profile.php";
            header("Location:http://localhost/youcode/4test/profile");
        }
        else{
            $error = "Password or email is incorrect";
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

        require_once __DIR__."/../view/index.php";
    }
    
}




?>