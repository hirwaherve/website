// delete_booking.php
<?php
$servername = "localhost";
$username = "root"; // Adjust this
$password = ""; // Adjust this
$dbname = "photography";

$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_GET['id'];

$sql = "DELETE FROM bookings WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Booking deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
