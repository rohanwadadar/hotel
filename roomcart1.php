<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: gainsboro;
            font-family: Arial, sans-serif;
            padding-top: 20px;
        }

        .container {
            background-color: transparent;
            padding: 20px;
            border-radius: 2px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            width: 80%;
            margin: auto;
        }

        h2 {
            color: white;
            margin-bottom: 30px;
        }

        .room-info {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .price {
            font-size: 24px;
            color: #007bff;
            margin-bottom: 10px;
        }

        .description {
            color: #495057;
            margin-bottom: 10px;
        }

        .btn-view {
            margin-top: 20px;
        }

        .btn-add-to-cart {
            font-size: 18px;
            padding: 10px 20px;
        }

        .btn-selected {
            background-color: red !important;
            color: white !important;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Check Rooms</h2>
    <form action="search1.php" method="post" id="bookingForm">
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>
        <div class="form-group">
            <label for="num_rooms">Number of Rooms</label>
            <input type="number" class="form-control" id="num_rooms" name="num_rooms" min="1" required>
        </div>
        <div class="form-group">
            <label for="num_adults">Number of Adults</label>
            <input type="number" class="form-control" id="num_adults" name="num_adults" min="1" required>
        </div>

        <div id="selectedRooms">
            <!-- Hidden input fields for selected rooms -->
        </div>

        <button type="button" class="btn btn-primary btn-block mt-4" onclick="submitForm()">Book Selected Rooms</button>
    </form>

    <div id="roomList">
        <?php
        // Assuming you have a database connection
        include_once 'db.php';
        
        // Fetch room details from the database where availability is 'available' and max_occupancy is greater than or equal to the number of adults
        $sql = "SELECT * FROM rooms WHERE availability = 'available' AND max_occupancy >= ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $_POST['num_adults']);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if there are any available rooms
        if ($result->num_rows > 0) {
            // Output each available room info
            while ($row = $result->fetch_assoc()) {
                $room_id = $row['id'];
                $room_type = $row['room_type'];
                $price = $row['price'];
                $description = $row['description'];
                ?>
                <div class="room-info">
                    <h3><?php echo $room_type; ?></h3>
                    <div class="price">INR <?php echo number_format($price, 2); ?> / night</div>
                    <div class="description"><?php echo $description; ?></div>
                    <button type="button" class="btn btn-primary btn-lg btn-view">View Details</button>
                    <!-- Add data attributes to store room details -->
                    <button type="button" class="btn btn-success btn-lg btn-add-to-cart" 
                            data-room-id="<?php echo $room_id; ?>" 
                            data-room-type="<?php echo $room_type; ?>"
                            onclick="addToCart(this)">Add to Cart</button>
                </div>
                <?php
            }
        } else {
            echo "No available rooms matching the criteria.";
        }

        // Close database connection
        $mysqli->close();
        ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    var selectedRooms = []; // Array to store selected room IDs

    // Function to add room to cart
   // Function to add room to cart
function addToCart(button) {
    var roomId = button.getAttribute('data-room-id');
    var roomType = button.getAttribute('data-room-type');
    
    // Check if the room is already selected
    if (!selectedRooms.includes(roomId)) {
        // Check if the maximum number of rooms has been reached
        var numRooms = document.getElementById('num_rooms').value;
        if (selectedRooms.length < numRooms) {
            selectedRooms.push(roomId); // Add room ID to selected rooms array
            button.classList.add('btn-selected'); // Visual indication of selection
        } else {
            alert('You can only select ' + numRooms + ' rooms.');
            return;
        }
    } else {
        // Room is already selected, remove from the array and revert button style
        selectedRooms = selectedRooms.filter(id => id !== roomId);
        button.classList.remove('btn-selected');
    }
}


    // Function to submit form with selected rooms
    function submitForm() {
        var numRooms = document.getElementById('num_rooms').value;
        
        if (selectedRooms.length < numRooms) {
            alert('Please select ' + numRooms + ' rooms.');
            return;
        }
        
        // Create hidden input fields for selected rooms
        var selectedRoomsInput = document.createElement('input');
        selectedRoomsInput.type = 'hidden';
        selectedRoomsInput.name = 'selected_rooms[]';
        selectedRoomsInput.value = selectedRooms.join(',');
        document.getElementById('bookingForm').appendChild(selectedRoomsInput);

        // Submit the form
        document.getElementById('bookingForm').submit();
    }
</script>

</body>
</html>
