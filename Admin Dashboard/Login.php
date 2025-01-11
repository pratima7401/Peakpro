<?php
session_start(); 

// Hardcoded credentials
$valid_email = "priyankakhandagale56@gmail.com"; 
$valid_password = "PriyankaK20"; 

// Login functionality
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['user_id'] = $valid_email; 
        header("Location: admin.php"); 
        exit();
    } else {
        $login_error = "Invalid email or password.";
    }
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy(); 
    header("Location: login.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light background color */
        }
        .container {
            max-width: 400px; /* Limit the width of the form */
            margin-top: 100px; /* Space from the top */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
            background-color: #ffffff; /* White background for the form */
        }
        h2 {
            color: #007bff; /* Primary color for the heading */
        }
        .form-control {
            border-radius: 5px; /* Rounded corners for inputs */
        }
        .btn-primary {
            background-color: #007bff; /* Bootstrap primary color */
            border: none; /* Remove border */
            border-radius: 5px; /* Rounded corners */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
        .alert {
            margin-bottom: 20px; /* Space below the alert */
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center">Login</h2>
    <?php if (isset($login_error)): ?>
        <div class="alert alert-danger"><?= $login_error ?></div>
    <?php endif; ?>
    <form method="POST" class="mt-4">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
