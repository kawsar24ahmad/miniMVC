<?php

use App\Services\Route;

Route::add('', 'HomeController', 'index', 'GET');
// Route::add('/oop_hindi/auth-php', 'HomeController', 'index', 'GET');
Route::add('login', 'LoginController', 'index', 'GET');
Route::add('submit-login', 'LoginController', 'login', 'POST');Route::add('register', 'RegisterController', 'index', 'GET');
Route::add('logout', 'DashboardController', 'logout', 'GET');Route::add('register', 'RegisterController', 'index', 'GET');
Route::add('dashboard', 'DashboardController', 'index', 'GET');Route::add('register', 'RegisterController', 'index', 'GET');
 