<?php
// Include the database connection file
include 'db.php'; // Make sure this path is correct

// Check if the delete button for cancellation is clicked
if (isset($_POST['delete_cancel'])) {
    // Extract the cancel_id from the form submission
    $cancel_id = $_POST['cancel_id'];

    // Prepare and execute the DELETE query
    $delete_query = "DELETE FROM cancel WHERE cancel_id = ?";
    $stmt = $mysqli->prepare($delete_query);
    $stmt->bind_param('i', $cancel_id); // 'i' for integer (assuming cancel_id is an integer)
    
    if ($stmt->execute()) {
        // Deletion successful, redirect to refresh the page (optional)
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Handle deletion error
        echo "Error deleting cancellation entry: " . $mysqli->error;
    }
}

// Fetch data from the rooms table
$rooms_query = "SELECT * FROM rooms"; // Example query, adjust table name as needed
$rooms_result = $mysqli->query($rooms_query);

// Check for errors after executing the query
if (!$rooms_result) {
    die("Rooms query failed: " . $mysqli->error);
}

// Fetch data from the bookings table
$bookings_query = "SELECT * FROM bookings"; // Assuming the table name is 'bookings'
$bookings_result = $mysqli->query($bookings_query);

// Check for errors after executing the query
if (!$bookings_result) {
    die("Bookings query failed: " . $mysqli->error);
}

// Fetch data from the cancel table
$cancel_query = "SELECT * FROM cancel"; // Assuming the table name is 'cancel'
$cancel_result = $mysqli->query($cancel_query);

// Check for errors after executing the query
if (!$cancel_result) {
    die("Cancel query failed: " . $mysqli->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add any additional CSS or JS links here -->
</head>
<body>
    <h1>Admin Dashboard</h1>

    <h2>Room Availability</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Room ID</th>
                <th>Room Name</th>
                <th>Price</th>
                <th>Availability</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $rooms_result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['room_type']) ?></td>
                <td><?= htmlspecialchars($row['price']) ?></td>
                <td><?= htmlspecialchars($row['availability']) ?></td>
                <td>
                    <a href="edit_room.php?id=<?= urlencode($row['id']) ?>">Edit</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h2>Booking Details</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Data ID</th>
                <th>Room ID</th>
                <th>Customer ID</th> <!-- Added Customer ID column -->
                <th>Start Date</th>
                <th>End Date</th>
                <th>Total Price</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Payment ID</th>
                <th>Booking Date</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $bookings_result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['room_id']) ?></td>
                <td><?= htmlspecialchars($row['customer_id']) ?></td> <!-- Display Customer ID -->
                <td><?= htmlspecialchars($row['start_date']) ?></td>
                <td><?= htmlspecialchars($row['end_date']) ?></td>
                <td><?= htmlspecialchars($row['total_price']) ?></td>
                <td><?= htmlspecialchars($row['phone']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['address']) ?></td>
                <td><?= htmlspecialchars($row['payment_id']) ?></td>
                <td><?= htmlspecialchars($row['booking_date']) ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h2>Cancel Details</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Cancel ID</th>
                <th>Booking ID</th>
                <th>Reason</th>
                <th>Customer ID</th>
                <th>Cancel Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $cancel_result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['cancel_id']) ?></td>
                <td><?= htmlspecialchars($row['booking_id']) ?></td>
                <td><?= htmlspecialchars($row['reason']) ?></td>
                <td><?= htmlspecialchars($row['customer_id']) ?></td>
                <td><?= htmlspecialchars($row['cancel_date']) ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="cancel_id" value="<?= $row['cancel_id'] ?>">
                        <button type="submit" name="delete_cancel">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <?php
        // Free result sets
        $rooms_result->free();
        $bookings_result->free();
        $cancel_result->free();

        // Close the connection
        $mysqli->close();
    ?>
</body>
</html>
