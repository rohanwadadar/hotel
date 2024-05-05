




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Razorpay JavaScript Library -->
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
    <!-- Booking Form -->
    <h2>Booking Form</h2>
    <form action="process_booking.php" method="post" enctype="multipart/form-data">
        <!-- Hidden input fields for booking details -->
        <?php
        if (isset($_POST['selected_rooms'], $_POST['start_date'], $_POST['end_date'], $_POST['totalPrice'])) {
            echo '<input type="hidden" name="selected_rooms" value="' . htmlspecialchars($_POST['selected_rooms']) . '">';
            echo '<input type="hidden" name="start_date" value="' . htmlspecialchars($_POST['start_date']) . '">';
            echo '<input type="hidden" name="end_date" value="' . htmlspecialchars($_POST['end_date']) . '">';
            echo '<input type="hidden" name="totalPrice" value="' . htmlspecialchars($_POST['totalPrice']) . '">';
        }
        ?>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="adhar_proof">Aadhar Proof</label>
            <input type="file" class="form-control-file" id="adhar_proof" name="adhar_proof" required>
        </div>
        <div class="form-group">
            <label for="payment_amount">Payment Amount</label>
            <input type="text" class="form-control" id="payment_amount" name="payment_amount" value="" placeholder="Enter payment amount">
        </div>

        <button type="button" id="rzp-button" class="btn btn-primary">Pay Now</button>
        <input type="hidden" id="payment_id" name="payment_id">
        <button type="submit" id="submitButton" class="btn btn-primary" disabled>Proceed</button>
        
        <!-- Display submitted data for cross-checking -->
        <div class="mt-4">
            <h4>Submitted Data for Cross-checking:</h4>
            <ul>
                <?php
                // Display submitted data
                foreach ($_POST as $key => $value) {
                    echo '<li><strong>' . htmlspecialchars($key) . ':</strong> ' . htmlspecialchars($value) . '</li>';
                }
                ?>
            </ul>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Razorpay Integration -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    // Razorpay API keys
    var razorpay_test_key = 'rzp_test_3GbERORHGytDZ5';
    var razorpay_test_secret_key = 'lO9H2BCwIOJbL5k4MYHqF0cd';

    // Initialize Razorpay
    var options = {
        key: razorpay_test_key,
        amount: 100, // Amount will be set dynamically
        currency: "INR",
        name: "Raj Hotel",
        description: "Room Booking Payment",
        image: "https://example.com/your_logo.png", // Replace with your logo URL
        handler: function (response) {
            // Handle the success response
            console.log(response);
            // Store the payment ID in the hidden input field
            document.getElementById('payment_id').value = response.razorpay_payment_id;
            // Enable the submit button
            document.getElementById('submitButton').disabled = false;
        },
        prefill: {
            name: "", // Pass the user's name
            email: "", // Pass the user's email
            contact: "" // Pass the user's phone number
        },
        notes: {
            address: "" // Pass the user's address
        },
        theme: {
            color: "#3399cc" // You can customize the theme color
        }
    };

    // Open Razorpay checkout on button click
    document.getElementById('rzp-button').onclick = function(e) {
        var paymentAmount = parseInt(document.getElementById('payment_amount').value);
        if (paymentAmount > 700) {
            options.amount = paymentAmount * 100; // Convert to paise
            var rzp1 = new Razorpay(options);
            rzp1.open();
        } else {
            alert('Invalid payment amount.');
        }
        e.preventDefault();
    }
</script>

</body>
</html>
