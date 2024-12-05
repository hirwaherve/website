<?php
$servername = "localhost";
$username = "root"; // Adjust this
$password = ""; // Adjust this
$dbname = "photography";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Manage Bookings</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Type</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['date']."</td>
                            <td>".$row['type']."</td>
                            <td>".$row['status']."</td>
                            <td>
                                <a href='update_booking.php?id=".$row['id']."'>Update</a> |
                                <a href='delete_booking.php?id=".$row['id']."'>Delete</a> |
                                <a href='view_booking.php?id=".$row['id']."'>View</a>
                            </td>
                          </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
$conn->close();
?>
