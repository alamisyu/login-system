<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #ffc2eb;
            color: white;
        }

        .sidebar {
            height: 100vh;
            background: #dacd90;
            padding: 20px;
        }

        .sidebar h4 {
            color: #ffffff;
        }

        .card-custom {
            background: #ffe787;
            border-radius: 15px;
            padding: 20px;
            color: white;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-2 sidebar">
            <h4>Bello</h4>
            <hr>
            <p>Dashboard</p>
            <p>Profile</p>
            <p>Settings</p>

            <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
        </div>

        <!-- MAIN CONTENT -->
        <div class="col-md-10 p-4">

            <h2>Welcome, <?php echo $_SESSION['username']; ?> (˶ᵔ ᵕ ᵔ˶)</h2>
            <p class="text-muted">Here’s your overview</p>

            <div class="row mt-4">

                <div class="col-md-4">
                    <div class="card-custom">
                        <h5>Users</h5>
                        <h3>1</h3>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-custom">
                        <h5>Status</h5>
                        <h3>Active</h3>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-custom">
                        <h5>Role</h5>
                        <h3>Admin</h3>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

</body>
</html>