<?php

use App\Services\Route;

Route::get('', 'HomeController', 'index');
// Route::add('/oop_hindi/auth-php', 'HomeController', 'index', 'GET');
Route::get('login', 'LoginController', 'index');

Route::post('submit-login', 'LoginController', 'login', 'POST');

Route::get('register', 'RegisterController', 'index');
Route::post('submit-register', 'RegisterController', 'register', 'POST');

Route::get('logout', 'DashboardController', 'logout');

Route::get('dashboard', 'DashboardController', 'index');
 