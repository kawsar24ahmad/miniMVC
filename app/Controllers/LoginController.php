<?php
namespace App\Controllers;
use App\Models\User;

class LoginController{
    function index()  {
        require_once 'pages/login.php';
    }
    function login()  {
        $user = new User;
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        if ($user->login()) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_name'] = $user->name;
            $_SESSION['user_email'] = $user->email;
            redirect('dashboard');
            // header('Location: dashboard.php');
            exit();
        }else{
            echo 'Unable to login user!';
        }
    }
}
