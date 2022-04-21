<?php

require_once __DIR__."/../model/client/SignUp.php";

class SignUp{
    
    public function index()
    {
        $error = "";
        require_once __DIR__."/../view/client/signUp.php";
    }


    public function regis()
    {
        $name = $_POST['name'];
        $second = $_POST['second'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // The hash of the password that
        // can be stored in the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        
        
        $logC = new Register();
        $var=$logC->signupClient($name,$second,$phone,$email,$hashed_password);
        
        if(!$var)
        {   
            header("Location:http://localhost/youcode/4test/signinclient");
        }
        else{
            
            $error = "Email already exist";
            require_once __DIR__."/../view/client/signUp.php";
        }
    }

    
}



?>