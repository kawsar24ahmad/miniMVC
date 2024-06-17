<?php
namespace App\Controllers;

class DashboardController{
    public function index()  {
        echo 'DashboardController index function';
    }
    public function logout()  {

        $_SESSION = [];
        session_destroy();
        // header("Location: login.php");
        exit();
    }
}
