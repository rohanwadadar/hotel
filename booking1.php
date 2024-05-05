<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
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
    </style>
</head>
<body>
<video autoplay muted loop id="bg-video" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -1;">
    <source src="169951-842348732_small.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
<div class="container">
    <h2>Check Rooms</h2>
    <form action="roomcart1.php" method="post" id="bookingForm">
        <div class="form-group">
            <label for="num_adults">Number of Adults</label>
            <input type="number" class="form-control" id="num_adults" name="num_adults" min="1">
        </div>
        <div class="form-group">
            <label for="num_children">Number of Children</label>
            <input type="number" class="form-control" id="num_children" name="num_children" min="0">
        </div>
        <!-- Use btn-block to make button full-width -->
        <button type="submit" class="btn btn-primary btn-block">View Rooms</button>
        <a href="index2.php" class="btn btn-secondary btn-block">Home</a>
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
                            onclick="addToCart('<?php echo $room_type; ?>')">Add to Cart</button>
                </div>
                <?php
            }
        } else {
            echo "";
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
    // Function to add room to cart
    function addToCart(roomType) {
        // Create hidden input field with room type value
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'selected_rooms[]';
        input.value = roomType;
        document.getElementById('bookingForm').appendChild(input);
    }
</script>

</body>
</html>
