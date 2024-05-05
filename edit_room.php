<?php
// Include the database connection file
include_once 'db.php'; // Make sure this path is correct

// Check if room ID is provided via GET parameter
if(isset($_GET['id'])) {
    $room_id = $_GET['id'];

    // Fetch room details based on ID
    $query = "SELECT * FROM rooms WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $room_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $room_type = $row['room_type'];
        $availability = $row['availability'];
    } else {
        echo "Room not found.";
        exit(); // Stop further execution if room not found
    }

    // Handle form submission for updating room availability
    if(isset($_POST['update_availability'])) {
        $new_availability = $_POST['availability'];

        // Update room availability in the database
        $update_query = "UPDATE rooms SET availability = ? WHERE id = ?";
        $update_stmt = $mysqli->prepare($update_query);
        $update_stmt->bind_param("si", $new_availability, $room_id);

        if ($update_stmt->execute()) {
            echo "Room availability updated successfully.";
        } else {
            echo "Error updating room availability.";
        }

        // Close prepared statement
        $update_stmt->close();
    }
} else {
    echo "Room ID not provided.";
    exit(); // Stop further execution if room ID not provided
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Room</title>
    <!-- Add any additional CSS or JS links here -->
</head>
<body>
    <h1>Edit Room</h1>
    <form method="post">
        <div>
            <label for="room_type">Room Type:</label>
            <input type="text" id="room_type" name="room_type" value="<?= $room_type ?>" readonly>
        </div>
        <div>
            <label for="availability">Availability:</label>
            <select id="availability" name="availability">
                <option value="available" <?= ($availability === 'available') ? 'selected' : '' ?>>Available</option>
                <option value="booked" <?= ($availability === 'booked') ? 'selected' : '' ?>>booked</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <button type="submit" name="update_availability">Update Availability</button>
    </form>
    <a href="admin_dashboard.php">Back to Dashboard</a> <!-- Adjust the link to match your admin dashboard file -->
</body>
</html>

<?php
// Close prepared statement and database connection
$stmt->close();
$mysqli->close();
?>
