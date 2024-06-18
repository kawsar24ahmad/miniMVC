<?php
namespace App\Controllers;
use App\Models\User;

class RegisterController{
    function index()  {
        require_once 'pages/register.php';
    }
    public function register()  {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        
            if (empty($name) || empty($email) || empty($password)) {
                $error_message = 'All fields are required!';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_message = 'Invalid email format!';
            } else {
                $user = new User;
                $user->name = $name;
                $user->email = $email;
                $user->password = $password;
        
                if ($user->register()) {
                    echo 'This user is registered.';
                } else {
                    $error_message = 'Unable to register user!';
                }
            }
        }
    }
}
