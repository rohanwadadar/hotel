


            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Price</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('istockphoto-539107688-612x612.jpg'); /* Add background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding-top: 100px; /* Add padding from the top */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Add semi-transparent white background */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Add shadow */
        }
        h2 {
            color: #007bff;
            text-align: center; /* Center align the heading */
        }
        p {
            color: #6c757d;
        }
        form {
            margin-top: 20px;
            text-align: center; /* Center align the form */
        }
        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Calculate Total Price</h2>

    <form action="#" method="post"> <!-- Change the action and method as needed -->
        <?php
        // Check if form data is set
        if(isset($_POST['selected_room'], $_POST['start_date'], $_POST['end_date'])) {
            // Retrieve form data
            $selected_room_id = $_POST['selected_room'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];

            // Calculate number of days between start and end date
            $start = strtotime($start_date);
            $end = strtotime($end_date);
            $num_days = ceil(abs($end - $start) / 86400); // 86400 seconds in a day

            // Include database connection
            include_once 'db.php';

            // Retrieve room price based on room ID
            $sql = "SELECT price FROM rooms WHERE id = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("i", $selected_room_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $room_price = $row['price'];
                // Calculate total price including GST
                $total_price = $num_days * $room_price * 1.15; // 15% GST

                echo "<p>Selected Room ID: $selected_room_id</p>";
                echo "<p>Number of Days: $num_days</p>";
                echo "<p>Room Price: Ruprees $room_price per day</p>";
                echo "<p>Total Price (incl. GST): Rupees $total_price</p>";
      

            echo "<form action='login.php' method='post'>";
            echo "<input type='hidden' name='selected_room' value='$selected_room_id'>";
            echo "<input type='hidden' name='start_date' value='$start_date'>";
            echo "<input type='hidden' name='end_date' value='$end_date'>";
            echo "<input type='hidden' name='total_price' value='$total_price'>";
            echo "<a href='login1.php' class='btn btn-secondary mt-3'>first login</a>";
            echo "</form>";             




                // Add form for booking
                
            } else {
                echo "Error: Room not found.";
            }

            // Close prepared statement and database connection
            $stmt->close();
            $mysqli->close();
        } else {
            echo "Form data is not complete.";
        }
        ?>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
