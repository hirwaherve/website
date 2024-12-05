// update_booking.php (simplified version)
<?php
$servername = "localhost";
$username = "root"; // Adjust this
$password = ""; // Adjust this
$dbname = "photography";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql = "UPDATE bookings SET status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Booking updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<form method="POST" action="update_booking.php">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <label for="status">Update Status:</label>
    <select name="status">
        <option value="Confirmed">Confirmed</option>
        <option value="Pending">Pending</option>
        <option value="Cancelled">Cancelled</option>
    </select>
    <button type="submit">Update</button>
</form>
