<?php
session_start();

// Validate form data
if (isset($_POST['selected_rooms'], $_POST['start_date'], $_POST['end_date'])) {
    $selectedRooms = $_POST['selected_rooms'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    // Calculate number of nights
    $start = new DateTime($startDate);
    $end = new DateTime($endDate);
    $interval = $start->diff($end);
    $numberOfNights = $interval->days;

    // Assuming you have a database connection
    include_once 'db.php';

    // Fetch room details for the selected rooms
    $sql = "SELECT * FROM rooms WHERE id IN (" . implode(',', $selectedRooms) . ")";
    $result = $mysqli->query($sql);

    // Initialize total price
    $totalPrice = 0;

    // Display cart summary
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart Summary</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f8f9fa;
                padding-top: 20px;
            }

            .container {
                background-color: white;
                border-radius: 5px;
                padding: 20px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
                width: 80%;
                margin: auto;
            }

            h2 {
                color: #007bff;
                text-align: center;
                margin-bottom: 30px;
            }

            th {
                color: #007bff;
            }

            .btn-primary {
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <h2>Cart Summary</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Room Type</th>
                    <th>Price per Night</th>
                    <th>Number of Nights</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    $roomType = $row['room_type'];
                    $pricePerNight = $row['price'];
                    $totalRoomPrice = $pricePerNight * $numberOfNights;
                    $totalPrice += $totalRoomPrice;
                    ?>
                    <tr>
                        <td><?php echo $roomType; ?></td>
                        <td>INR <?php echo number_format($pricePerNight, 2); ?></td>
                        <td><?php echo $numberOfNights; ?></td>
                        <td>INR <?php echo number_format($totalRoomPrice, 2); ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total Amount</th>
                    <th>INR <?php echo number_format($totalPrice, 2); ?></th>
                </tr>
            </tfoot>
        </table>

        <!-- Proceed to Payment button -->
        <form action="book_room.php" method="post"> <!-- Changed action to booking_form.php -->
            <input type="hidden" name="selected_rooms" value="<?php echo implode(',', $selectedRooms); ?>">
            <input type="hidden" name="start_date" value="<?php echo $startDate; ?>">
            <input type="hidden" name="end_date" value="<?php echo $endDate; ?>">
            <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>"> <!-- New hidden input field for total price -->
            <button type="submit" class="btn btn-primary btn-block">Proceed to Payment</button>
        </form>
    </div>
    </body>
    </html>
    <?php
}
?>
