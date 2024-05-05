<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking Status</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<video autoplay muted loop id="bg-video" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -1;">
    <source src="169951-842348732_small.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Room Booking Status</a>
</nav>

<div class="container mt-5">
    <h2>Check Booking Status</h2>
    <form method="POST">
        <div class="form-group">
            <label for="customer_id">Customer ID:</label>
            <input type="text" class="form-control" id="customer_id" name="customer_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Check Status</button>
    </form>

    <!-- Go to Home Button -->
    <div class="mt-3">
        <a href="index2.php" class="btn btn-secondary">Go to Home</a>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['customer_id'])) {
    include_once 'db.php'; // Include your database connection setup

    $customer_id = $_POST['customer_id'];

    // Prepare the SQL statement to find the booking details for the customer ID
    $stmt = $mysqli->prepare("SELECT b.id AS booking_id, b.room_id, r.availability FROM bookings b
                              JOIN rooms r ON b.room_id = r.id
                              WHERE b.customer_id = ?");
    $stmt->bind_param("i", $customer_id);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $booking = $result->fetch_assoc();
        $booking_id = $booking['booking_id'];
        $room_id = $booking['room_id'];
        $availability = $booking['availability'];

        // Display the status based on room availability
        if ($availability === 'booked') {
            echo "<div class='alert alert-success' role='alert'>Room is Booked.</div>";

            // Provide cancellation form if room is booked
            echo "<div class='alert alert-info' role='alert'>
                    <form method='POST'>
                        <input type='hidden' name='booking_id' value='$booking_id'>
                        <input type='hidden' name='customer_id' value='$customer_id'>
                        <div class='form-group'>
                            <label for='reason'>Reason for cancellation: *Initial money non-refundable</label>
                            <textarea class='form-control' id='reason' name='reason' required></textarea>
                        </div>
                        <button type='submit' name='cancel' class='btn btn-danger'>Cancel Booking</button>
                    </form>
                  </div>";
        } else {
            echo "<div class='alert alert-warning' role='alert'>Room is not booked or unavailable.</div>";
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>No booking found for this customer ID.</div>";
    }
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cancel'])) {
    $booking_id = $_POST['booking_id'];
    $reason = $_POST['reason'];

    include_once 'db.php'; // Include your database connection setup

    // Update availability status in rooms table to 'available'
    $stmt = $mysqli->prepare("UPDATE rooms SET availability = 'available' WHERE id = ?");
    $stmt->bind_param("i", $room_id);
    $stmt->execute();

    // Insert cancellation record
    $stmt = $mysqli->prepare("INSERT INTO cancel (booking_id, reason) VALUES (?, ?)");
    $stmt->bind_param("is", $booking_id, $reason);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<div class='alert alert-success' role='alert'>Booking cancelled successfully.</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Failed to cancel booking.</div>";
    }
    $stmt->close();
    $mysqli->close(); // Close database connection
}
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
