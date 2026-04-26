<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($query) > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Login gagal!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #faaece, #e3f599);
            height: 100vh;
        }

        .login-card {
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(181, 149, 74, 0.61);
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center">

<div class="card p-4 login-card" style="width:350px;">
    <h3 class="text-center mb-3">Bello! </h3>
    <p class="text-center text-muted">Let's login to your account^⩊^! </p>

    <form method="POST">
        <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>

        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

       <button type="submit" name="login" 
    class="btn w-100" 
    style="background-color: pink; color: white;">
    Login
</button>
    </form>
</div>

</body>
</html>