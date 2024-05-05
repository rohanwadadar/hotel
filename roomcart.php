<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
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
    <form action="search.php" method="post" id="bookingForm">
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>
        <div class="form-group">
            <label for="num_adults">Number of Adults</label>
            <input type="number" class="form-control" id="num_adults" name="num_adults" min="1" required>
        </div>

        <div id="selectedRooms">
            <!-- Hidden input fields for selected rooms will be added dynamically -->
        </div>

        <button type="button" class="btn btn-primary btn-block mt-4" onclick="submitForm()">Book Selected Rooms</button>
    </form>

    <div id="roomList">
        <?php
        include_once 'db.php';

        // Fetch rooms grouped by type
        $sql = "SELECT DISTINCT room_type FROM rooms WHERE availability = 'available' AND max_occupancy >= ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $_POST['num_adults']);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $room_type = $row['room_type'];

                // Fetch available rooms of this type
                $rooms_query = "SELECT * FROM rooms WHERE room_type = ? AND availability = 'available'";
                $rooms_stmt = $mysqli->prepare($rooms_query);
                $rooms_stmt->bind_param("s", $room_type);
                $rooms_stmt->execute();
                $rooms_result = $rooms_stmt->get_result();

                if ($rooms_result->num_rows > 0) {
                    ?>
                    <div class="room-info">
                        <h3><?php echo $room_type; ?></h3>
                        <?php while ($room = $rooms_result->fetch_assoc()) { ?>
                            <div>
                                <div class="price">INR <?php echo number_format($room['price'], 2); ?> / night</div>
                                <div class="description"><?php echo $room['description']; ?></div>
                                <button type="button" class="btn btn-success btn-add-to-cart"
                                        data-room-type="<?php echo $room_type; ?>" data-room-id="<?php echo $room['id']; ?>"
                                        onclick="addToCart(this)">Add to Cart</button>
                            </div>
                        <?php } ?>
                    </div>
                    <?php
                }
            }
        } else {
            echo "No available rooms matching the criteria.";
        }

        $mysqli->close();
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    var selectedRooms = {};

    function addToCart(button) {
        var roomType = button.getAttribute('data-room-type');
        var roomId = button.getAttribute('data-room-id');

        if (!selectedRooms[roomType]) {
            selectedRooms[roomType] = [];
        }

        selectedRooms[roomType].push(roomId);
        button.classList.add('btn-selected');
    }

    function submitForm() {
        var selectedRoomsContainer = document.getElementById('selectedRooms');
        selectedRoomsContainer.innerHTML = '';

        for (var roomType in selectedRooms) {
            selectedRooms[roomType].forEach(roomId => {
                var selectedRoomsInput = document.createElement('input');
                selectedRoomsInput.type = 'hidden';
                selectedRoomsInput.name = 'selected_rooms[]';
                selectedRoomsInput.value = `${roomId}`;
                selectedRoomsContainer.appendChild(selectedRoomsInput);
            });
        }

        document.getElementById('bookingForm').submit();
    }
</script>

</body>
</html>
