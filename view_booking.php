// view_booking.php
<?php
$servername = "localhost";
$username = "root"; // Adjust this
$password = ""; // Adjust this
$dbname = "photography";

$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_GET['id'];

$sql = "SELECT * FROM bookings WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>Booking Details</h2>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Date: " . $row['date'] . "<br>";
    echo "Type: " . $row['type'] . "<br>";
    echo "Status: " . $row['status'] . "<br>";
} else {
    echo "Booking not found.";
}

$conn->close();
?>
