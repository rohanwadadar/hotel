<?php
// Include database connection
include_once 'db.php';

// Initialize session
session_start();

// Check if the user is already logged in, if yes, then redirect them to the home page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index2.php");
    exit;
}

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Define success message
$login_success_message = '';

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Check input errors before proceeding to authenticate the user
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Set login success message
                            $login_success_message = 'Login successful!';
                            
                            // Redirect user to home page after a delay
                            echo '<script>
                                    setTimeout(function() {
                                        window.location.href = "index2.php";
                                    }, 2000); // 2 seconds delay
                                 </script>';
                        } else{
                            // Password is not valid, display a generic error message
                            $password_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $username_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        /* Your custom CSS styles here */
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="signup1.php">Sign up now</a>.</p>
        </form>
    </div>
    
    <!-- Display login success message as a pop-up -->
    <?php if (!empty($login_success_message)): ?>
        <script>
            alert("<?php echo $login_success_message; ?>");
        </script>
    <?php endif; ?>
</body>
</html>
