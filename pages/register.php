<?php

include_once 'guest.php';
include_once 'app/User.php';

$error_message = '';

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auth System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-center pt-4">
            <h2>Register form</h2>
            <?php
            if (!empty($error_message)) {
                echo '<div class="alert alert-danger">' . htmlspecialchars($error_message) . '</div>';
            }
            ?>
            <form action="register.php" method="POST">
                <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                </div>
                <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="login.php" class="btn btn-dark">Login</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
