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

        $logC = new SignIn();

        // CHECK EMAIL IF EXISTS
        $var=$logC->signinClient($email);
        
        // IF EMAIL IS TRUE
        if($var)
        {   
            // CHECK PASSWORD IF MATCHED
            $verify = password_verify($password, $var['password']);
            // IF PASSWORD IS TRUE
            if ($verify){

                $_SESSION['idClient'] =$var['idClient'];
                $_SESSION['name'] =$var['name'];
                $_SESSION['second'] =$var['second'];
                $_SESSION['phone'] =$var['phone'];
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                
                // redirectio to profile
                header("Location:http://localhost/youcode/4test/profile");
                
            }else{
                $error = "Password or email is incorrect";
                require_once __DIR__."/../view/client/signIn.php";
            }
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