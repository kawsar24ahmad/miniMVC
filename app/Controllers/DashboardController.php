<?php
namespace App\Controllers;

class DashboardController{
    public function index()  {
        // require('pages/dashboard.php');
        view('dashboard');
    }
    public function logout()  {

        $_SESSION = [];
        session_destroy();
        redirect('login');
        // header("Location: login.php");
        // exit();
    }
}
