<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script>
        // Block going back to the login page
        if (performance.navigation.type == 2) {
            window.location.href = "dashboard.php"; // Redirect to the dashboard if page is loaded from cache/back button
        }
    </script>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <form action="logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>
</body>
</html>
