<?php
require_once __DIR__."/../model/admin/SigninAdmin.php";

session_start();

class SignInAdmin{

//     public function authentication()
// {
//     $error="";
//     require_once __DIR__."/../view/signIn.php";
// }


    public function index()
    {
    require_once __DIR__."/../view/admin/signIn.php";
    
    }

    public function dashboard()
    {
        $email="";
        $password="";
        if(isset( $_POST['email']) && isset( $_POST['password']))
        {$email = $_POST['email'];
        $password = $_POST['password'];}

        $log = new login();
        $var=$log->signin($email,$password);
        if($var)
        {   
            $_SESSION['idAdmin'] = $var['idAdmin'];
            $_SESSION['name'] = $var['name'];
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            // print_r($_SESSION);
            require_once __DIR__."/../view/admin/dashboard.php";
        }
        else{
            
            // $error="incorrect email or password";
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
        print_r($_SESSION);
        header("Location: http://localhost/youcode/4test/home");
        //require_once __DIR__."/../view/index.php";
    }



    // public function add_trip()
    // {
    // require_once __DIR__."/../view/admin/add_trip.php";
    // }
    
    
}



?>