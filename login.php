<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            header("Location: Admin.html");
            exit;
        } else {
            echo "Invalid password. <a href='login.html'>Try again</a>";
        }
    } else {
        echo "No user found. <a href='register.html'>Register here</a>";
    }
}

$conn->close();
?>
